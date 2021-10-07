@extends('layouts.app')

@section('title', 'Ingresar Producto')

{{-- @section('header')
@include('components.header'); --}}
<!--

    <header class="text-center ">
        <img src="{{asset('images/icons/icons/LogoMercado.png')}}" class="img img-fluid" alt="">
        <img src="{{asset('images/icons/icons/medianologopnggrande.ico')}}" class="img img-fluid" alt="">
    </header>
-->

{{-- @endsection --}}

<!--######################### main ###############################-->
@section('main')
<main>
    <div class="">
        <div class="row ">
            <div class="col-sm-12 col-md-7 col-lg-7 mx-auto my-3">
                <div class=" shadow border-radius ">
                    <div class="card-body p-4 p-sm-5">
                        <div class="text-center ">
                            <h3>Ingresar Producto </h3>
                        </div>

                        @if ($errors->any())
                        @foreach ($errors->all() as $message)
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @endforeach
                        @endif

                        <form action="{{route('product.store') }}" method="POST" id="post-form"
                            enctype="multipart/form-data">
                            @csrf
                            @include('layauts.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
