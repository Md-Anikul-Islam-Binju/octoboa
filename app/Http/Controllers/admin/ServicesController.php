<?php

namespace App\Http\Controllers\admin;
use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\admin\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Toastr;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.pages.service.service',compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_arabic' => 'required',
            'short_description_arabic' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            DB::beginTransaction();
            $service = new Service([
                'title_arabic' => $request->title_arabic,
                'title_english' => $request->title_english,
                'slug_arabic' => SlugHelper::slug($request->title_arabic),
                'slug_english' => Str::slug($request->title_english),
                'short_description_arabic' => $request->short_description_arabic,
                'short_description_english' => $request->short_description_english,
                'long_description_arabic' => $request->long_description_arabic,
                'long_description_english' => $request->long_description_english,
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('service-images', 'public');
                $service->image = $imagePath;
            }

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $imagePath = $logo->store('service-logos', 'public');
                $service->logo = $imagePath;
            }


            $service->save();
            DB::commit();
            Toastr::success('Service Successfully Added', 'Success');
            return redirect()->back();
        } catch (\Exception $ex) {
            DB::rollBack();
            Toastr::error('Failed to add Service: ' . $ex->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title_arabic' => 'required',
                'short_description_arabic' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $service = Service::findOrFail($id);
            $service->title_arabic = $request->input('title_arabic');
            $service->title_english = $request->input('title_english');
            $service->slug_arabic = SlugHelper::slug($request->title_arabic);
            $service->slug_english = Str::slug($request->title_english);
            $service->short_description_arabic = $request->input('short_description_arabic');
            $service->short_description_english = $request->input('short_description_english');
            $service->long_description_arabic = $request->input('long_description_arabic');
            $service->long_description_english = $request->input('long_description_english');
            $service->status = $request->input('status');
            $service->save();
            Toastr::success('Service updated Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to update Service: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $service = Service::findOrFail($id);
            // Delete image file if it exists
            if (!empty($service->image)) {
                Storage::disk('public')->delete($service->image);
            }
            // Delete logo file if it exists
            if (!empty($service->logo)) {
                Storage::disk('public')->delete($service->logo);
            }
            // Delete the service record
            $service->delete();
            Toastr::success('Service deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to delete Service: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }

}
