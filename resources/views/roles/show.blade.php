@extends('layouts.app')
@section('main')
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
        @endif
        <div class="card">
            <div class="card-header">Role
                @can('role-create')
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}">Atras</a>
                </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Nombre:</strong>
                    {{ $role->name }}
                </div>
                <div class="lead">
                    <strong>Permisos:</strong>
                    @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $permission)
                    <label class="badge badge-success">{{ $permission->name }}</label>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection