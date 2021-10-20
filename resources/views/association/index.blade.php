@extends('layouts.app')

@section('title', 'Categorias')

@section('main')
<div class="container py-2 px-0">
    <a href="{{route('association.create')}}" class="btn btn-primary">nueva asociacion</a>
</div>

<div class="container">

    <div class="card-header text-center">
        <h5>Asociaciones Insertadas </h5>

    </div>

    <div class="card-body  overflow-auto">
        <table class="table table-hover text-center text-center">
            <thead class="thead-dark">
                <tr class="">
                    <th scope="col-2">#</th>
                    <th scope="col-7">Nombre</th>
                    <th scope="col-3 col-sm-12">opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($associations as $association)
                <tr class="">
                    <th class="col-2">{{ $association->id }}</th>
                    <td class="col-7">{{ $association->name }}</td>
                    <td class="col-3 col-sm-12">
                        <div class="row ">
                            <div class="col">
                                <a title="Editar Producto" href="{{ route('association.edit', $association->id) }}"
                                    class="btn btn-secondary my-1 mx-1 ">
                                    <ion-icon name="pencil" title="Editar Producto"></ion-icon>
                                </a>
                            </div>

                            <div class="col">
                                <a title="Detalles" href="{{ route('association.show', $association->id) }}"
                                    class="btn btn-secondary my-1 mx-1 ">
                                    <ion-icon name="eye" title="Detalles"></ion-icon>
                                </a>
                            </div>

                            <div class="col">
                                <form action="{{ route('association.destroy', $association->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button title="Borrar" type="submit"
                                        onclick="return confirm('Deseas borrar el prducto')" value="borrar"
                                        class="btn btn-danger my-1 mx-1">
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