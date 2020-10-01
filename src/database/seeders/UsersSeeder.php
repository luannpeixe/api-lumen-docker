<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'luannpeixe',
            'password' => '$2y$10$PGmJFWcfm71r8ZUOG5WDH.3GB8oQCDdVQahVyBwFYxN7Gcd5hYAQ2' // The password is: P@ssw0rd
        ]);
    }
}
