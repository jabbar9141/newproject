<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeedes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'avatar' => "avatar-10.jpg",
            'name' => "Alex",
            'surname' => "Carry",
            'email' => "alexcarry@gmail.com",
            'date_of_birth' =>Carbon::parse('02-06-1998'),
            'sex' => "Mujer",
            'vahical_type' => 'car',
            'job'=> "student",
            'job_description' => "by profession i am student",
            'identity_code'=> "122345",
            'description' => "this is the details of my profile",
            'password' => Hash::make('1234567890'),
            'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

    }
}
