<?php

use Illuminate\Database\Seeder;
use App\Models\user;
use App\Models\Teacher;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=user::create([
            'first_name'=>'samia',
            'last_name'=>'agili',
            'email'=>'samia@agili.com',
            'password'=>bcrypt('123456'),
        ]);
        $user->teacher()->create([
            'phone'        =>23741780,
            'gender'       =>'male',
            'address'      =>'sfax',
        ]);
        $user->attachRoles(['teacher','admin']);
    }
}
