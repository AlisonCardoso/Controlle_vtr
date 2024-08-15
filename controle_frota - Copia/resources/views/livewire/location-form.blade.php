
    <div class="card-body row g-4">
        <div class="col-md-4">
        <label for="state_id" class="form-label h5">Estado</label>
            <select wire:model="selectedState" name="state_id"  id="state_id" class="form-select">
                <option selected>Selecione</option>
                @foreach ($states as $state)
                <option value="{{$state->id}}">{{$state->slug}}{{ $state->name }}"--" {{ $state->id }}</option>
                @endforeach
            </select>
        </div>


        <div class="col-md-4">
            <label for="city_id" class="form-label h5">Cidade</label>
            <select wire:model="selectedCity" name="city_id"  id="city_id" class="form-select">
                <option selected>Selecione</option>
                @foreach ($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
                </select>
                </div>

</div>
