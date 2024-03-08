<?php

namespace App\Http\Controllers\admin;
use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\admin\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Toastr;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = Team::latest()->paginate(10);
        return view('admin.pages.team.team',compact('teamMembers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_arabic' => 'required',
            'name_english' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            DB::beginTransaction();
            $team = new Team([
                'name_arabic' => $request->name_arabic,
                'name_english' => $request->name_english,
                'slug_arabic' => SlugHelper::slug($request->name_arabic),
                'slug_english' => Str::slug($request->name_english),
                'designation_arabic' => $request->designation_arabic,
                'designation_english' => $request->designation_english,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'email' => $request->email,
                // Set other fields as needed based on your 'Team' model
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('team-images', 'public');
                $team->image = $imagePath;
            }


            $team->save();
            DB::commit();
            Toastr::success('Team Member Successfully Added', 'Success');
            return redirect()->back();
        } catch (\Exception $ex) {
            DB::rollBack();
            Toastr::error('Failed to add Team Member: ' . $ex->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name_arabic' => 'required',
                'name_english' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $team = Team::findOrFail($id);
            $team->name_arabic = $request->input('name_arabic');
            $team->name_english = $request->input('name_english');
            $team->slug_arabic = SlugHelper::slug($request->name_arabic);
            $team->slug_english = Str::slug($request->name_english);
            $team->designation_arabic = $request->input('designation_arabic');
            $team->designation_english = $request->input('designation_english');
            $team->facebook = $request->input('facebook');
            $team->twitter = $request->input('twitter');
            $team->linkedin = $request->input('linkedin');
            $team->email = $request->input('email');
            $team->save();
            Toastr::success('Team Member updated Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to update Team Member: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $team = Team::findOrFail($id);
            $team->delete();
            Toastr::success('Team Member deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Failed to delete Team Member: ' . $e->getMessage(), 'Error');
            return redirect()->back();
        }
    }
}
