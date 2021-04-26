<?php

namespace App\models;
use APP\Models\User;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'gender',
        'phone',
        'dateofbirth',
        'address',
  
    ];

    public function user(){
        $this->belongTo(user::class);
    }

}
