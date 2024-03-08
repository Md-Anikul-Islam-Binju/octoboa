<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\admin\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Toastr;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::latest()->paginate(10);
        return view('admin.pages.faq.faq',compact('faq'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_arabic' => 'required',
        ]);
        try {
            DB::beginTransaction();
            $faq = new Faq([
                'title_arabic' => $request->title_arabic,
                'title_english' => $request->title_english,
                'description_arabic' => $request->description_arabic,
                'description_english' => $request->description_english,
            ]);
            $faq->save();
            DB::commit();
            Toastr::success('Faq Successfully Added', 'Success');
            return redirect()->back();
        } catch (\Exception $ex) {
            DB::rollBack();
            Toastr::error('Failed to add Faq: ' . $ex->getMessage(), 'Error');
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
            $faq = Faq::findOrFail($id);
            $faq->title_arabic = $request->input('title_arabic');
            $faq->title_english = $request->input('title_english');
            $faq->description_arabic = $request->input('description_arabic');
            $faq->description_english = $request->input('description_english');
            $faq->status = $request->input('status');
            $faq->save();
            Toastr::success('Faq updated Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to add Faq: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $faq = Faq::findOrFail($id);
            $faq->delete();
            Toastr::success('Faq deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to add Faq: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }
}
