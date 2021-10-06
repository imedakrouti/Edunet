<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Validator,Redirect,Response,File;

class TaskController extends Controller
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
            $tasks=$teacher->tasks()->latest()->paginate(4);
        }
        else{
            $tasks=task::latest()->paginate(4);
        }
       // $tasks=task::latest()->paginate(3);
        return view('dashboard.tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects=subject::all();
        return view('dashboard.tasks.create',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$teacher=teacher::where('user_id',auth::user()->id)->get();
        $teacher=auth::user()->teacher;
        //dd($teacher->id);

        $request->validate([
            'title'         =>'required|string|min:4',
            'description'   =>'required|string|min:7',
            'image'         =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'task'          => 'required' ,
            'subject_id'    =>'required',

        ]);
         $data_user=$request->except(['image','profile_avatar_remove']);
       //  dd($data_user);
        if($request->image){
            // $request->image->store('user-images','public_upload');
              Image::make($request->image)->resize(300, null, function ($constraint) {
                 $constraint->aspectRatio();
          })->save(public_path('uploads/tasks/'.$request->image->hashName()));
          $data_user['image']=$request->image->hashName();
         }

         if($request->task) {
          /*   $request->image->store('images','public');
            $request->image->store('user-images','public_upload'); */

            $path="uploads/tasks";
             //1. get file extension
            $file_extension = $request->task -> getClientOriginalExtension();
            //2 add time to differnet each image from athor
            $file_name = time().'.'.$file_extension;

             $request->task -> move($path,$file_name);
            // $file_name= $this->saveImage($request->image,$path);
            //dd($file_name);
            $data_user['task']=$file_name;
            $mime = $request->task->getClientMimeType();
            if ($mime == "video/x-flv" || $mime == "video/mp4" || $mime == "application/x-mpegURL" || $mime == "video/MP2T" || $mime == "video/3gpp" || $mime == "video/quicktime" || $mime == "video/x-msvideo" || $mime == "video/x-ms-wmv")
                {
                    $data_user['type']='video';
                }
            else
            $data_user['type']='writable';
         }
         //dd($data_user);
        //dd($teacher->id);
         //$data_user['teacher_id']=$teacher->id;
         $teacher->tasks()->create($data_user);
         //Task::create($data_user);
         toast(__('site.added_successfully'), 'success');
         return redirect()->route('dashboard.task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $subjects=subject::all();
        return view('dashboard.tasks.edit',compact('subjects','task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title'         =>'required|string|min:4',
            'description'   =>'required|string|min:7',
            'image'         =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             /* 'task'       =>'required', */
            'subject_id'    =>'required',
        ]);
           /*  dd($request->all()); */
        $data_task=$request->except(['image','profile_avatar_remove','task','_token','_method']);
        //dd($request->all());
        if($request->image){
           if($task->image != 'default.jpg'){
              // Storage::disk('public_upload')->delete('/user-images/' . $request->image);
               Storage::disk('public_upload')->delete('uploads/tasks'.$task->image);
           }
           Image::make($request->image)->resize(300, null, function ($constraint) {
               $constraint->aspectRatio();
        })->save(public_path('uploads/tasks/'.$request->image->hashName()));
        $data_task['image']=$request->image->hashName();
       }
       if($request->hasfile('task')) {
        Storage::disk('public_upload')->delete('/tasks/'.$task->task);
          $path="uploads/tasks";
           //1. get file extension
          $file_extension = $request->task -> getClientOriginalExtension();
          //2 add time to differnet each image from athor
          $file_name = time().'.'.$file_extension;

         $request->task -> move($path,$file_name);
          // $file_name= $this->saveImage($request->image,$path);
          //dd($file_name);
          $data_task['task']=$file_name;
          $mime = $request->task->getClientMimeType();
          if ($mime == "video/x-flv" || $mime == "video/mp4" || $mime == "application/x-mpegURL" || $mime == "video/MP2T" || $mime == "video/3gpp" || $mime == "video/quicktime" || $mime == "video/x-msvideo" || $mime == "video/x-ms-wmv")
              {
                  $data_task['type']='video';
              }
          else
          $data_task['type']='writable';
          
       }
       //dd($data_task);
      // $data_task['teacher_id']=$teacher->id;
       $task->update($data_task);
       toast(__('site.updated_successfully'), 'success');
       return redirect()->route('dashboard.task.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        if($task->image != 'default.png'){
            Storage::disk('public_upload')->delete('/tasks/'.$task->image);
        }
        Storage::disk('public_upload')->delete('/tasks/'.$task->task);
         $task->delete();
       /*  $user = User::findOrFail(3); */
       // dd($user);
        /* $user->delete(); */
        //toast( 'Eleve supprimé avec succé','success',);
        toast(__('site.deleted_successfully'), 'success');

        return redirect()->back();
    }

    public function download($file){
        $file_path = public_path('uploads/tasks/'.$file);
        return response()->download( $file_path);
    }

}
