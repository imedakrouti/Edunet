<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        if(auth::user()->hasRole('teacher')){
            $teacher=auth::user()->teacher;
            $matieres=$teacher->subjects;
            return view('dashboard.profile.index',compact('matieres'));
        }
       else{
        return view('dashboard.profile.index');
       }

    }
}
