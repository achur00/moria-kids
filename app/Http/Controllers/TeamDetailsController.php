<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submenu;
use App\Models\Section;

class TeamDetailsController extends Controller
{
    public function show($id)
    {
       $team=Submenu::find($id);
       $section=Section::with(['Experience'])->find($id);
        // all service except the current service
       $teams=Submenu::where('id', '!=', $id)->get();
        // dd($team);
       $experience = $section->Experience;
        // dd($experience);
        return view('team_details')->with('team',$teams)
        ->with('team',$team->Sections->first())
        ->with('team2',$team)
        ->with('experiences',$experience);


    }
    //
}
