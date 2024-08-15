 <div class="card-body row g-4">
         <h2 class=""> filtro de Estado</h2>
        <div class="col-md-5">

    <label for="">Estados</label>
    <select wire:model="stateId"  wire:change="filterCityByStateId"name="state_id"  id="state_id" class="form-select">
        <option selected>Selecione uma Estado</option>
        @foreach ($state->all() as $state)
        <option value="{{$state->id}}">{{ $state->name }}</option>
       @endforeach  
    </select>
</div>
@if ($cities)

<div class="block mb-5">
    <label for="">Imoveis filtrados</label>
    <select name="" id="" class=" block py-2 px-4 rounded border border-gray-600">
        <option selected>Selecione uma produto</option>
        @foreach ($cities as $city)
        <option value="{{$city->id}}">{{$city->name}}</option>
        @endforeach
       
    </select>
</div>

@endif

</div>
