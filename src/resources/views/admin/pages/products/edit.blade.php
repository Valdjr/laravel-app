@extends('admin.layouts.app')

@section('title', "Editar produto {$product->id}")

@section('content')
    <h1 class="text-center mt-3">Editar produto {{$product->id}}</h1>
    <a href="{{route('products.index')}}">Voltar</a>
    <br><br>
    <form action="{{route('products.update', $product->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.pages.products._partials.form')
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection