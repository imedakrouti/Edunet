<?php

namespace App\Http\Controllers\dashboard;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function userChangeStatus(Request $request)
    {
    	\Log::info($request->all());
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        //toast('Eleves Ajouté avec succé','success');
        return response()->json(['success'=>'Status change successfully.']);
    }
    
}
