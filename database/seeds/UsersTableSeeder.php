<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'ADMIN',
            'last_name' => 'admin',
            'user_id' => 'Admin001',
            'type' => 'admin',
            'email' => 'admin@sims.com',
            'password' => Hash::make('secret'),
        ]);
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'user_id' => 'user001',
            'email' => 'john@doe.com',
            'password' => Hash::make('password'),
        ]);
    }
}
