@extends('admin.layouts.app')

@section('title', 'Produtos')

@section('content')
    <h1 class="text-center mt-3">Listagem de produtos</h1>
    <a href="{{route('products.create')}}">Cadastrar</a>
    <br><br>
    <form action="{{route('products.search')}}" method="post" class="form form-inline mb-3">
        @csrf
        <input type="text" name="filter" placeholder="Filtros" class="form-control" value="{{$filters['filter'] ?? ''}}">
        <button type="submit" class="btn btn-primary ml-3">Buscar</button>
    </form>
    @isset($products)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th width="100">Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            @if ($product->image)
                                {{-- {{url("storage/{$product->image}")}} --}}
                                <img src="http://localhost:7070/storage/app/public/{{$product->image}}" alt="{{$product->name}}" style="max-width: 100px;">
                            @else
                                <img src="" alt="">
                            @endif
                        </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <a href="{{route('products.edit', $product->id)}}">Editar</a>
                            <a href="{{route('products.show', $product->id)}}">Detalhes</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (isset($filters))
            {{$products->appends($filters)->links()}}
        @else
            {{$products->links()}}
        @endif
    @endisset
@endsection

@push('styles')
    <style>
        .last {
            background-color: #ccc;
        }
    </style>
@endpush

@push('scripts')

@endpush