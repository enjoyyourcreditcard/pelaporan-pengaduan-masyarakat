<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          => 'Actor Number One',
            'email'         => 'actor@gmail.com',
            'nik'           => '1111111111111111',
            'date_of_birth' => '1900-01-01',
            'gender'        => 'male',
            'address'       => '3828 Piermont Dr, Albuquerque, NM.',
            'phone'         => '0858911',
            'password'      => bcrypt('12345678'),
            'role'          => 'admin'
        ]);
    }
}
