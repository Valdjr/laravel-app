@extends('admin.layouts.app')

@section('title', 'Produto')

@section('content')
    <h1 class="text-center mt-3">Produto {{$product->id}}</h1>
    <a href="{{route('products.index')}}">Voltar</a>
    <br><br>
    @isset($product)
        <ul>
            <li><strong>Nome:</strong> {{$product->name}}</li>
            <li><strong>Descrição:</strong> {{$product->description}}</li>
        </ul>

        <form action="{{route('products.destroy', $product->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
    @endisset
@endsection