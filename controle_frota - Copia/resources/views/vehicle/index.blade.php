@extends('layout.header')

@section('content')



<div class="bg-gray py-4">
    <h3>{{ $title }}</h3>
</div>
<div class="container">
    <div class="row d-flex justify-content-center mt-4 mb-lg-4">
        <div class="col md-10 d-flex justify-content-end">
            <a href="{{route('vehicles.create')}}" class="btn btn-dark "> Cadastrar Veículo</a>
        </div>
    </div>




</div>
@endsection
