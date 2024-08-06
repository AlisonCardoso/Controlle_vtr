<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCommand;

class SeederBAtalhao extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubCommand::create([ 'name' =>'1º BATALÃO DE POLICIA MILITAR ','slug' => '1º BPM','regional_command_id' => 4,]);
        SubCommand::create([ 'name' =>'27º BATALÃO DE POLICIA MILITAR ','slug' => '27º BPM','regional_command_id' => 4,]);
        SubCommand::create([ 'name' =>'28º BATALÃO DE POLICIA MILITAR ','slug' => '28º BPM','regional_command_id' => 4, ]);


      /* 'COMANDO DE POLICIAMENTO ESPECIALIZADO'=>'CPE' */
       SubCommand::create([ 'name' => 'BATALÃO DE POLICIA RODOVIARIA ','slug' => 'BPRv','regional_command_id' => 7,]);
       SubCommand::create([ 'name' => 'BATALÃO DE POLICIA ESCOLAR COMUNITARIA','slug' => 'BPEC','regional_command_id' => 7,]);
       SubCommand::create([ 'name' => 'BATALÃO DE POLICIA DE AMBIENTAL','slug' => 'BPAmb','regional_command_id' => 7,]);
       SubCommand::create([ 'name' => 'BATALÃO DE POLICIA DE TRANSITO','slug' => 'BPTRAN','regional_command_id' => 7,]);












    }
}
