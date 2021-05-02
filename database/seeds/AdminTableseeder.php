<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=user::create([
            'first_name'    =>'super',
            'last_name'     =>'admin',
            'email'         =>'super_admin@gmail.com',
            'password'      =>bcrypt('123456'),
            'status'        =>'1',
        ]);
        $user->attachRole('super_admin');
    }
}
