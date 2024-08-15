

@extends('layout.layout')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="card">
                 <div class="card-header">
    <a class="btn btn-primary float-end" href="{{ route('categories.create') }}">{{ __('Cadastrar Categoria') }}</a>

                </div>

                <div class="card-body">

                    <div class="table table-bordered table-striped text-center">
                        <table class="table table-hover">
                            <thead class="table-dark">


                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">descriçao</th>
                        <th scope="col">Ativa</th>
                        <th scope="col">Açoes</th>

                        </tr>
                    </thead>
                      <tbody>



                            @forelse ($categories as  $index => $row )
                    <tr>
                        <th scope="row">{{$row ->id}}</th>
                        <th scope="row">{{$row ->name}}</th>
                        <th scope="row">{{$row ->description}}</th>
                          <td>    @if ($row ->is_active) Ativo @else Inativo   @endif   </th>

                        <th scope="row">
                          <div class="flex items-center gap-3">
                          <a class="btn btn-info" href="{{ route('categories.show', $row ->id) }}">{{ __('Mostrar') }}</a>
                          <a class="btn btn-dark" href="{{ route('categories.edit',$row ->id) }}">{{ __('Editar') }}</a>
                          <a class="btn btn-danger" href="{{ route('categories.destroy', $row ->id) }}">{{ __('Excluir') }}</a>

                        </th>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Sem categorias cadastradas</td>
                    </tr>
                    @endforelse
                    </tbody>

                </div>

                </div>

            </div>
        </div>
    </div>
</div>



<section>

</section>
@endsection
