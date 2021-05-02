<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Course;

class Subject extends Model
{
    protected $garded=[];

    public function teachers(){

        return $this->belongsToMany (Teacher::class)->withTimestamps();

    }
    public function courses(){

        return $this->hasMany(course::class);
    }
}
