<?php

namespace App\Http\Controllers\admin;
use App\Helpers\SlugHelper; // Import the SlugHelper
use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Toastr;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.pages.category.category',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_arabic' => 'required',
        ]);
        try {
            DB::beginTransaction();
            $category = new Category([
                'name_arabic' => $request->name_arabic,
                'name_english' => $request->name_english,
                'slug_arabic' => SlugHelper::slug($request->name_arabic),
                'slug_english' => Str::slug($request->name_english)
            ]);
            $category->save();
            DB::commit();
            Toastr::success('Category Successfully Added', 'Success');
            return redirect()->back();
        } catch (\Exception $ex) {
            DB::rollBack();
            Toastr::error('Failed to add Category: ' . $ex->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name_arabic' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $category = Category::findOrFail($id);
            $category->name_arabic = $request->input('name_arabic');
            $category->name_english = $request->input('name_english');
            $category->slug_arabic = SlugHelper::slug($request->name_arabic);
            $category->slug_english = Str::slug($request->name_english);
            $category->status = $request->input('status');
            $category->save();
            Toastr::success('Category updated Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to add Category: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();
            Toastr::success('Category deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to add Category: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }
}
