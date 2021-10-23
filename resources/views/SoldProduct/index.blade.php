@extends('layouts.app')

@section('main')
<div class="container">


    <div class="Card">
        <div class="card-header text-center">
            <h5>Registro de ventas Realizadas por Usuarios</h5>

        </div>
        <div class="card-body overflow-auto">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Pago ID</th>
                        <th>Cliente</th>
                        <th>Productos</th>
                        <th>Total</th>
                        <th width="280px">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchaseds as $purchased)
                    <tr>
                        <td>{{ $purchased->id }}</td>
                        <td>{{ $purchased->pay_id }}</td>
                        <td>{{ $purchased->user->name }} {{ $purchased->user->last_name }}</td>
                        <td>{{ $purchased->n_prod }}</td>
                        <td>{{ $purchased->total }}</td>
                        <td>
                            <a class="btn btn-success" href="">Mostrar</a>
                            <a class="btn btn-primary" href="">Editar</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        {{ $purchaseds->links() }}
    </div>
</div>

@endsection
