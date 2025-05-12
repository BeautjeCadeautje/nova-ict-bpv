<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('educations')->insert([
            'name' => 'software engineer',
            'slug' => '01',
            'description' => 'Webbureau Van Steen voor al uw websites en apps',
            
        ]);

        DB::table('educations')->insert([
            'name' => 'backend engineer',
            'slug' => '02',
            'description' => 'Webbureau Van Steen voor al uw websites en apps',
            
        ]);
    }
}
