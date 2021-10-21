@extends('layouts.app')

@section('title', 'Categorias')

@section('main')

<div class="Card container">
    <div class="card-header text-center">
        <h5>Registro de Usuarios</h5>
    </div>
    <div class="card-body overflow-auto">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr class="">
                    <th scope="col-1">#</th>
                    <th scope="col-2">Rol</th>
                    <th scope="col-3">Nombre</th>
                    <th scope="col-2">Apellido</th>
                    <th scope="col-4">email</th>
                    <th scope="col-2">opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="">
                    <th class="col-1">{{ $user->id }}</th>
                    <th class="col-1">
                        @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $val)
                        <label class="badge badge-dark">{{ $val }}</label>
                        @endforeach
                        @endif
                    </th>
                    <td class="col-3">{{ $user->name }}</td>
                    <td class="col-2">{{ $user->last_name }}</td>
                    <td class="col-4">{{ $user->email }}</td>
                    <td class="col-2">
                        <div class="row ">

                            <div class="col">
                                <a title="Editar Producto" href="{{ route('user.edit', $user->id) }}"
                                    class="btn btn-secondary my-1 mx-1 ">
                                    <ion-icon name="pencil" title="Editar Producto"></ion-icon>
                                </a>
                            </div>
                            <!--
                            <div class="col">
                                <a title="Detalles" href="{{ route('product.show', $user->id) }}"
                                    class="btn btn-secondary ">
                                    <ion-icon name="eye" title="Detalles"></ion-icon>
                                </a>
                            </div>
                        -->
                            <div class="col">
                                <form action="{{ route('user.destroy', $user->id) }}" method="post">
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