@extends('layouts.app')

@section('title','Productos')

@section('main')
<div class="container-fluid py-3 px-4">

    <a href="{{route('product.create') }}" class="btn btn-primary">
        <ion-icon name="add"></ion-icon> Nuevo producto
    </a>

    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show " role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>
<div class="container">
    <div class="Card">
        <div class="card-header text-center">
            <h5>Productos </h5>

        </div>
        <div class="card-body overflow-auto">
            <table class="table table-hover">
                <thead>
                    <tr class="thead-dark">
                        <th scope="col-1">#</th>
                        <th>Categorias</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Tamaño</th>
                        <th scope="col" class="">Imagen</th>
                        <th scope="col" class="">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="">
                        <th>{{ $product->id }}</th>
                        <td>
                            @foreach ($product->categories as $category)
                            <ul>
                                <li>{{ $category->name }}</li>
                            </ul>
                            @endforeach
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->size }}</td>
                        <td class="">
                            @empty($product->images)
                            @else
                            @php
                            $images = explode(',', $product->images);
                            @endphp
                            <img src="{{asset('storage/'.$images[0])}}" class="img img-fluid" style="max-width: 3rem;">
                            @endempty
                        </td>
                        <td class="row col-sm-12">
                            <div class="text-center col">
                                <a title="Detalles" href="{{ route('product.show', $product->id) }}"
                                    class="btn btn-secondary ">
                                    <ion-icon name="eye" title="Detalles"></ion-icon>
                                </a>
                            </div>
                            <div class="text-center col">
                                <a title="Editar Producto" href="{{ route('product.edit', $product->id) }}"
                                    class="btn btn-secondary ">
                                    <ion-icon name="pencil" title="Editar Producto"></ion-icon>
                                </a>
                            </div>
                            <div class=" text-center col">
                                <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button title="Borrar" type="submit"
                                        onclick="return confirm('Deseas borrar el prducto')" value="borrar"
                                        class="btn btn-danger">
                                        <ion-icon name="close"></ion-icon>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>

<div>
    {{ $products->links() }}
</div>
@endsection