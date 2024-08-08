
@extends('layout.header')

@section('content')
<div class="container">


    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Listar Cidades</span>
            <span>
                <a href="{{ route('cities.create') }}" class="btn btn-success btn-sm">Cadastrar</a>
                {{-- <a href="{{ route('conta.gerar-pdf') }}" class="btn btn-warning btn-sm">Gerar PDF</a> --}}
                {{-- {{ dd(request()->getQueryString()) }} --}}

                <a href="{{ url('gerar-pdf-conta?' . request()->getQueryString()) }}" class="btn btn-warning btn-sm">Gerar
                    PDF</a>

                <a href="{{ url('gerar-csv-conta?' . request()->getQueryString()) }}" class="btn btn-success btn-sm">Gerar
                    Excel</a>

                <a href="{{ url('gerar-word-conta?' . request()->getQueryString()) }}" class="btn btn-primary btn-sm">Gerar
                    Word</a>

            </span>
        </div>

        {{-- Verificar se existe a sessão success e imprimir o valor --}}
        <x-alert />

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Vencimento</th>
                        <th scope="col">Situação</th>
                        <th scope="col" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cities as $city)
                <tr>
                    <td>{{ $city->id }}</td>
                    <td>{{ $city->name }}</td>
                    

                    <td class="d-md-flex justify-content-center">
                        <a href="{{ route('cities.show', ['city' => $city->id]) }}"
                            class="btn btn-primary btn-sm me-1">Visualizar</a>

                        <a href="{{ route('cities.edit', ['city' => $city->id]) }}"
                            class="btn btn-warning btn-sm me-1">Editar</a>

                        <form id="formExcluir{{ $city->id }}"
                            action="{{ route('cities.destroy', ['city' => $city->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm me-1"
                                onclick="confirmarExclusao(event, {{ $city->id }})">Apagar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <span style="color: #f00;">Nenhuma city encontrada!</span>
            @endforelse
        </tbody>
    </table>

   {{-- {{ $cities->onEachSide(0)->links() }}--}}
</div>
</div>
</div>
@endsection
