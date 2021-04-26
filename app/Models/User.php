<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Notifications\Notifiable;
use App\Models\Student;
use App\Models\Teacher;

class User extends Authenticatable
{
    use Notifiable;

    use LaratrustUserTrait; // add this trait to your user model

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','email', 'password','image'
    ];

    protected $appends=['path_image','name'];
    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);

    }//end of get first name

    public function getLastNameAttribute($value)
    {
        return ucfirst($value);

    }//end of get last name
    
    public function getNameAttribute(){
        return $this->first_name . " {$this->last_name}" ;
    }


    /**Student Relation */

        public function student()
        {
            return $this->hasOne(Student::class);
        }
        public function teacher()
        {
            return $this->hasOne(Teacher::class);
        }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
