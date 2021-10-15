@extends('layauts.plantilla')

@section('title','Mercado de Artesanias')

@section('header')
@include('components.header');
@endsection

@section('main')
<div class="container">
    <div class="row col-md-12 my-2">
        @foreach ($categories as $category)
        <div class="col-md-3 col-sm-6 ">
            <a href="{{route('allproducts', ['category' => $category->id])}}" style=" text-decoration:none; ">               
                <div class="product-image-wrapper producto shadow">
                    <div class="single-products">
                        <img src="{{ asset('storage/'.$category->images) }}" class="img-full-contain" alt="">
                        <div class="productinfo text-center">
                            <h4 style="color:#566573 ">{{ $category->name }}</h4>
                            <div class="margen py-1">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
