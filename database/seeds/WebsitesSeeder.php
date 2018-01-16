<?php

use App\Website;
use Illuminate\Database\Seeder;

class WebsitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Website::create(array('www' => 'www.google.lv',
                           'dns' => 'google.lv', 
                           'contact_name' => 'Jānis Bērziņš', 
                           'phone' => '26800348', 
                           'email' => 'admin@google.com', 
                           'company' => 'Google Inc', 
                           'database_type' => 'Oracle', 
                           'database_name' => 'GoogleDB', 
                           'database_user' => 'google_root', 
                           'ip_address' => '192.168.0.1', 
                           'server_name' => 'Serv1', 
                           'status' => 'Working', 
                           'owner_id' => 2));
		Website::create(array('www' => 'www.delfi.lv',
                           'dns' => 'delfi.lv', 
                           'contact_name' => 'Edgars Kalniņš', 
                           'phone' => '29234055', 
                           'email' => 'delfi@inbox.lv', 
                           'company' => 'Delfi', 
                           'database_type' => 'MySQL', 
                           'database_name' => 'Delfi', 
                           'database_user' => 'delfi', 
                           'ip_address' => '192.168.0.2', 
                           'server_name' => 'Serv3', 
                           'status' => 'Working', 
                           'owner_id' => 2));
		Website::create(array('www' => 'www.ezis.lv',
                           'dns' => 'ezis.lv', 
                           'contact_name' => 'Imants Ezis', 
                           'phone' => '29824801', 
                           'email' => 'ezis@mail.com', 
                           'company' => '', 
                           'database_type' => 'MySQL', 
                           'database_name' => 'Ezis', 
                           'database_user' => 'ezis', 
                           'ip_address' => '192.168.0.3', 
                           'server_name' => 'Serv1', 
                           'status' => 'Blocked', 
                           'owner_id' => 2));
    	}
}
