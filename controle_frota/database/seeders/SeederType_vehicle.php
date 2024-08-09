<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle_type;


class SeederType_vehicle extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle_type::create(['type' => 'GUINCHO']);
        Vehicle_type::create(['type' => 'AUTOMOVEL']);
        Vehicle_type::create(['type' => 'MOTOCICLETA']);
        Vehicle_type::create(['type' => 'ONIBUS']);
    }
}
