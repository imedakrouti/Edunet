<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Course;

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

    public function subjets(){

        return $this->belongsToMany (Subject::class);

    }
    public function courses(){

        return $this->hasMany(Course::class);
    }
}
