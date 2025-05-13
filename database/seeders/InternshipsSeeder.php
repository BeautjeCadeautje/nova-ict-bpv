<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InternshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('internships')->insert([
            'title' => 'Webbureau Van Steen',
            'slug' => 'webbureau-van-steen',
            'description' => 'Een stage bij Webbureau Van Steen biedt je de kans om praktijkervaring op te doen in een dynamische omgeving.',
            'start_date' => '31 augustus 2023',
            'end_date' => '31 januari 2024',
            'hours_per_week' => '32',
            'type' => 'stage',
            'compensation' => 'onbekend',
            'level_of_education' => 'HBO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('internships')->insert([
            'title' => 'AWebbureau Van Steen',
            'slug' => 'Awebbureau-van-steen',
            'description' => 'AEen stage bij Webbureau Van Steen biedt je de kans om praktijkervaring op te doen in een dynamische omgeving.',
            'start_date' => 'A31 augustus 2023',
            'end_date' => 'A31 januari 2024',
            'hours_per_week' => 'A32',
            'type' => 'Astage',
            'compensation' => 'Aonbekend',
            'level_of_education' => 'AHBO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
