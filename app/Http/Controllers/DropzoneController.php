<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    public function dropzone()
    {
        return view('dropzone-view');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
        dd($image);
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        return response()->json(['success'=>$imageName]);
    }
}
