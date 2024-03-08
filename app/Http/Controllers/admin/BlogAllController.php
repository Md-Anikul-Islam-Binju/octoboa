<?php

namespace App\Http\Controllers\admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\admin\Blog;
use App\Models\admin\Category;
use App\Models\admin\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Toastr;

class BlogAllController extends Controller
{
    public function index()
    {
        $category = Category::latest()->get();
        $tag = Tag::latest()->get();
        $blogs = Blog::latest()->paginate(10);
        return view('admin.pages.blog.blog',compact('blogs','category','tag'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_arabic' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        try {
            DB::beginTransaction();
            $blog = new Blog([
                'user_id' => Auth::id(),
                'category_id' => $request->category_id,
                'tag_id' => $request->tag_id,
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
                $imagePath = $image->store('blog-images', 'public');
                $blog->image = $imagePath;
            }
            $blog->save();
            DB::commit();
            Toastr::success('Blog Successfully Added', 'Success');
            return redirect()->back();
        } catch (\Exception $ex) {
            DB::rollBack();
            Toastr::error('Failed to add Blog: ' . $ex->getMessage(), 'Error');
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
            $blog = Blog::findOrFail($id);
            $blog->category_id = $request->input('category_id');
            $blog->tag_id = $request->input('tag_id');
            $blog->title_arabic = $request->input('title_arabic');
            $blog->title_english = $request->input('title_english');

            $blog->slug_arabic = SlugHelper::slug($request->title_arabic);
            $blog->slug_english = Str::slug($request->title_english);

            $blog->short_description_arabic = $request->input('short_description_arabic');
            $blog->short_description_english = $request->input('short_description_english');
            $blog->long_description_arabic = $request->input('long_description_arabic');
            $blog->long_description_english = $request->input('long_description_english');
            $blog->status = $request->input('status');
            $blog->save();
            Toastr::success('Blog updated Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to update Blog: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);
            if (!empty($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->delete();
            Toastr::success('Blog deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to delete Blog: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }
}
