<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('users')->delete();
    User::create(array('name' => 'admin',
                           'email' => 'admin@test.com', 
                           'password' => bcrypt('qwerty'),
                           'privileges' => 2));
    User::create(array('name' => 'moderator',
                           'email' => 'moderator@test.com', 
                           'password' => bcrypt('qwerty'),
                           'privileges' => 1));
    User::create(array('name' => 'user',
                           'email' => 'user@test.com', 
                           'password' => bcrypt('qwerty'),
                           'privileges' => 0));
    }
}
