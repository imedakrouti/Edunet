<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\Book;
use Illuminate\Http\Request;
use App\Models\Subject;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Validator,Redirect,Response,File;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->query());
       /*  $books =book:: when($request->query(), function ($query)use ($request)  {
           return  $query->where('subject_id',$request->query('id'));
           })->latest()->paginate(4); */
           $books=book::latest()->paginate(4);

       // $books=book::all();
        // MyModel::distinct()->get(['column_name']);
        //$books=Book::distinct()->get(['title']);
        //dd($books);
        return view('dashboard.books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $subjects=subject::all();
        return view('dashboard.books.create',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
         $request->validate([
            'title'         =>'required|string|min:4',
            'description'   =>'required|string|min:7',
            'image'         =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',
            'book'          => 'required|mimes:pdf,xlx,csv,zip,rar' ,
            'subject_id'    =>'required|min:1'

        ]);
        $data_book=$request->except(['image','profile_avatar_remove']);
        // dd($data_user);
        if($request->image){
            // $request->image->store('user-images','public_upload');
              Image::make($request->image)->resize(300, null, function ($constraint) {
                 $constraint->aspectRatio();
          })->save(public_path('uploads/books/'.$request->image->hashName()));
          $data_book['image']=$request->image->hashName();
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
            $data_book['book']=$file_name;
         }
           //dd($data_user);
          Book::create($data_user);
          toast(__('site.added_successfully'), 'success');
         return redirect()->route('dashboard.book.index');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $subjects=subject::all();
        return view('dashboard.books.edit',compact('subjects','book'));
        //return view('dashboard.Books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title'         =>"required|string|min:4|unique:books,title,{$book->id}",
            'description'   =>'required|string|min:7',
            'image'         =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'book'          => 'required|mimes:pdf,xlx,csv,zip,rar' ,
            'subject_id'    =>'required'
        ]);
        $data_book=$request->except(['image','profile_avatar_remove']);
         //dd($data_user);
         if($request->image){
            if($book->image != 'default.jpg'){
               // Storage::disk('public_upload')->delete('/user-images/' . $request->image);
                Storage::disk('public_upload')->delete('uploads/books/'.$book->image);
            }
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
         })->save(public_path('uploads/books/'.$request->image->hashName()));
         $data_book['image']=$request->image->hashName();
        }
        // dd($data_user);
         //dd($data_book);
         if($request->book) {

            Storage::disk('public_upload')->delete('/books/'.$book->book);
             
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
              $data_book['book']=$file_name;
           }
        $book->update($data_book);
        toast(__('site.updated_successfully'), 'success');
        return redirect()->route('dashboard.book.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        if($book->image != 'default.png'){
            Storage::disk('public_upload')->delete('/books/'.$book->image);
        }
        Storage::disk('public_upload')->delete('/books/'.$book->book);
         $book->delete();
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


}
