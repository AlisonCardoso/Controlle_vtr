<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\State;
use App\Models\City;

class LocationForm extends Component
{

    public $state;
    public $cities = null;
    public $stateId;
   
    public function mount(State $state)
    {
        // Carrega todos os estados ao inicializar o componente
        $this->state = $state;
    }


    public function filterCityByStateId()
    {
       // dd($this->stateId);
        $this->cities = $this->state->find($this->stateId)->city;
      // $this->realEstates = $this->category->find($this->categoryId)->realEstate;
       
      
    }


    public function render()
    {
        return view('livewire.location-form');
    }
}
