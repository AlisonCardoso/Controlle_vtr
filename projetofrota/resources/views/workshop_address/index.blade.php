

@extends('layout.layout')

@section('content')
<div class="col-8 m-auto" >
    <a class="btn btn-sucess" href="{{ route('workshops.create') }}">{{ __('Cadastrar') }}</a>

<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ID USUARIO</th>
      <th scope="col">nome USUARIO</th>
      <th scope="col">NOME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">Açoes</th>
      
    </tr>
  </thead>
  <tbody>

@foreach ( $workshops as $workshop )

  
@php
$user= $workshop->find($workshop->id)->user;
@endphp
     <tr>
      <th scope="row">{{$workshop->id}}</th>
      <th scope="row">{{$workshop->user_id}}</th>
      <th scope="row">{{$user->name}}</th>
      <th scope="row">{{$workshop->name}}</th>
      <th scope="row">{{$workshop->email}}</th>
      <th scope="row">

        <div class="flex items-center gap-3">

        <a class="btn btn-info" href="{{ route('workshops.show', $workshop->id) }}">{{ __('Mostrar') }}</a>

        <a class="btn btn-dark" href="{{ route('workshops.edit', $workshop->id) }}">{{ __('Editar') }}</a>

      </th>
      
    </tr>
        
    @endforeach

   
     
    



  
 
  </tbody>
</table>
</div>
<section>

</section>
@endsection