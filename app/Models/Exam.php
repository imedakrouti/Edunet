<?php

namespace App\Models;
use App\Models\Subject;
use App\Models\Concour;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable=['subject_id','concour_id','exam'];

    public function subject(){
        return $this->belongsTo(subject::class);
    }

    public function concour(){
        return $this->belongsTo(concour::class);
    }
}
