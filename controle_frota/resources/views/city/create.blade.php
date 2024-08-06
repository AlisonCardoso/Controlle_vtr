@extends('layout.layout')
@section('content')
<div class="bg-dark py-3">
    <h3 class="text-white text-center">cadastro de cidades</h3>
</div>
<div class="container">
    <div class="row d-flex justify-content-center mt-4">
        <div class="col md-10 d-flex justify-content-end">
            <a href="{{route('cities.index')}}" class="btn btn-dark"> voltar</a>
        </div>
    </div>
    <div class="row d-flex jistify-content-center">
        <div class="col-md-10">
            <div class="card borde-0 shadow-lg my-3">
                <div class="card-header bg-dark">
                    <h3 class="text-white">Nova cidade</h3>
                </div>



                <form class="form1" method="post" action="@if (isset($edit->id))  {{ route('cities.update', ['id' => $edit->id]) }}@else {{ route('cities.store') }} @endif" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div>
                    <label for="state_id" :value="__('State')" ></label>
                    <select name="state_id" id="state_id" class="form-control">
                        <option value="">Selecione</option>
                        @foreach ($states as $state )
                        <option value="{{$state->id}}">{{$state->name}}</option>
                        @endforeach
                    </select>
                     <div class="form-group col-md-12 mb-3">
                    <label for="">Nome da Cidade</label>
                    <input class="form-control" type="text" name="name"  value="@if (isset($edit->id)) {{ $edit->name }}@else {{ old('name') }} @endif">
                     @error('name')
                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>



                            </div>
                        </div>
                    </div>

                </div>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
                <a class="btn btn-danger" href="{{ route('cities.create') }}">Cancelar</a>
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
