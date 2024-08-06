@extends('layout.header')

@section('content')



<div class="bg-gray py-4">
    <h3>{{ $title }}</h3>
</div>
<div class="container">
    <div class="row d-flex justify-content-center mt-4 mb-lg-4">
        <div class="col md-10 d-flex justify-content-end">
            <a href="{{route('vehicles.index')}}" class="btn btn-dark "> voltar</a>
        </div>
    </div>

                         <form class="form1" method="post" action="@if (isset($edit->id)) {{ route('vehicles.update', ['id' => $edit->id]) }}@else{{ route('vehicles.store') }} @endif" enctype="multipart/form-data">
                                @csrf

                       <div class="card">
                       <div class="card-body  row g-3">

                            <div>

                                <input id="user_id" name="user_id" type="hidden" class="mt-1 block w-full" autocomplete="user_id" value="{{Auth::user()->id}}" />

                            </div>



                           'characterized',
                           'active',

                            'price'






                                <div class="col-md-6">
                                    <label for="brand" class="form-label h5">Marca</label>
                                    <input value="@if (isset($edit->id)) {{ $edit->brand }}@else {{ old('brand') }} @endif" type="text" class="@error('brand')is-invalid @enderror form-control form-control-lg " id="brand'"
                                     autocomplete="brand" required  name="brand">
                                    @error('brand')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>

                            <div class=" col-md-6">
                                <label for="model" class="form-label h5">Modelo</label>
                                <input value="@if (isset($edit->id)) {{ $edit->model }}@else {{ old('model') }} @endif" type="text" class="@error('model')is-invalid @enderror form-control form-control-lg " id="model"
                                autocomplete="model" required  name="model">
                                @error('model')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="prefix" class="form-label h5">Prefixo</label>
                                <input value="@if (isset($edit->id)) {{ $edit->prefix }}@else {{ old('prefix') }} @endif" type="text" class="@error('prefix')is-invalid @enderror form-control form-control-lg " id="prefix"
                                autocomplete="prefix" required placeholder="CNPJ" name="prefix">
                                @error('prefix')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                            </div>

                                <div class="mb-3 col-md-3">
                                    <label for="plate" class="form-label h5">Placa</label>
                                    <input value="@if (isset($edit->id)) {{ $edit->plate }}@else {{ old('plate') }} @endif" type="text" class="@error('plate')is-invalid @enderror form-control form-control-lg " id="plate"
                                     autocomplete="plate" required placeholder="plate" name="plate">
                                    @error('plate')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>

                                <div class="mb-3 col-md-2">
                                    <label for="patrimonio" class="form-label h5">Nº de Patrimônio</label>
                                    <input value="@if (isset($edit->id)) {{ $edit->patrimonio }}@else {{ old('patrimonio') }} @endif" type="text" class="@error('patrimonio')is-invalid @enderror form-control form-control-lg " id="patrimonio"
                                     autocomplete="patrimonio" required placeholder="patrimonio" name="patrimonio">
                                    @error('patrimonio')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>
                                <div class=" mb-3 col-md-3">
                                        <label for="year" class="form-label h5">Ano de Fabricação</label>
                                        <input value="@if (isset($edit->id)) {{ $edit->year }}@else {{ old('year') }} @endif"
                                        type="text" class="@error('year')is-invalid @enderror form-control form-control-lg " id="year"
                                         autocomplete="year" required placeholder="year" name="year">
                                        @error('year')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>

                                <label for="price" class="form-label h5">Preço da Fipe</label>
                                <input value="@if (isset($edit->id)) {{ $edit->price }}@else {{ old('price') }} @endif"
                                type="text" class="@error('price')is-invalid @enderror form-control form-control-lg " id="price"
                                 autocomplete="price" required placeholder="price" name="price">
                                @error('price')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                        </div>
                        </div>






                            <div class="col-md-4">
                                <label for="city_id" class="form-label h5">Comando Regional</label>
                                <select name="city_id"  id="city_id" class="form-select">
                                    <option selected>Selecione</option>
                                    @foreach ($regional_commands as $regional_command)
                                    <option value="{{$regional_command->id}}">{{$regional_command->slug}}</option>
                                    @endforeach
                                    </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="city_id" class="form-label h5">OPM/Batalhão</label>
                                        <select name="city_id"  id="city_id" class="form-select">
                                            <option selected>Selecione</option>
                                            @foreach ($sub_commands as $sub_command)
                                            <option value="{{$sub_command->id}}">{{$sub_command->slug}}</option>
                                            @endforeach
                                            </select>
                                            </div>



                            <div class="form-group col-md-4">
                                <label for="cep" class="form-label h5">CEP</label>
                                <input value="@if (isset($edit->id)) {{ $edit->cep }} @else {{ old('cep') }} @endif" type="text"
                                class="@error('cep')is-invalid @enderror form-control form-control-lg " id="cep" autocomplete="cep" required  name="cep">
                                @error('cep')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>





                            <div class="form-group col-md-8">
                                <label for="name" class="form-label h5">Endereço</label>
                                <input value="@if (isset($edit->id)) {{ $edit->address }} @else {{ old('address') }} @endif"type="text"
                                class="@error('address')is-invalid @enderror form-control form-control-lg " id="address"autocomplete="address" required  name="address">
                                @error('address')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror


                                </div>

                                <div class="form-group col-md-4">
                                <label for="number" class="form-label h5">Número</label>
                                <input value="@if (isset($edit->id)) {{ $edit->number }} @else {{ old('number') }} @endif"type="text"
                                class="@error('number')is-invalid @enderror form-control form-control-lg " id="number" autocomplete="-new-number" required placeholder="Número" name="number">
                                @error('number')<p class="invalid-feedback text-danger">{{ $message}}</p>  @enderror
                            </div>
                            <div class="form-group col-md-8">
                                <label for="district" class="form-label h5">Bairro</label>
                                <input value="@if (isset($edit->id)) {{ $edit->neighborhood }} @else {{ old('district') }} @endif"type="text"
                                class="@error('district')is-invalid @enderror form-control form-control-lg " id="district"
                                autocomplete="district" required placeholder="Bairro" name="district">
                                @error('district')<p class="invalid-feedback text-danger">{{ $message}}</p > @enderror
                                </div>
                                <div class="form-group col-md-4">
                                <label for="complement" class="form-label h5">Complemento</label>
                                <input value="@if (isset($edit->id)) {{ $edit->complement }} @else {{ old('complement') }} @endif" type="text"
                                 class="@error('complement')is-invalid @enderror form-control form-control-lg " id="complement" autocomplete="complement"  name="complement">
                                @error('complement')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>


                      </div>


                        <div class="mb-4 justify-content-center">
                             <input type="submit" class="btn btn-primary" value="Cadastrar">
                            <a class="btn btn-danger" href="{{ route('workshops.index') }}">Cancelar</a>
                        </div>

                        </form>

                </div>
            </div>
        </div>
    </div>
@endsection

