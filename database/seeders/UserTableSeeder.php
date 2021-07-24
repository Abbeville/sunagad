<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app('Faker\Factory')->create();

        /*$user = \App\Models\User::create([
            'fname' => $faker->firstName,
            'lname' => $faker->lastName,
            'username' => 'user',
            'phone_number' => $faker->phoneNumber,
            'email' => 'user@akesanmarketapp.com',
            'email_verified_at' => now(),
            'password' => \Illuminate\Support\Facades\Hash::make('user'), // password
        ]);
        $user->assignRole('user');*/

        $admin = \App\Models\User::create([
            'fname' => $faker->firstName,
            'lname' => $faker->lastName,
            'username' => 'admin',
            'phone_number' => $faker->phoneNumber,
            'email' => 'admin@akesanmarketapp.com',
            'email_verified_at' => now(),
            'password' => \Illuminate\Support\Facades\Hash::make('adminpass'), // password
        ]);
        $admin->assignRole('admin');
    }
}
