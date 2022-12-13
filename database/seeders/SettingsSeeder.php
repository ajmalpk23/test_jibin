<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            'group'=>'CompanyInfo',
            'key'=>'Company Name',
            'value'=>'Prime Sports Turf Booking',
            'title'=>'Name of thee company'

        ]);



        settings::create([
            'group'=>'CompanyInfo',
            'key'=>'Created On',
            'value'=>'sep 23rd 2022',
            'title'=>'Created date'

        ]);



    }
}
