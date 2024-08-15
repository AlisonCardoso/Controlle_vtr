<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RegionalCommnand;
use App\Models\SubCommnand;
use App\Models\Company;



class Companhias extends Component


    public $regionalcommands = [];
    public $subcommands = [];

    public $selectedBattalion = null;


    public function mount()
    {
        $this->regionalcommands = RegionalCommand::all();
    }
{
    public function render()
    {
        return view('livewire.companhias');
    }
}
