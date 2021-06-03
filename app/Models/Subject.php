<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Book;

class Subject extends Model
{
    protected $fillable=['title','description','image'];

    protected $appends=['path_image'];

    public function getTitleAttribute($value){

        return ucfirst($value);
    }

    public function getPathImageAttribute(){

        return asset('uploads/matiere/'.$this->image);
    }

    public function teachers(){

        return $this->belongsToMany (Teacher::class);

    }
    public function courses(){

        return $this->hasMany(Course::class);
    }

    public function books(){
        return $this->hasMany(Book::class);
    }
    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
