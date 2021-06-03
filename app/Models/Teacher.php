<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Course;
use App\Models\Task;
use App\Models\User;

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

      return  $this->belongsTo(user::class);
    }

    public function subjects(){

        return $this->belongsToMany (Subject::class);

    }
    public function courses(){

        return $this->hasMany(Course::class);
    }
    public function tasks(){

        return $this->hasMany(task::class);
    }
}
