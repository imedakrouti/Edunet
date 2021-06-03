<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\Teacher;
use App\models\user;
use App\models\Subject;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequest;
use App\Http\Requests\TeacherUpdateRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers =Teacher::paginate();
        /* foreach ($teachers as $teacher) {
            # code...
            dd($teacher->user->id);
        } */
       // $teacher=teacher::with('subjects')->find(11);
       // dd($teacher->subjects[1]->title);
       /* foreach ($teacher->subjects as $subject) {
           # code...
       //  echo( $subject->title) ;
       } */
       $subject=subject::find(3);
       //dd($subject->teachers);
     /*   foreach ($subject->teachers as $teacher) {
        # code...
      echo( $teacher->user->first_name) ;
    } */
       // toast('تمت إضافة الطالب بنجاح','success');
        return view('dashboard.Teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matieres=subject::all();
        return view ('dashboard.Teachers.create',compact('matieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {

       // dd($request->all());
        $data_user=$request->except(['image','password_confirmation','gender','phone','address','matieres']);
        // dd($data_user);
        if($request->image){
            // $request->image->store('user-images','public_upload');
              Image::make($request->image)->resize(300, null, function ($constraint) {
                 $constraint->aspectRatio();
          })->save(public_path('uploads/user-images/'.$request->image->hashName()));
          $data_user['image']=$request->image->hashName();
         }
         $data_user['password']=Hash::make($request->password);
        // dd($data_user);
         $user = user::create($data_user);

        $user->Teacher()->create([
            'gender'            => $request->gender,
            'phone'             => $request->phone,
            'address'           => $request->address,
        ]);

        $user->attachRoles(['Teacher','admin']);
        $teacher=$user->teacher;
       // dd($teacher);
        //$teacher->subjects()->sync($request->matieres);
        $user->teacher->subjects()->attach($request->matieres);
        toast(__('site.added_successfully'), 'success');
        return redirect()->route('dashboard.teacher.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('dashboard.Teachers.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherUpdateRequest $request, Teacher $teacher)
    {
        $data_user=$request->except(['image','password_confirmation','gender','phone','address','_token','_method']);

         //dd($data_user);

         if($request->image){
            if($teacher->user->image != 'default.png'){
               // Storage::disk('public_upload')->delete('/user-images/' . $request->image);
                Storage::disk('public_upload')->delete('/user-images/'.$teacher->user->image);
            }
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
         })->save(public_path('uploads/user-images/'.$request->image->hashName()));
         $data_user['image']=$request->image->hashName();
        }
         //dd($data_user);

        $teacher->user()->update($data_user);

        $teacher->update([
            'gender'            => $request->gender,
            'phone'             => $request->phone,
            'address'           => $request->address,
        ]);
        toast(__('site.updated_successfully'), 'success');
        return redirect()->route('dashboard.teacher.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        if($teacher->user->image != 'default.jpg'){
            Storage::disk('public_upload')->delete('/user-images/'.$teacher->user->image);
        }
         $teacher->user->delete();
       /*  $user = User::findOrFail(3); */
       // dd($user);
        /* $user->delete(); */
        //toast( 'Eleve supprimé avec succé','success',);
        toast(__('site.deleted_successfully'), 'success');

        return redirect()->back();
    }
}
