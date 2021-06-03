<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\Subject;
use App\models\course;
use App\models\Book;
use App\models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\SubjectRequest;
use Illuminate\Database\Eloquent\Builder;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Validator,Redirect,Response,File;


class SubjectController extends Controller
{


        public function __construct()
    {
        $this->middleware('permission:subjects-read')->only('index');
        $this->middleware('permission:subjects-read')->only('show');
        $this->middleware('permission:subjects-create')->only('create','store');
        $this->middleware('permission:subjects-update')->only('edit','update');
        $this->middleware('permission:subjects-delete')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
       /*   $subjects=subject::all();
        //dd($subjects);
        foreach($subjects as $s){
            dd($s->courses);
        }
        dd($subjects); */
        /* $subjects=subject::find(1);
        dd($subjects->teachers->count()); */
      /*   foreach ($subjects as $s){
            dd($s->courses[0]->title);
        }
        $courses=course::all();
       // dd($courses);
        foreach($courses as $course){
            dd($course->subject->title);
        } */

       /*  $subject=subject::find(1); */
        //dd($subject->courses);
       /*  foreach ($subject->courses as $s){
            dd($s);
        } */
       // toast('Matiere Ajouté avec succé','success');

        if(auth::user()->hasRole('super_admin')){
            $subjects=subject::withCount('courses','teachers')->paginate(4);
        }
        elseif( auth::user()->teacher){

            $teacher=auth::user()->teacher;
            $subjects=$teacher->subjects;
        }
        else {
            # code...
            $subjects=subject::withCount('courses','teachers')->paginate(4);
        }
       //dd($subjects);
        return view('dashboard.subjects.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'title'         =>'required|string|min:4|unique:subjects',
            'description'   =>'required|string|min:7',
            'image'         =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $data_user=$request->except(['image']);
        // dd($data_user);
        if($request->image){
            // $request->image->store('user-images','public_upload');
              Image::make($request->image)->resize(300, null, function ($constraint) {
                 $constraint->aspectRatio();
          })->save(public_path('uploads/matiere/'.$request->image->hashName()));
          $data_user['image']=$request->image->hashName();
         }
         if($request->book) {
          /*   $request->image->store('images','public');
            $request->image->store('user-images','public_upload'); */
            $path="uploads/books";
             //1. get file extension
            $file_extension = $request->book -> getClientOriginalExtension();
            //2 add time to differnet each image from athor
            $file_name = time().'.'.$file_extension;

             $request->book -> move($path,$file_name);
            // $file_name= $this->saveImage($request->image,$path);
            //dd($file_name);
            $data_user['book']=$file_name;
         }
           //dd($data_user);
          subject::create($data_user);
          toast(__('site.added_successfully'), 'success');
         return redirect()->route('dashboard.subject.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
     {
        /*$subject=subject::with(['courses','books'])->latest()->paginate(2); */
      /*   $subject=subject::all();
        dd($subject) */;
       /*  if( auth::user()->teacher){
            $teacher=auth::user()->teacher;
            $courses=course::where('subject_id',$subject->id)->where('techer_id',$teacher->id)->latest()->paginate;
        }
        else{
            $subjects=subject::withCount('courses','teachers')->get();
        } */
        $books=$subject->books()->paginate(4);
        $courses=$subject->courses()->paginate(4);
        $tasks=$subject->tasks()->paginate(4);
        return view('dashboard.Subjects.show',compact('subject','books','courses','tasks'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view ('dashboard.subjects.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectRequest $request, Subject $subject)
    {


        $data_user=$request->except(['image']);
        // dd($data_user);
        if($request->image){
            if($subject->image != 'default.png'){
               // Storage::disk('public_upload')->delete('/user-images/' . $request->image);
                Storage::disk('public_upload')->delete('/matieres/'.$subject->image);
            }
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
         })->save(public_path('uploads/matiere/'.$request->image->hashName()));
        }
          $subject->update($data_user);

          toast(__('site.updated_successfully'), 'success');
         return redirect()->route('dashboard.subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        if($subject->image != 'default.jpg'){
            Storage::disk('public_upload')->delete('/matieres/'.$subject->image);
        }
         $subject->delete();
       /*  $user = User::findOrFail(3); */
       // dd($user);
        /* $user->delete(); */
        //toast( 'Eleve supprimé avec succé','success',);
        toast(__('site.deleted_successfully'), 'success');

        return redirect()->back();
    }

    public function download($file){
        $file_path = public_path('uploads/books/'.$file);
        return response()->download( $file_path);
    }

    public function subjectBook($id){

        /* $books=book::where('subject_id',$id)->latest()->paginate(4); */
        $subject=subject::find($id);
        $books=$subject->books()->latest()->paginate(4);

        return view('dashboard.Subjects.subject-book',compact('subject','books'));
    }
    public function subjectCourse($id){
       // $courses=course::where('subject_id',$id)->latest()->paginate(4);
       $subject=subject::find($id);
       $courses=$subject->courses()->latest()->paginate(4);
        return view('dashboard.Subjects.subject-course',compact('subject','courses'));
    }
    public function subjectTask($id){
       // $courses=course::where('subject_id',$id)->latest()->paginate(4);
       $subject=subject::find($id);
       $tasks=$subject->tasks()->latest()->paginate(4);
        return view('dashboard.Subjects.subject-task',compact('subject','tasks'));
    }
}
