@extends('layout.header')
@section('content')
<div class="bg-dark py-3">
    <title>{{$title}}</title>
</div>
<div class="container">
    <div class="row d-flex justify-content-center mt-4">
        <div class="col md-10 d-flex justify-content-end">
            <a href="{{route('workshops.index')}}" class="btn btn-dark"> voltar</a>
        </div>
    </div>
    <div class="row d-flex jistify-content-center">
        <div class="col-md-10">
            <div class="card borde-0 shadow-lg my-3">
                <div class="card-header bg-dark">
                    <h3 class="text-white">Nova Oficina</h3>
                </div>



            <form class="form1" method="post" action="@if (isset($edit->id)) {{ route('workshops.update', ['id' => $edit->id]) }}@else{{ route('workshops.store') }} @endif" enctype="multipart/form-data">
                @csrf
                <div>

                    <x-text-input id="user_id" name="user_id" type="hidden" class="mt-1 block w-full" autocomplete="user_id" value="{{Auth::user()->id}}" />

                </div>


                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label h5">Nome</label>
                        <input value="@if (isset($edit->id)) {{ $edit->name }}@else {{ old('name') }} @endif" type="text" class="@error('name')is-invalid @enderror form-control form-control-lg " id="name"
                         autocomplete="name" required placeholder="Nome" name="name">
                        @error('name')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                    </div>

                <div class="mb-3">
                    <label for="email" class="form-label h5">E-mail</label>
                    <input value="@if (isset($edit->id)) {{ $edit->email }}@else {{ old('email') }} @endif" type="text" class="@error('email')is-invalid @enderror form-control form-control-lg " id="email"
                    autocomplete="email" required placeholder="email" name="email">
                    @error('email')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                </div>
                <div class="mb-3">
                    <label for="cnpj" class="form-label h5">CNPJ</label>
                    <input value="@if (isset($edit->id)) {{ $edit->cnpj }}@else {{ old('cnpj') }} @endif" type="text" class="@error('cnpj')is-invalid @enderror form-control form-control-lg " id="cnpj"
                    autocomplete="cnpj" required placeholder="CNPJ" name="cnpj">
                    @error('cnpj')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                </div>

                <div class="mb-3">
                        <label for="insrcicao_estadual" class="form-label h5">Insrcicao Estadual</label>
                        <input value="@if (isset($edit->id)) {{ $edit->insrcicao_estadual }}@else {{ old('insrcicao_estadual') }} @endif" type="text" class="@error('insrcicao_estadual')is-invalid @enderror form-control form-control-lg " id="insrcicao_estadual"
                         autocomplete="insrcicao_estadual" required placeholder="insrcicao_estadual" name="insrcicao_estadual">
                        @error('insrcicao_estadual')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone_number" class="form-label h5">phone_number</label>
                        <input value="@if (isset($edit->id)) {{ $edit->phone_number }}@else {{ old('phone_number') }} @endif" type="text" class="@error('phone_number')is-invalid @enderror form-control form-control-lg " id="phone_number"
                         autocomplete="phone_number" required placeholder="phone_number" name="phone_number">
                        @error('phone_number')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="responsavel" class="form-label h5">Responsavel</label>
                            <input value="@if (isset($edit->id)) {{ $edit->responsavel }}@else {{ old('responsavel') }} @endif" type="text" class="@error('responsavel')is-invalid @enderror form-control form-control-lg " id="responsavel"
                             autocomplete="responsavel" required placeholder="Responsavel" name="responsavel">
                            @error('responsavel')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                        </div>

                </div>







                <input type="submit" class="btn btn-primary" value="Cadastrar">
                <a class="btn btn-danger" href="{{ route('workshops.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>



@endsection



