<?php

namespace App\Http\Controllers\admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\admin\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Toastr;

class PortfolioManageController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.pages.portfolio.portfolio',compact('portfolios'));
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
            $portfolio = new Portfolio([
                'name_arabic' => $request->name_arabic,
                'name_english' => $request->name_english,
                'slug_arabic' => SlugHelper::slug($request->name_arabic),
                'slug_english' => Str::slug($request->name_english),
                'description_arabic' => $request->description_arabic,
                'description_english' => $request->description_english,
            ]);
            if ($request->hasFile('cover_image')) {
                $cover_image = $request->file('cover_image');
                $imagePath = $cover_image->store('portfolio-cover-images', 'public');
                $portfolio->cover_image = $imagePath;
            }
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('portfolio-images', 'public');
                $portfolio->image = $imagePath;
            }
            $portfolio->save();
            DB::commit();
            Toastr::success('Portfolio Successfully Added', 'Success');
            return redirect()->back();
        } catch (\Exception $ex) {
            DB::rollBack();
            Toastr::error('Failed to add Portfolio: ' . $ex->getMessage(), 'Error');
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
            $portfolio = Portfolio::findOrFail($id);
            $portfolio->name_arabic = $request->input('name_arabic');
            $portfolio->name_english = $request->input('name_english');
            $portfolio->slug_arabic = SlugHelper::slug($request->name_arabic);
            $portfolio->slug_english = Str::slug($request->name_english);
            $portfolio->description_arabic = $request->input('description_arabic');
            $portfolio->description_english = $request->input('description_english');
            $portfolio->status = $request->input('status');
            $portfolio->save();
            Toastr::success('Portfolio updated Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to update Portfolio: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $portfolio = Portfolio::findOrFail($id);
            // Delete image file if it exists
            if (!empty($portfolio->cover_image)) {
                Storage::disk('public')->delete($portfolio->cover_image);
            }
            // Delete logo file if it exists
            if (!empty($portfolio->image)) {
                Storage::disk('public')->delete($portfolio->image);
            }
            // Delete the service record
            $portfolio->delete();
            Toastr::success('Portfolio deleted Successfully', 'Success');
        } catch (\Exception $e) {
            Toastr::error('Failed to delete Portfolio: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }
}
