<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;




class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       /*  $students =user::select('id','first_name','last_name','email','image','status')->whereroleIs('student')->withCount('student')->where(function ($q) use ($request) {
            return $q->when($request->table_search, function ($query) use ($request) {
                return $query->where('first_name', 'like', '%' . $request->table_search . '%')
                    ->orwhere('last_name', 'like', "%{$request->table_search}%");
            });
        })->latest()->paginate(5); */

        $students =student:: withCount('user')->when($request->table_search, function ($query)use ($request)  {
             $query->wherehas('user',function(builder $q)use ($request){
                 $q->where('first_name','like', '%' . $request->table_search . '%')
                ->orwhere('last_name', 'like', "%{$request->table_search}%");
            });

   })->latest()->paginate(5);

 /*   $students = student::with(['user' => function ($query) use ($request){
    return $query->where('first_name','like', '%' . $request->table_search . '%')
                ->orwhere('last_name', 'like', "%{$request->table_search}%");
   }])->latest()->paginate(5);
  // $students=student::paginate(); */
   //dd($students);

         toast('Eleves Ajouté avec succé','success')->autoClose(5000);
           return view('dashboard.students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('dashboard.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
       // dd($request);
       /*  $user = User::create([
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'email'             => $request->email,
            'password'          => Hash::make($request->password)
        ]); */

        /* if ($request->hasFile('image')) {
            $profile = Str::slug($user->name).'-'.$user->id.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/user'), $profile);
            $user->update([
                'image' => $profile
            ]);
        } */
        $data_user=$request->except(['image','password_confirmation','gender','phone','address']);
        // dd($data_user);
        if($request->image){
            // $request->image->store('user-images','public_upload');
              Image::make($request->image)->resize(300, null, function ($constraint) {
                 $constraint->aspectRatio();
          })->save(public_path('uploads/user-images/'.$request->image->hashName()));
          $data_user['image']=$request->image->hashName();
         }
         $user = user::create($data_user);

        $user->student()->create([
            'gender'            => $request->gender,
            'phone'             => $request->phone,
            'address'           => $request->addresse,
        ]);

        $user->attachRoles(['Student','admin']);

        toast('Eleves Ajouté avec succé','success');
        

        return redirect()->route('dashboard.student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('dashboard.students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
         /* $user=user::find($student->user_id);
         $user->delete();  */
         if($student->user->image != 'default.jpg'){
            Storage::disk('public_upload')->delete('/user-images/'.$student->user->image);
        }
         $student->user->delete();
       /*  $user = User::findOrFail(3); */
       // dd($user);
        /* $user->delete(); */
        //toast( 'Eleve supprimé avec succé','success',);
        toast('Eleve supprimé avec succé', 'success')->position('left', 'left')->background('#ddd')->autoClose(5000);

        return redirect()->back();
    }


}
