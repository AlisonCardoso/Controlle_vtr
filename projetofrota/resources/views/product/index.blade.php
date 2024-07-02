

@extends('layout.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="card">
                 <div class="card-header">
    <a class="btn btn-primary float-end" href="{{ route('products.create') }}">{{ __('Cadastrar Produto') }}</a>

                </div>

                <div class="card-body">

                    <table class="table table-bordered table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">imagem</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Açoes</th>

                        </tr>
                    </thead>
                    @foreach ($products as $product )
                    @php
                        $category=$products->find( $product->id)->category;
                    @endphp
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <th scope="row">{{$product->name}}</th>
                        <th scope="row">{{$category->name}}</th>
                        <th scope="row">{{$product->image}}</th>
                        <th scope="row">{{$product->description}}</th>





                        <th scope="row">
                          <div class="flex items-center gap-3">
                          <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">{{ __('Mostrar') }}</a>
                          <a class="btn btn-dark" href="{{ route('products.edit', $product->id) }}">{{ __('Editar') }}</a>
                          <a class="btn btn-danger" href="{{ route('products.destroy', $product->id) }}">{{ __('Excluir') }}</a>

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
