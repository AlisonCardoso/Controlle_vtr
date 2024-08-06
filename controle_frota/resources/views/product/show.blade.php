@extends('layout.layout')

@section('content')

<h1>visualizar</h1> <div class="card-body">


    @foreach ($products as $product )
    @php
        $category=$products->find( $product->id)->category;
    @endphp
    <tr>
       <h1>Id: {{$product->id}}</h1>
       <h2>Nome:{{$product->name}}</h2>
        <h2>Categoria: {{$category->name}}</h2>
      <h2>imagem:{{$product->image}}</h2>
      <h2>descrição: {{$product->description}}</h2>






          <div class="flex items-center gap-3">

          <a class="btn btn-dark" href="{{ route('products.index') }}">{{ __('Voltar') }}</a>
          <a class="btn btn-danger" href="{{ route('products.destroy', $product->id) }}">{{ __('Excluir') }}</a>


    @endforeach

</div>




@endsection
