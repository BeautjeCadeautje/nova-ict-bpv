<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Webbureau Van Steen',
            'address' => 'webbureau-van-steen',
            'city' => 'Webbureau Van Steen voor al uw websites en apps',
            'zipcode' => '2036pk',
            'domain' => 'url',
            'phone' => '0648224',
            
        ]);

        DB::table('companies')->insert([
            'name' => 'Webbureau Van Steenb',
            'address' => 'webbureau-van-steenb',
            'city' => 'bWebbureau Van Steen voor al uw websites en apps',
            'zipcode' => 'b2036pk',
            'domain' => 'burl',
            'phone' => 'b0648224',
            
        ]);
    }
}
