<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\State;
use App\Models\City;

class LocationForm extends Component
{
    public $states;
    public $cities = [];
    public $selectedState = null;
    public $selectedCity = null;

    public function mount()
    {
        // Carrega todos os estados ao inicializar o componente
        $this->states = State::all();
    }

    public function updatedSelectedState($stateId)
    {
        // Atualiza as cidades quando o estado selecionado muda
        $this->cities = City::where('state_id', $stateId)->get();
        $this->selectedCity = null; // Reseta a cidade selecionada
    }

    public function render()
    {
        return view('livewire.location-form');
    }
}
