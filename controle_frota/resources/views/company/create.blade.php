@extends('layouts.admin')

@section('content')
<div class="container">


    <div class="card mt-5 mb-4 border-light shadow">

        <div class="card-header mt-5 d-flex justify-content-between">

            <span>
                <a href="{{ route('companies.index') }}" class="btn btn-info btn-sm ">Listar</a>
            </span>
        </div>



        <div class="card-body">


                <form class="row g-3" method="post" action="@if (isset($edit->id)) {{ route('companies.update', ['id' => $edit->id]) }}
                    @else{{ route('companies.store') }} @endif" enctype="multipart/form-data">
                    @csrf


                <div class="col-md-12 col-sm-12">
                <label for="regional_command_id"class="form-label h5">COMANDO REGIONAL</label>
                <select name="regional_command_id" id="regional_command_id" class="form-select select2">
                    <option value="">Selecione</option>
                    @foreach ($commands as $command )
                    <option value="{{$command->id}}">{{$command->name}}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-md-12 col-sm-12">
                    <label for="sub_command_id" class="form-label h5">BATALHÃO DE POLICIA MILITAR</label>
                        <select name="sub_command_id"  id="sub_command_id" class="form-select select2">
                         <option value="">Selecione</option>
            @forelse ($sub_commands as $sub_command)
                <option value="{{ $sub_command->id }}" {{ old('sub_command_id') == $sub_command->id ? 'selected' : '' }}> {{ $sub_command->name }}</option>

            @empty
                <option value="">Nenhum Batalhão cadastrado</option>
            @endforelse
                  </select>

                </div>

                <div class="col-md-12 col-sm-12">
                    <label for="name" class="form-label h5">Nome da Companhia</label>
                    <input value="@if (isset($edit->id)) {{ $edit->name }}@else {{ old('name') }} @endif" type="text" class="@error('name')is-invalid @enderror form-control form-control-lg " id="name"
                     autocomplete="name" required  name="name">
                    @error('name')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
               </div>



                <div class="col-md-4 col-sm-12">
                    <label for="slug" class="form-label">Nome Abreviado</label>
                 <input value="@if (isset($edit->id)) {{ $edit->slug }}@else {{ old('slug') }} @endif"
                    type="text" class="@error('slug')is-invalid @enderror form-control form-control-lg " id="slug"    slug="slug">
                    @error('slug')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror



                </div>

                <div class="col-md-4 col-sm-12">
                    <label for="pelotao" class="form-label h5">Nome Completo do Pelotão/Posto</label>
                    <input value="@if (isset($edit->id)) {{ $edit->pelotao }}@else {{ old('pelotao') }} @endif"
                    type="text" class="@error('pelotao')is-invalid @enderror form-control form-control-lg " id="pelotao"  name="pelotao">
                    @error('pelotao')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                </div>



                <div class="col-12">
                    <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                </div>

            </form>

        </div>
    </div>
</div>
    @endsection



























