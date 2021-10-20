@extends('layouts.app')

@section('title', 'Categorias')

@section('main')
<div class="container py-2 px-0">
    <a href="{{route('category.create')}}" class="btn btn-primary">nueva categoria</a>
</div>

<div class="container">

    <div class="card-header text-center">
        <h5>Categorias Insertadas </h5>

    </div>

    <div class="card-body">
        <table class="table table-hover text-center">
            <thead class="thead-dark">
                <tr class="">
                    <th scope="col-2">#</th>
                    <th scope="col-4">Nombre</th>
                    <th scope="col-3">imagen</th>
                    <th scope="col-3 col-sm-12">opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr class="">
                    <th class="col-2">{{ $category->id }}</th>
                    <td class="col-4">{{ $category->name }}</td>
                    <td class="col-3">
                        <img src="{{asset('storage/'.$category->images)}}" alt="" style="max-width: 5rem;">
                    </td>
                    <td class="col-3">
                        <div class="row ">

                            <div class="col">
                                <a title="Editar Producto" href="{{ route('category.edit', $category->id) }}"
                                    class="btn btn-secondary">
                                    <ion-icon name="pencil" title="Editar Producto"></ion-icon>
                                </a>
                            </div>

                            <div class="col">
                                <a title="Detalles" href="{{ route('product.show', $category->id) }}"
                                    class="btn btn-secondary">
                                    <ion-icon name="eye" title="Detalles"></ion-icon>
                                </a>
                            </div>

                            <div class="col">
                                <form action="{{ route('category.destroy', $category->id) }}"
                                    enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button title="Borrar" type="submit"
                                        onclick="return confirm('Deseas borrar el prducto')" value="borrar"
                                        class="btn btn-danger">
                                        <ion-icon name="close"></ion-icon>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection