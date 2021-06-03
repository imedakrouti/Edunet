<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;

class task extends Model
{
    protected $guarded=[];

    protected $appends=['path_image','path_task'];

    public function getPathImageAttribute(){

        return asset('uploads/tasks/'.$this->image);

    }
    public function getPathTaskAttribute(){

        return asset('uploads/tasks/'.$this->book);

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
