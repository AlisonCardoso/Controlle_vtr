@extends('layouts.admin')

@section('content')



<div class="bg-gray py-4">
    <h3>{{ $title }}</h3>
</div>
<div class="container">
    <div class="row d-flex justify-content-center mt-4 mb-lg-4">
        <div class="col md-10 d-flex justify-content-end">
            <a href="{{route('workshops.index')}}" class="btn btn-dark "> voltar</a>
        </div>
    </div>

                         <form class="form1" method="post" action="@if (isset($edit->id)) {{ route('workshops.update', ['id' => $edit->id]) }}@else{{ route('workshops.store') }} @endif" enctype="multipart/form-data">
                                @csrf

                       <div class="card">
                       <div class="card-body  row g-3">






                                <div class="col-md-6">
                                    <label for="name" class="form-label h5">Nome</label>
                                    <input value="@if (isset($edit->id)) {{ $edit->name }}@else {{ old('name') }} @endif" type="text" class="@error('name')is-invalid @enderror form-control form-control-lg " id="name"
                                     autocomplete="name" required  name="name">
                                    @error('name')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>

                            <div class=" col-md-6">
                                <label for="email" class="form-label h5">E-mail</label>
                                <input value="@if (isset($edit->id)) {{ $edit->email }}@else {{ old('email') }} @endif" type="text" class="@error('email')is-invalid @enderror form-control form-control-lg " id="email"
                                autocomplete="email" required  name="email">
                                @error('email')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="cnpj" class="form-label h5">CNPJ</label>
                                <input value="@if (isset($edit->id)) {{ $edit->cnpj }}@else {{ old('cnpj') }} @endif" type="text" class="@error('cnpj')is-invalid @enderror form-control form-control-lg " id="cnpj"
                                autocomplete="cnpj" required placeholder="CNPJ" name="cnpj">
                                @error('cnpj')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                            </div>

                                <div class="mb-3 col-md-3">
                                    <label for="insrcicao_estadual" class="form-label h5">Insrcicao Estadual</label>
                                    <input value="@if (isset($edit->id)) {{ $edit->insrcicao_estadual }}@else {{ old('insrcicao_estadual') }} @endif" type="text" class="@error('insrcicao_estadual')is-invalid @enderror form-control form-control-lg " id="insrcicao_estadual"
                                     autocomplete="insrcicao_estadual" required placeholder="insrcicao_estadual" name="insrcicao_estadual">
                                    @error('insrcicao_estadual')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>

                                <div class="mb-3 col-md-2">
                                    <label for="phone_number" class="form-label h5">Telefone</label>
                                    <input value="@if (isset($edit->id)) {{ $edit->phone_number }}@else {{ old('phone_number') }} @endif" type="text" class="@error('phone_number')is-invalid @enderror form-control form-control-lg " id="phone_number"
                                     autocomplete="phone_number" required placeholder="phone_number" name="phone_number">
                                    @error('phone_number')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>
                                <div class=" mb-3 col-md-3">
                                        <label for="responsavel" class="form-label h5">Responsavel</label>
                                        <input value="@if (isset($edit->id)) {{ $edit->responsavel }}@else {{ old('responsavel') }} @endif"
                                        type="text" class="@error('responsavel')is-invalid @enderror form-control form-control-lg " id="responsavel"
                                         autocomplete="responsavel" required placeholder="Responsavel" name="responsavel">
                                        @error('responsavel')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>
                        </div>

                        @livewire('location-form')

                        <div class="card-body row g-4">
                            <div class="col-md-4">
                            <label for="state_id" class="form-label h5">Estado</label>
                                <select name="state_id"  id="state_id" class="form-select">
                                    <option selected>Selecione</option>
                                    @foreach ($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-md-4">
                                <label for="city_id" class="form-label h5">Cidade</label>
                                <select name="city_id"  id="city_id" class="form-select">
                                    <option selected>Selecione</option>
                                    @foreach ($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
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
                        <script>
                         /*  document.addEventListner('DOMContentLoaded', function(){

                                //receber os dados do HTML
                               var inputSelectState = document.querySelector('#state_id');
                               var inputSelectCity = document.querySelector('#city_id');

                               // aguardar o usuario selecionar o estado
                               inputSelectState.addEventListner('change', () =>{
                                pesquisarCidade();
                               });
                               function pesquisarCidade(){
                                inputSelectCity.innerHTML = ' <option value="">Carregando...</option>';
                               }
                               var selectCities = "{{route('cities.index')}}"
                            })
                        */</script>

                </div>
            </div>
        </div>
    </div>

@endsection

