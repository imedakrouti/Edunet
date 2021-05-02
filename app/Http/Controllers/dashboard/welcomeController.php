<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\user;

class welcomeController extends Controller
{

    public function index(){

        //dd(auth::user());

        if(auth::user()->hasRole('super_admin')){

            //Alert::success('Success Title', 'Success Message');
            //toast('Your Post as been submited!','success')->background('green')->autoClose(5000);
            //alert('Title','Lorem Lorem Lorem', 'success')->addImage('https://unsplash.it/400/200');
            notify()->success('Laravel Notify is awesome!');

            return view('dashboard.super_admin');
        }
        $student=auth::user();
             dd($student->student);
            return view('dashboard.student');


    }
}
