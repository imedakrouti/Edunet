<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;

class Course extends Model
{
    protected $guarded=[];

    protected $appends=['path_image','path_course'];

    public function getPathImageAttribute(){

        return asset('uploads/courses/'.$this->image);

    }
    public function getPathCourseAttribute(){

        return asset('uploads/courses/'.$this->course);

    }

    public function students(){

        return $this->belongToMany(Student::class)->withTimestamps();
    }

    public function teacher(){

        return $this->belongsTo(teacher::class);
    }
    public function subject(){

        return $this->belongsTo(subject::class);
    }
}
