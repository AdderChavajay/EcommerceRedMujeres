@extends('layauts.plantilla')

@section('header')
@include('components.header')
@endsection

@section('main')
<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar shadow">

                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Nombre de Usuario
                    </div>
                </div>

                <div class="profile-usermenu ">
                    <ul class="nav text-center">

                        <li class="mx-auto">
                            <a href="{{ route('settings.profile') }}" class="nav-link">
                                Ajustes de perfil
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Fin del Menu -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content shadow">
                <div class="Card">
                    <div class="card-header text-center">
                        <h5>Historial de compras</h5>
                    </div>
                    <div class="card-body overflow-auto">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Fecha</th>
                                    <th>Cliente</th>
                                    <th>Productos</th>
                                    <th>Total</th>
                                    {{-- <th>Accion</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchaseds as $purchased)
                                <tr>
                                    <td>{{ $purchased->id }}</td>
                                    <td>{{ date('d-m-Y H:i:s', strtotime($purchased->created_at)) }}</td>
                                    <td>{{ $purchased->user->name }} {{ $purchased->user->last_name }}</td>
                                    <td>{{ $purchased->n_prod }}</td>
                                    <td>{{ $purchased->total }}</td>
                                    {{-- <td>
                                        <a class="btn btn-success" href="{{ route('SoldProduct.show', $purchased->id) }}">Mostrar</a>
                                    </td> --}}
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{ $purchaseds->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
