

@extends('layout.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="card">
                 <div class="card-header">
    <a class="btn btn-primary float-end" href="{{ route('categories.create') }}">{{ __('Cadastrar Categoria') }}</a>

                </div>

                <div class="card-body">

                    <table class="table table-bordered table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">descriçao</th>
                        <th scope="col">Ativa</th>
                        <th scope="col">Açoes</th>

                        </tr>
                    </thead>
                    @foreach ($categories as $category )
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <th scope="row">{{$category->name}}</th>
                        <th scope="row">{{$category->description}}</th>
                          <td>    @if ($category->is_active) Ativo @else Inativo   @endif   </th>

                        <th scope="row">
                          <div class="flex items-center gap-3">
                          <a class="btn btn-info" href="{{ route('categories.show', $category->id) }}">{{ __('Mostrar') }}</a>
                          <a class="btn btn-dark" href="{{ route('categories.edit', $category->id) }}">{{ __('Editar') }}</a>
                          <a class="btn btn-danger" href="{{ route('categories.destroy', $category->id) }}">{{ __('Excluir') }}</a>

                        </th>
                    </tr>

                    @endforeach
                    <tbody>
                </div>

            </div>
        </div>
    </div>
</div>



<section>

</section>
@endsection
