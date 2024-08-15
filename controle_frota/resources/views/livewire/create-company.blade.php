<div> 
 
    <div class="block mb-5">
        
        <label for="regional_command_id"class="form-label h5">COMANDO REGIONAL</label>
        <select wire:model.live="regional_commandId" wire:change="filterSubCommandById" 
        name="regional_command_id" id="regional_command_id" class=" block py-2 px-4 rounded border border-gray-600 select2">
            <option selected>Selecione uma categoria</option>
            @foreach ($regional_command->all() as $command)
            <option value="{{$command->id}}">{{$command->name}}</option>
           @endforeach  
        </select>
    </div>

     @if ($sub_commands)

     <div class="col-md-12 col-sm-12">
        <label for="sub_command_id" class="form-label h5">BATALHÃO DE POLICIA MILITAR</label>
            <select  wire:model.live="sub_commandId" wire:change="filtercompanyById" name="sub_command_id"  id="sub_command_id" class="form-select select2">
             <option value="">Selecione</option>
        @forelse ($sub_commands as $sub_command)
    <option value="{{ $sub_command->id }}" {{ old('sub_command_id') == $sub_command->id ? 'selected' : '' }}> {{ $sub_command->name }}</option>

@empty
    <option value="">Nenhum Batalhão cadastrado</option>
@endforelse
      </select>

    </div>
     @endif

      @if ($companies)

           <div class="col-md-12 col-sm-12">
        <label for="company_id" class="form-label h5">Companhias DE POLICIA MILITAR</label>
            <select  name="company_id"  id="company_id" class="form-select select2">
             <option value="">Selecione</option>
        @forelse ($companies as $company)
    <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}> {{ $scompany->name }}</option>

@empty
    <option value="">Nenhum Batalhão cadastrado</option>
@endforelse
      </select>

    </div>
      @endif
        
</div>
