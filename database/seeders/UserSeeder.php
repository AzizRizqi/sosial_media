<?php

namespace Database\Seeders;

use App\Models\User;
// use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'kuki',
            'email' => 'kuki@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
