@extends('layauts.plantilla')

@section('title','Ingresar Producto')

@section('main')
<h1>Productos</h1>
<a href="{{ route('product.create') }}" class="btn btn-primary"> Nuevo producto </a>

@if (session('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Tama;o</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->size }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
