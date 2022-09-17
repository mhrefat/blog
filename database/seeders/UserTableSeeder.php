<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
             'name' => 'Super Admin',
             'email' => 'superadmin@gmail.com',
             'password' => Hash::make('123admin'),
             'email_verified_at'=> now(),
             'remember_token' => Str::random(10),
             'created_at' => date("Y-m-d H:i:s"),
             'updated_at' => date("Y-m-d H:i:s"),
    ]);
    }
}
