<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class book extends Model
{
    protected $fillable=['title','description','image' ,'book','subject_id'];
    protected $appends=['path_image','path_book'];

    public function getPathImageAttribute(){

        return asset('uploads/books/'.$this->image);

    }
    public function getPathBookAttribute(){

        return asset('uploads/books/'.$this->book);

    }
    public function getTitleAttribute($value){
        return ucfirst($value);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

}
