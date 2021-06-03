<?php

namespace App\Models;
use App\Models\Exam;

use Illuminate\Database\Eloquent\Model;

class concour extends Model
{
    protected $fillable=['id','year'];

    //exams
    public function exams(){
        return $this->hasMany(exam::class);

    }


}
