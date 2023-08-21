<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::create([
            'name'=>'Amar Ghifari',
            'email'=>'superuser@gmail.com',
            'email_verified_at'=>now(),
            'password'=>'123456',
        ]);
    }
}
