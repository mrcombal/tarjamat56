<?php

use Illuminate\Database\Seeder;
use App\User;

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
           'name' => 'Wessam Khalil',
            'email' => 'wessakhalil@gmail.com',
            'password' => bcrypt('wessakhalil'),
        ])->save();
    }
}
