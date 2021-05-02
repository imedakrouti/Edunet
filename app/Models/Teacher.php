<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Course;
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

    public function subjets(){

        return $this->belongsToMany (Subject::class)->withTimestamps();

    }
    public function courses(){

        return $this->hasMany(Course::class);
    }
}
