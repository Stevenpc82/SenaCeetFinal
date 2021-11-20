<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'teacher',
            'email'=>'teacher@gmail.com',
            'password'=>Hash::make(123456789),
        ]);
        $user->assignRole('teacher');

        $user = User::create([
            'name'=>'student',
            'email'=>'student@gmail.com',
            'password'=>Hash::make(123456789),
        ]);
        $user->assignRole('student');

    }
}
