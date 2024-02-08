<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::create([
            'name'=>'Amar Ghifari',
            'email'=>'superuser@gmail.com',
            'email_verified_at'=>now(),
            'role'=>'superuser',
            'password'=>Hash::make('12345678'),
        ]);
        User::create([
            'name'=>'Politeknik Balekambang',
            'email'=>'politbangjepara@gmail.com',
            'email_verified_at'=>now(),
            'role'=>'admin',
            'password'=>Hash::make('12345678'),
        ]);
        User::create([
            'name'=>'User',
            'email'=>'user@gmail.com',
            'email_verified_at'=>now(),
            'role'=>'user',
            'password'=>Hash::make('12345678'),
        ]);
    }
}
