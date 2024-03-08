<?php

namespace App\Http\Controllers;

use App\Models\admin\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        $teamMember = Team::latest()->get();
        return view('frontend.pages.team.team',compact('teamMember'));
    }
    public function singleTeam()
    {
        return view('frontend.pages.team.singleTeam');
    }
}
