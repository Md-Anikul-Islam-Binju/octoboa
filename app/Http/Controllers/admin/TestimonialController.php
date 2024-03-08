<?php

namespace App\Http\Controllers\admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\admin\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Toastr;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.pages.testimonial.testimonial',compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_arabic' => 'required',
            'description_arabic' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        try {
            DB::beginTransaction();
            $testimonial = new Testimonial([
                'name_arabic' => $request->name_arabic,
                'name_english' => $request->name_english,
                'slug_arabic' => SlugHelper::slug($request->name_arabic),
                'slug_english' => Str::slug($request->name_english),
                'designation_arabic' => $request->designation_arabic,
                'designation_english' => $request->designation_english,
                'description_arabic' => $request->description_arabic,
                'description_english' => $request->description_english,
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('testimonial-images', 'public');
                $testimonial->image = $imagePath;
            }
            $testimonial->save();
            DB::commit();
            Toastr::success('Testimonial Successfully Added', 'Success');
            return redirect()->back();
        } catch (\Exception $ex) {
            DB::rollBack();
            Toastr::error('Failed to add Testimonial: ' . $ex->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name_arabic' => 'required',
                'description_arabic' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->name_arabic = $request->input('name_arabic');
            $testimonial->name_english = $request->input('name_english');
            $testimonial->slug_arabic = SlugHelper::slug($request->name_arabic);
            $testimonial->slug_english = Str::slug($request->name_english);
            $testimonial->designation_arabic = $request->input('designation_arabic');
            $testimonial->designation_english = $request->input('designation_english');
            $testimonial->description_arabic = $request->input('description_arabic');
            $testimonial->description_english = $request->input('description_english');
            $testimonial->status = $request->input('status');
            $testimonial->save();
            Toastr::success('Testimonial updated Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to update Testimonial: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            // Delete logo file if it exists
            if (!empty($testimonial->image)) {
                Storage::disk('public')->delete($testimonial->image);
            }
            // Delete the service record
            $testimonial->delete();
            Toastr::success('Testimonial deleted Successfully', 'Success');
        } catch (\Exception $e) {
            Toastr::error('Failed to delete Testimonial: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }
}
