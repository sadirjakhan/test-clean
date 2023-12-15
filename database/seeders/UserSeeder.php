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
      $user = User::create([
        "name" => 'Muborak',
        "email" => 'Muborak2008@gmail.com',
        "password"=> Hash::make('bomba'),
        ]);

        $user->role()->attach([1,3]);

        $user2 = User::create([
            "name" => 'Balgarskiy',
            "email" => 'balgarskiy2008@gmail.com',
            "password"=> Hash::make('bomba'),
            ]);
            $user2->role()->attach([2]);
    }
}
