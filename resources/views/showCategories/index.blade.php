@extends('layauts.plantilla')

@section('title','Mercado de Artesanias')

@section('header')
@include('components.header');
@endsection

@section('main')
<div class="container">
    <div class="row col-md-12 my-2">
        @foreach ($categories as $category)
        <div class="col-md-4 col-sm-6 ">
            <div class="product-image-wrapper producto shadow">
                <div class="single-products">
                    <h1>Categoria</h1>


                    <img src="{{ asset('storage/'.$category->images) }}" class="img-full-contain" alt="">

                    <div class="productinfo text-center">
                        <h4 style="color:#566573 ">{{ $category->name }}</h4>
                        <div class="margen py-3">
                            <button type=" submit" class="btn btn-primary">
                                <ion-icon name="eye-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection