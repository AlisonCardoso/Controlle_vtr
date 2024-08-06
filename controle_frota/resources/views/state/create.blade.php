@extends('layout.layout')
@section('content')
<div class="bg-dark py-3">
    <h3 class="text-white text-center">cadastro de estados</h3>
</div>
<div class="container">
    <div class="row d-flex justify-content-center mt-4">
        <div class="col md-10 d-flex justify-content-end">
            <a href="{{route('states.create')}}" class="btn btn-dark"> voltar</a>
        </div>
    </div>
    <div class="row d-flex jistify-content-center">
        <div class="col-md-10">
            <div class="card borde-0 shadow-lg my-3">
                <div class="card-header bg-dark">
                    <h3 class="text-white">Novo estado</h3>
                </div>


                <div class="col-md-12">
                    <div class="form-appl">
                        <h3>{{ $title }}</h3>

                        <a class="btn btn-primary float-end mb-3 mt-3 " href="{{ route('states.create') }}">{{ __('Voltar') }}</a>

                        <form class="form1" method="post" action="@if (isset($edit->id)) {{ route('states.update', ['id' => $edit->id]) }}@else{{ route('states.store') }} @endif" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group col-md-12 mb-3">
                                <label for="">Nome do Estado</label>
                                <input class="form-control" type="text" name="name"  value="@if (isset($edit->id)) {{ $edit->name }}@else {{ old('name') }} @endif">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 mb-3">
                                <label for="">Sigla do Estado</label>
                                <input class="form-control" type="text" name="slug"  value="@if (isset($edit->id)) {{ $edit->slug }}@else {{ old('slug') }} @endif">
                                @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>






                            </div>


                            <input type="submit" class="btn btn-primary" value="Cadastrar">
                            <a class="btn btn-danger" href="{{ route('states.index') }}">Cancelar</a>
                        </form>
                        <div class="mb-3">
                            @if (@session('msg'))
                            <p> {{session('msg')}} </p>
                            @endif

                        </div>
            </div>
        </div>
        </div>
        </div>
    @endsection

