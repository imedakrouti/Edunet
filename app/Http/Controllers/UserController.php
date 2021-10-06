<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\models\Subject;

class UserController extends Controller
{
    public function create(){
        $matieres=subject::all();
        return view ('auth.register',compact('matieres'));
        //return view('auth.register');
    }
    public function store(StudentRequest $request)
    {
        //dd($request->all());
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
         $data_user['password']=Hash::make($request->password);
         //dd($data_user);
         $user = user::create($data_user);

        $user->student()->create([
            'gender'            => $request->gender,
            'phone'             => $request->phone,
            'address'           => $request->address,
        ]);

        $user->attachRoles(['Student','admin']);

        toast(__('site.added_successfully'), 'success');
        return redirect()->route('dashboard.student.index');
    }

}
