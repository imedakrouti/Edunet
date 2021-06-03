<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\teacher;
use App\Models\student;
use App\Models\subject;
use App\Models\book;
use App\Models\task;

class welcomeController extends Controller
{

    public function index(){

        //dd(auth::user());
        $students=student::all();
        $teachers=teacher::all();
        $subjects=subject::all();
        $books=book::all();
        $tasks=task::all();
       // $students=student::all();

    /*     if(auth::user()->hasRole('super_admin')){

            //Alert::success('Success Title', 'Success Message');
            //toast('Your Post as been submited!','success')->background('green')->autoClose(5000);
            //alert('Title','Lorem Lorem Lorem', 'success')->addImage('https://unsplash.it/400/200');


            return view('dashboard.super_admin',compact('students','teachers','subjects','books','tasks'));
        }
        elseif (auth::user()->hasRole('student')) {
            return view('dashboard.student',compact('subjects','books','tasks'));
        } */
        $student=auth::user();
        return view('dashboard.index',compact('students','teachers','subjects','books','tasks'));
             //dd($student->student);



    }
}
