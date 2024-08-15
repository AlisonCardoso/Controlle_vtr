<div class="row g-3"> 
    
 
    
    <div class="col-md-6 col-sm-6"> 
        <label for="regional_command_id"class="form-label h5">COMANDO REGIONAL</label>
        <select wire:model.live="regional_commandId" wire:change="filterSubCommandById" 
        name="regional_command_id" id="regional_command_id" class="form-select select2">
            <option selected>Selecione um Comando Regional</option>
            @foreach ($regional_command->all() as $command)
            <option value="{{$command->id}}">{{$command->name}}</option>
           @endforeach  
        </select>
    </div>
    

     @if ($sub_commands)

     <div class="col-md-6 col-sm-6">
        <label for="sub_command_id" class="form-label h5">BATALHÃO DE POLICIA MILITAR</label>
            <select  wire:model.live="sub_commandId" wire:change="filtercompanyById" 
            name="sub_command_id"  id="sub_command_id" class="form-select select2">
             <option value="">Selecione O Batalhão</option>
        @foreach ($sub_commands as $sub_command)
            <option value="{{ $sub_command->id }}" {{ old('sub_command_id') == $sub_command->id ? 'selected' : '' }}> {{ $sub_command->name }}</option>
        @endforeach
      </select>

    </div>
     @endif

     @if ($companies)
         
     <div class="col-md-6 col-sm-6">
        <label for="company_id" class="form-label h5">Companhia</label>
        <select name="company_id"  id="company_id" class="form-select select2">
            <option selected>Selecione uma companhia</option>
          
            </select>
            </div>

     @endif
      
 
        
</div>
