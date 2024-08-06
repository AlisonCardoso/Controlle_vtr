
@extends('layout.layout')

@section('content')
<section class="section col-8 m-auto">

<a class="btn btn-sucess" href="{{ route('cities.create') }}">{{ __('Cadastrar') }}</a>
</section>

<div class="container">

    
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped text-center">
            <thead class="table-dark">
                <th>#</th>
                <th>Nome da Cidade</th>
                <th>Estado</th>

                <th>Action</th>
            </thead>
            <tbody>
                @forelse($cities as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>

                    <td>
                        <a class="btn btn-info" href="{{ route('cities.show', $row->id) }}">{{ __('Mostrar') }}</a>
                         <a class="btn btn-dark" href="{{ route('cities.edit', $row->id) }}">{{ __('Editar') }}</a>
                       <a class="btn btn-danger" href="{{ route('cities.destroy', $row->id) }}">{{ __('Excluir') }}</a>



                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No Users Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
