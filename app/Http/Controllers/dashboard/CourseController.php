<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Teacher;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Validator,Redirect,Response,File;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( auth::user()->teacher){
            $teacher=auth::user()->teacher;
            $courses=$teacher->courses()->latest()->paginate(4);
        }
        else{
            $courses=course::latest()->paginate(4);
        }

        return view('dashboard.courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd(auth::user()->id);
       // $teacher=teacher::where('user_id',auth::user()->id)->get();
          //dd(auth::user());
       //   dd($teacher);
       // dd($teacher->id);
        $subjects=subject::all();
        return view('dashboard.courses.create',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $teacher=teacher::where('user_id',auth::user()->id)->get();
       $teacher=auth::user()->teacher;
       // dd($teacher);

        $request->validate([
            'title'         =>'required|string|min:4',
            'description'   =>'required|string|min:7',
            'image'         =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'course'          => 'required' ,
            'subject_id'    =>'required',

        ]);
         $data_user=$request->except(['image','profile_avatar_remove']);
       //  dd($data_user);
        if($request->image){
            // $request->image->store('user-images','public_upload');
              Image::make($request->image)->resize(300, null, function ($constraint) {
                 $constraint->aspectRatio();
          })->save(public_path('uploads/courses/'.$request->image->hashName()));
          $data_user['image']=$request->image->hashName();
         }

         if($request->course) {
          /*   $request->image->store('images','public');
            $request->image->store('user-images','public_upload'); */

            $path="uploads/courses";
             //1. get file extension
            $file_extension = $request->course -> getClientOriginalExtension();
            //2 add time to differnet each image from athor
            $file_name = time().'.'.$file_extension;

             $request->course -> move($path,$file_name);
            // $file_name= $this->saveImage($request->image,$path);
            //dd($file_name);
            $data_user['course']=$file_name;
            $mime = $request->course->getClientMimeType();
            if ($mime == "video/x-flv" || $mime == "video/mp4" || $mime == "application/x-mpegURL" || $mime == "video/MP2T" || $mime == "video/3gpp" || $mime == "video/quicktime" || $mime == "video/x-msvideo" || $mime == "video/x-ms-wmv")
                {
                    $data_user['type']='video';
                }
            else
            $data_user['type']='writable';
         }
         //dd($data_user);
         $data_user['teacher_id']=$teacher->id;
         Course::create($data_user);
         toast(__('site.added_successfully'), 'success');
         return redirect()->route('dashboard.course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        $subjects=subject::all();
        return view('dashboard.courses.edit',compact('subjects','course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        //dd($course->teacher->id);
        $request->validate([
            'title'         =>'required|string|min:4',
            'description'   =>'required|string|min:7',
            'image'         =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             /* 'course'       =>'required', */
            'subject_id'    =>'required',
        ]);
           /*  dd($request->all()); */
        $data_course=$request->except(['image','profile_avatar_remove','course','_token','_method']);
        //dd($request->all());
        if($request->image){
           if($course->image != 'default.jpg'){
              // Storage::disk('public_upload')->delete('/user-images/' . $request->image);
               Storage::disk('public_upload')->delete('uploads/courses'.$course->image);
           }
           Image::make($request->image)->resize(300, null, function ($constraint) {
               $constraint->aspectRatio();
        })->save(public_path('uploads/courses/'.$request->image->hashName()));
        $data_course['image']=$request->image->hashName();
       }
       if($request->hasfile('course')) {
        Storage::disk('public_upload')->delete('/courses/'.$course->course);
          $path="uploads/courses";
           //1. get file extension
          $file_extension = $request->course -> getClientOriginalExtension();
          //2 add time to differnet each image from athor
          $file_name = time().'.'.$file_extension;

         $request->course -> move($path,$file_name);
          // $file_name= $this->saveImage($request->image,$path);
          //dd($file_name);
          $data_course['course']=$file_name;
          $mime = $request->course->getClientMimeType();
          if ($mime == "video/x-flv" || $mime == "video/mp4" || $mime == "application/x-mpegURL" || $mime == "video/MP2T" || $mime == "video/3gpp" || $mime == "video/quicktime" || $mime == "video/x-msvideo" || $mime == "video/x-ms-wmv")
              {
                  $data_course['type']='video';
              }
          else
          $data_course['type']='writable';
          
       }
       //dd($data_course);
      // $data_course['teacher_id']=$teacher->id;
       $course->update($data_course);
       toast(__('site.updated_successfully'), 'success');
       return redirect()->route('dashboard.course.index');
  }
      
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        if($course->image != 'default.png'){
            Storage::disk('public_upload')->delete('/courses/'.$course->image);
        }
        Storage::disk('public_upload')->delete('/courses/'.$course->course);
         $course->delete();
       /*  $user = User::findOrFail(3); */
       // dd($user);
        /* $user->delete(); */
        //toast( 'Eleve supprimé avec succé','success',);
        toast(__('site.deleted_successfully'), 'success');

        return redirect()->back();
    }

    public function download($file){
        $file_path = public_path('uploads/courses/'.$file);
        return response()->download( $file_path);
    }
}
