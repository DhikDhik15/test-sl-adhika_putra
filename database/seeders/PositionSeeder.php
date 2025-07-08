<?php

namespace Database\Seeders;

use App\Models\Positions;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Positions::insert([
            ['name' => 'PIC'],
            ['name' => 'Lead Divisi'],
            ['name' => 'Anggota'],
        ]);
    }
}
