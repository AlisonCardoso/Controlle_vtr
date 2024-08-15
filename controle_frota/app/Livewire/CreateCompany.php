<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RegionalCommand;
use App\Models\SubCommand;
use App\Models\Company;


class CreateCompany extends Component


{
    public $regional_command;
    public $regional_commandId;
    public $sub_commandId;
    public $sub_commands;
   // public $sub_command;
    public $companies = null;
    public $selectedSubCompany = null;

    public function mount()
    { 
      
      $this->regional_command =RegionalCommand::all();
    } 
    
    public function filterSubCommandById()
    { 
    
       $this->sub_commands = $this->regional_command->find($this->regional_commandId)->sub_command; 
    }
   
    public function filtercompanyById($subCommandId)
    {  
       dd($this->sub_commandId);
       //$this->companies = $this->sub_command->find($this->sub_commandId)->company;
       // $this->companies = $this->sub_command->find($this->sub_commandId)->company; 
      $this->companies = Company::where('sub_command_id' ,  $subCommandId)->get();

       
    }
    

    public function render()
    {
        return view('livewire.create-company');
    }
}
