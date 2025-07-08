<?php

namespace Database\Seeders;

use App\Models\Divisions;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Divisions::insert([
            ['name' => 'Divisi Teknis'],
            ['name' => 'Divisi Non Teknis'],
            ['name' => 'Divisi Rumah Tangga'],
        ]);
    }
}
