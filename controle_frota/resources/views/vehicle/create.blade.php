@extends('layouts.admin')

@section('content')
<div class="container">


    <div class="card mt-5 mb-4 border-light shadow">

        <div class="card-header mt-5 d-flex justify-content-between">

            <span>


                <a href="{{ route('vehicles.index') }}" class="btn btn-info btn-sm ">Lista de veículos</a>

                </span>

        </div>



        <div class="card-body">

                         <form class="row g-3"  method="post" action="@if (isset($edit->id)) {{ route('vehicles.update', ['id' => $edit->id]) }}@else{{ route('vehicles.store') }} @endif" enctype="multipart/form-data">
                                @csrf

@livewire('CreateCompany')
                          {{--  
                        <div class="col-md-6 col-sm-6">
                            <label for="sub_comand_id" class="form-label h5">OPM/Batalhão</label>
                            <select name="sub_comand_id"  id="sub_comand_id" class="form-select select2">
                                <option selected>Selecione</option>
                                @foreach ($sub_command as $subcommand)
                                <option value="{{$subcommand->id}}">{{$subcommand->slug}}</option>
                                @endforeach
                                </select>
                                </div>
                               
                                <div class="col-md-6 col-sm-6">
                                    <label for="company_id" class="form-label h5">Companhia</label>
                                    <select name="company_id"  id="company_id" class="form-select select2">
                                        <option selected>Selecione</option>
                                        @foreach ($companies as $company)
                                        <option value="{{$company->id}}">{{$company->slug}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                        --}}
                                      
                                        <div class="col-md-6 col-sm-6">
                                            <label for="vehicle_type_id" class="form-label h5">Tipo do Veículo</label>
                                            <select name="vehicle_type_id"  id="vehicle_type_id" class="form-select select2">
                                                <option selected>Selecione</option>
                                                @foreach ($vehicle_type as $row)
                                                <option value="{{$row->id}}">{{$row->type}}</option>
                                                @endforeach
                                                </select>
                                                </div>





                                <div class="col-md-6 col-sm-6">
                                    <label for="brand" class="form-label h5">Marca</label>
                                    <input value="@if (isset($edit->id)) {{ $edit->brand }}@else {{ old('brand') }} @endif" type="text" class="@error('brand')is-invalid @enderror form-control form-control-lg " id="brand'"
                                     autocomplete="brand" required  name="brand">
                                    @error('brand')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>

                            <div class=" col-md-6 col-sm-6">
                                <label for="model" class="form-label h5">Modelo</label>
                                <input value="@if (isset($edit->id)) {{ $edit->model }}@else {{ old('model') }} @endif" type="text" class="@error('model')is-invalid @enderror form-control form-control-lg " id="model"
                                autocomplete="model" required  name="model">
                                @error('model')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="prefix" class="form-label h5">Prefixo</label>
                                <input value="@if (isset($edit->id)) {{ $edit->prefix }}@else {{ old('prefix') }} @endif" type="text" class="@error('prefix')is-invalid @enderror form-control form-control-lg " id="prefix"
                                autocomplete="prefix" required placeholder="CNPJ" name="prefix">
                                @error('prefix')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                            </div>

                                <div class="col-md-3 col-sm-3">
                                    <label for="plate" class="form-label h5">Placa</label>
                                    <input value="@if (isset($edit->id)) {{ $edit->plate }}@else {{ old('plate') }} @endif" type="text" class="@error('plate')is-invalid @enderror form-control form-control-lg " id="plate"
                                     autocomplete="plate" required placeholder="plate" name="plate">
                                    @error('plate')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>

                                <div class="col-md-3 col-sm-3">
                                    <label for="asset_number" class="form-label h5">Nº de Patrimônio</label>
                                    <input value="@if (isset($edit->id)) {{ $edit->asset_number }}@else {{ old('asset_number') }} @endif" type="text" class="@error('asset_number')is-invalid @enderror form-control form-control-lg " id="asset_number"
                                     autocomplete="asset_number" required placeholder="asset_number" name="asset_number">
                                    @error('asset_number')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>
                                <div class=" mb-3 col-md-3">
                                        <label for="year" class="form-label h5">Ano de Fabricação</label>
                                        <input value="@if (isset($edit->id)) {{ $edit->year }}@else {{ old('year') }} @endif"
                                        type="text" class="@error('year')is-invalid @enderror form-control form-control-lg " id="year"
                                         autocomplete="year" required placeholder="year" name="year">
                                        @error('year')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                                </div>

                                <div class="col-md-3 col-sm-3">
                                    <label for="odometer" class="form-label h5">Hodômetro</label>
                                    <input value="@if (isset($edit->id)) {{ $edit->odometer }}@else {{ old('odometer') }} @endif"
                                    type="text" class="@error('odometer')is-invalid @enderror form-control form-control-lg " id="odometer"
                                     autocomplete="odometer" placeholder="odometer" name="odometer">
                                    @error('odometer')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label for="price" class="form-label h5">Preço da Fipe</label>
                                <input value="@if (isset($edit->id)) {{ $edit->price }}@else {{ old('price') }} @endif"
                                type="text" class="@error('price')is-invalid @enderror form-control form-control-lg " id="price"
                                 autocomplete="price" placeholder="price" name="price">
                                @error('price')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                        </div>

                        <div>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Caracterizada
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Descaracterizada
                            </label>
                          </div>

                        </div>



                        regionalcommand

                    </div>

                    div class="custom-check form-check-inline">
  <input class="custom-check-input" type="checkbox" value="" id="Checkbox1" />
  <label class="custom-check-label" for="Checkbox1">
    Checkbox 1
  </label>
</div>

<div class="custom-check form-check-inline">
  <input class="custom-check-input" type="checkbox" value="" id="Checkbox2" />
  <label class="custom-check-label" for="Checkbox2">
    Checkbox 2
  </label>
</div>

<div class="custom-radio">
    <input type="radio" id="customRadio1" name="customRadio" class="custom-radio-input" />
    <label class="custom-control-label" for="customRadio1">radio1</label>
  </div>
  <div class="custom-radio">
    <input type="radio" id="customRadio2" name="customRadio" class="custom-radio-input" />
    <label class="custom-control-label" for="customRadio2">radio2</label>
  </div>





                        <div class="mb-4 justify-content-center">
                             <input type="submit" class="btn btn-primary" value="Cadastrar">
                            <a class="btn btn-danger" href="{{ route('vehicles.index') }}">Cancelar</a>
                        </div>

                        </form>

                </div>
            </div>
        </div>
    </div>
@endsection

