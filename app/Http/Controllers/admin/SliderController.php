<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use App\Models\admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Toastr;

class SliderController extends Controller
{
    public function index()
    {
        $category = Category::latest()->get();
        $sliders = Slider::latest()->paginate(10);
        return view('admin.pages.slider.slider',compact('sliders','category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_arabic' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        try {
            DB::beginTransaction();
            $slider = new Slider([
                'category_id' => $request->category_id,
                'title_arabic' => $request->title_arabic,
                'title_english' => $request->title_english,
                'link' => $request->link,
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('slider-images', 'public');
                $slider->image = $imagePath;
            }
            $slider->save();
            DB::commit();
            Toastr::success('Slider Successfully Added', 'Success');
            return redirect()->back();
        } catch (\Exception $ex) {
            DB::rollBack();
            Toastr::error('Failed to add Slider: ' . $ex->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title_arabic' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $slider = Slider::findOrFail($id);
            $slider->category_id = $request->input('category_id');
            $slider->title_arabic = $request->input('title_arabic');
            $slider->title_english = $request->input('title_english');
            $slider->link = $request->input('link');
            $slider->status = $request->input('status');
            $slider->save();
            Toastr::success('Slider updated Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to update Slider: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $slider = Slider::findOrFail($id);
            if (!empty($slider->image)) {
                Storage::disk('public')->delete($slider->image);
            }
            $slider->delete();
            Toastr::success('Slider deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to delete Slider: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }
}
