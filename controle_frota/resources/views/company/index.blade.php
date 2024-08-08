@extends('layout.header')

@section('content')
<div class="bg-gray py-4">

</div>
<div class="container">
    <div class="row d-flex justify-content-center mt-4 mb-lg-4">
        <div class="col md-10 d-flex justify-content-end">
            <a href="{{route('companies.index')}}" class="btn btn-dark "> voltar</a>
        </div>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>batalhao</h1>
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                     @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sigla</th>
                    
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->nome }}</td>
                        <td>{{ $company->slug}}</td>








                        <td class="d-md-flex justify-content-center">
                            <a href="{{ route('companies.show', ['company' => $company->id]) }}"
                                class="btn btn-primary btn-sm me-1">Visualizar</a>

                            <a href="{{ route('companies.edit', ['company' => $company->id]) }}"
                                class="btn btn-warning btn-sm me-1">Editar</a>

                            <form id="formExcluir{{ $company->id }}"
                                action="{{ route('companies.destroy', ['company' => $company->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm me-1"
                                    onclick="confirmarExclusao(event, {{ $company->id }})">Apagar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <span style="color: #f00;">Nenhuma conta encontrada!</span>
                @endforelse
            </tbody>
        </table>
    </div>

 @endsection

