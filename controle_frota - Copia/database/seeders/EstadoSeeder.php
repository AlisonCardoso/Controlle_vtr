<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        State::create(['name' => 'ACRE', 'slug' => 'AC']);
        State::create(['name' => 'ALAGOAS', 'slug' => 'AL']);
        State::create(['name' => 'AMAPÁ', 'slug' => 'AP']);
        State::create(['name' => 'AMAZONAS', 'slug' => 'AM']);
        State::create(['name' => 'BAHIA', 'slug' => 'BA']);
        State::create(['name' => 'CEARÁ', 'slug' => 'CE']);
        State::create(['name' => 'DISTRITO FEDERAL', 'slug' =>'DF']);
        State::create(['name' => 'ESPÍRITO SANTO', 'slug'=>'ES']);
        State::create(['name' => 'GOIÁS', 'slug' => 'GO']);
        State::create(['name' => 'MARANHÃO', 'slug' => 'MA']);
        State::create(['name' => 'MATO GROSSO', 'slug' => 'MT']);
        State::create(['name' => 'MATO GROSSO DO SUL', 'slug' => 'MS']);
        State::create(['name' => 'MINAS GERAIS', 'slug' => 'MG']);
        State::create(['name' => 'PARÁ', 'slug' => 'PA']);
        State::create(['name' => 'PARAÍBA', 'slug' => 'PB']);
        State::create(['name' => 'PARANÁ', 'slug' => 'PR']);
        State::create(['name' => 'PERNAMBUCO', 'slug' => 'PE']);
        State::create(['name' => 'PIAUÍ', 'slug' => 'PI']);
        State::create(['name' => 'RIO DE JANEIRO', 'slug' =>'RJ']);
        State::create(['name' => 'RIO GRANDE DO NORTE', 'slug' =>'RN']);
        State::create(['name' => 'RIO GRANDE DO SUL', 'slug' =>'RS']);
        State::create(['name' => 'RONDÔNIA', 'slug' =>'RO']);
        State::create(['name' => 'RORAIMA', 'slug' =>'RR']);
        State::create(['name' => 'SANTA CATARINA', 'slug' =>'SC']);
        State::create(['name' => 'SÃO PAULO', 'slug' =>'SP']);
        State::create(['name' => 'SERGIPE', 'slug' =>'SE']);
        State::create(['name' => 'TOCANTINS', 'slug' =>'TO']);
    }
}
