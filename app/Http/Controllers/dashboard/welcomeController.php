<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\user;

class welcomeController extends Controller
{

    public function index(){

        //dd(auth::user());

        if(auth::user()->hasRole('super_admin')){
            return view('dashboard.super_admin');
        }
       
            return view('dashboard.journaliste');
        
       
    } 
}
