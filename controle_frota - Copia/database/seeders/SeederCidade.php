<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class SeederCidade extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       City::create(['name' => 'MAFRA', 'state_id' => '24']);
       City::create(['name' => 'PORTO UNIÃO', 'state_id' => '24']);
       City::create(['name' => 'LONDRINA', 'state_id' => '16' ]);
       City::create(['name' => 'MARINGÁ', 'state_id' => '16']);
       City::create(['name' => 'CURITIBA', 'state_id' => '16']);
       City::create(['name' => 'UNIÃO DA VITÓRIA', 'state_id' => '16']);
       City::create(['name' => 'CAMPO LARGO', 'state_id' => '16']);
       City::create(['name' => 'PONTA GROSSA', 'state_id' =>'16']);


    }
}
