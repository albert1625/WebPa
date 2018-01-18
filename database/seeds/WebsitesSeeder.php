<?php

use WebPa\Website;
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
                           'owner_id' => 3));
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
                           'owner_id' => 3));
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
                           'owner_id' => 3));
    Website::create(array('www' => 'www.facebook.lv',
                           'dns' => 'facebook.lv', 
                           'contact_name' => 'Ivars Ozols', 
                           'phone' => '24431234', 
                           'email' => 'ivars.ozols@gmail.com', 
                           'company' => 'Facebook', 
                           'database_type' => 'MySQL', 
                           'database_name' => 'FB', 
                           'database_user' => 'FBuser', 
                           'ip_address' => '192.168.0.4', 
                           'server_name' => 'Ser2', 
                           'status' => 'Working', 
                           'owner_id' => 3));
    Website::create(array('www' => 'www.lu.lv',
                           'dns' => 'lu.lv', 
                           'contact_name' => 'Jānis Lapa', 
                           'phone' => '26484544', 
                           'email' => 'jlapa@gmail.com', 
                           'company' => 'LU', 
                           'database_type' => 'MySQL', 
                           'database_name' => 'LU', 
                           'database_user' => 'LUuser', 
                           'ip_address' => '192.168.0.5', 
                           'server_name' => 'Ser1', 
                           'status' => 'Working', 
                           'owner_id' => 3));
		Website::create(array('www' => 'www.aplis.lv',
                           'dns' => 'aplis.lv', 
                           'contact_name' => 'Arnis Aplis', 
                           'phone' => '23743832', 
                           'email' => 'admin@aplis.lv', 
                           'company' => '', 
                           'database_type' => 'MySQL', 
                           'database_name' => 'aplis', 
                           'database_user' => 'aplisRoot', 
                           'ip_address' => '192.168.0.6', 
                           'server_name' => 'Ser2', 
                           'status' => 'Blocked', 
                           'owner_id' => 3));
    	}
}
