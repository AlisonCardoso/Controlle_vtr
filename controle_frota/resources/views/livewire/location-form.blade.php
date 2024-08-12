<div>
    <div class="form-group">
        <label for="state">Estado</label>
        <select wire:model="selectedState" id="state" class="form-control">
            <option value="" selected>Escolha um estado</option>
            @foreach($states as $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
            @endforeach
        </select>
    </div>

    @if (!is_null($selectedState))
        <div class="form-group mt-3">
            <label for="city">Cidade</label>
            <select wire:model="selectedCity" id="city" class="form-control">
                <option value="" selected>Escolha uma cidade</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>
