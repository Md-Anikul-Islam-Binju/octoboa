<?php

namespace App\Http\Controllers\admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\admin\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Toastr;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::latest()->paginate(10);
        return view('admin.pages.tag.tag',compact('tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tag_name_arabic' => 'required',
        ]);
        try {
            DB::beginTransaction();
            $tag = new Tag([
                'tag_name_arabic' => $request->tag_name_arabic,
                'tag_name_english' => $request->tag_name_english,
                'slug_tag_arabic' => SlugHelper::slug($request->tag_name_arabic),
                'slug_tag_english' => Str::slug($request->tag_name_english)
            ]);
            $tag->save();
            DB::commit();
            Toastr::success('Tag Successfully Added', 'Success');
            return redirect()->back();
        } catch (\Exception $ex) {
            DB::rollBack();
            Toastr::error('Failed to add Tag: ' . $ex->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        try {
            $validator = Validator::make($request->all(), [
                'tag_name_arabic' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $tag = Tag::findOrFail($id);
            $tag->tag_name_arabic = $request->input('tag_name_arabic');
            $tag->tag_name_english = $request->input('tag_name_english');
            $tag->slug_tag_arabic = SlugHelper::slug($request->tag_name_arabic);
            $tag->slug_tag_english = Str::slug($request->tag_name_english);
            $tag->status = $request->input('status');
            $tag->save();
            Toastr::success('Tag updated Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to add Tag: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $tag = Tag::findOrFail($id);
            $tag->delete();
            Toastr::success('Tag deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to add Tag: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }
}
