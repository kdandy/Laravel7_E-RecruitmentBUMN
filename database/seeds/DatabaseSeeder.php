<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'admin',
            'username' => 'admin123',
            'password' => bcrypt('admin123'),
            'role' => 2,
            'status' => 1,
            'foto' => 'default.jpg',
        ]);
    }
}
