<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
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
