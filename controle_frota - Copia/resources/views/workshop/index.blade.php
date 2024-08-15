

@extends('layouts.admin')

@section('content')
<div class=" py-3 mt-5">
    <title>{{$title}}</title>
</div>





<div class="container-fluid">

<table class="table  text-center">
  <thead class="thead-dark">
    <tr>

      <th scope="col">ESTADO</th>
      <th scope="col">CIDADE</th>
      <th scope="col">BAIRRO</th>
      <th scope="col">NOME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">RESPONSAVEL</th>
      <th scope="col">AÇÕES</th>

    </tr>
  </thead>
  <tbody>



    @forelse ( $workshops as $workshop)
    <tr>
        <td>{{$workshop->address->city->state->name}}</td>
        <td>{{$workshop->address->city->name}}</td>
        
        <td>{{$workshop->address->district}}</td>
        <td>{{$workshop->name}}</td>
        <td>{{$workshop->email}}</td>
        <td>{{$workshop->phone_number}}</td>
      <td>{{$workshop->responsavel}}</td>

      <td>

        <div class="flex items-center gap-3">
        <a class="btn btn-info" href="{{ route('workshops.show', $workshop->id) }}">{{ __('Mostrar') }}</a>
        <a class="btn btn-dark" href="{{ route('workshops.edit', $workshop->id) }}">{{ __('Editar') }}</a>
        </div>
      </td>



    @empty

    <td colspan="7"> não há registros de oficinas</td>

</tr>
    @endforelse

  </tbody>
</table>
</div>

@endsection

