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
    public $companies;
    public $selectedSubCompany = null;

    public function mount(RegionalCommand $regional_command )
    { 
      //  $this->regional_command = $regional_command; 
      $this->regional_command =RegionalCommand::all();
    } 
    
    public function filterSubCommandById()
    { 
    
       $this->sub_commands = $this->regional_command->find($this->regional_commandId)->sub_command; 
    }
    public function filtercompanyById(SubCommand $sub_command)
    { 
        //$this->companies = $this->sub_command->find($this->sub_commandId)->company; 
        $this->companies = Company::where('sub_command_id' ,  $sub_command )->get();

       
    }
    

    public function render()
    {
        return view('livewire.create-company');
    }
}
