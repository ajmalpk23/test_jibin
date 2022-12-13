<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin123'),
            'role'=>'admin',
            'status'=>'active'
        ]);

        User::create([
            'name'=>'User',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('user123'),
            'role'=>'user',
            'status'=>'active'
        ]);

        User::create([
            'name'=>'Auditor',
            'email'=>'auditor@gmail.com',
            'password'=>Hash::make('auditor123'),
            'role'=>'user',
            'status'=>'active'
        ]);
    }
}
