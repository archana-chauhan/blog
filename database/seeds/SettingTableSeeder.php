<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

           'site_name' =>"Convowear's Blog",
           'contact_number' =>'8888888888',
           'contact_email' =>'info@convowear.in',
           'address' =>'Noida'


        ]);
    }
}
