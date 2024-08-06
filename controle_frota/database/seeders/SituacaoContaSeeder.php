<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SituacaoConta;

class SituacaoContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!SituacaoConta::where('nome', 'Paga')->first()){
            SituacaoConta::create([
                'nome' => 'Paga',
                'cor' => 'success',
            ]);
        }
        if(!SituacaoConta::where('nome', 'Pendente')->first()){
            SituacaoConta::create([
                'nome' => 'Pendente',
                'cor' => 'danger',
            ]);
        }
        if(!SituacaoConta::where('nome', 'Cancelada')->first()){
            SituacaoConta::create([
                'nome' => 'Cancelada',
                'cor' => 'warning',
            ]);
        }
    }
}
