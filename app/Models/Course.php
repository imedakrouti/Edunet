<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;

class Course extends Model
{
    protected $guarded=[];

    public function students(){

        return $this->hasMany(Student::class);
    }

    public function teacher(){

        return $this->belongTo(teacher::class);
    }
    public function subject(){

        return $this->belongTo(subject::class);
    }
}
