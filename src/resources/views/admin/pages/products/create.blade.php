@extends('admin.layouts.app')

@section('title', 'Cadastrar produto')

@section('content')
    <h1 class="text-center mt-3">Cadastrar novo produto</h1>
    <a href="{{route('products.index')}}">Voltar</a>
    <br><br>
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data" class="form">
        @include('admin.pages.products._partials.form')
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection