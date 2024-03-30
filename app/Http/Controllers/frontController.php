<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Fakta;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){

        $biodata = Biodata::first();
        $fakta = Fakta::first();
        $project = Project::all();
        $skill = Skill::get();
        $pendidikan = Pendidikan::get();
        $pengalaman = Pengalaman::get();
        return view('welcome',[
            'biodata'=>$biodata,
            'fakta'=>$fakta,
            'project'=>$project,
            'skill' => $skill,
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
        ]);
    }
}
