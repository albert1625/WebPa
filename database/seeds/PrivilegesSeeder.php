<?php

use App\Privilege;
use Illuminate\Database\Seeder;

class PrivilegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Privilege::create(array('view_general' => true,
                           'view_contact' => true, 
                           'view_technical' => true, 
                           'edit_general' => true, 
                           'edit_contact' => true, 
                           'edit_technical' => false,
                           'user_id' => 2));
    }
}
