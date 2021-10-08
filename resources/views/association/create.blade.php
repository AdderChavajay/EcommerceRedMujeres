@extends('layouts.app')

@section('title', 'Ingresar Producto')

@section('main')

<div class="container">
    <div>
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5">
            <div class=" shadow border-radius">
                @if ($errors->any())
                @foreach ($errors->all() as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @endforeach
                @endif
                <div class="text-center py-2">
                    <h3>Nueva Categoria </h3>
                </div>

                <div class=" py-2 ">
                    <form action="{{ route('association.store') }}" method="post">
                        @csrf
                        @include('components.formAssociation')
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection