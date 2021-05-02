<?php

namespace App\models;
use App\Models\User;
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

        return $this->belongsTo(user::class);
    }

    public function course(){

        return $this->belongsToMany(course::class)->withTimestamps();
    }

}
