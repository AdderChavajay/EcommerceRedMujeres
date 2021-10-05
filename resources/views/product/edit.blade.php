@extends('layauts.plantilla')

@section('title','Editar infromcaion del Producto')

@section('header')
<header class="text-center ">
    <img src="{{asset('images/icons/icons/LogoMercado.png')}}" class="img img-fluid" alt="">
    <img src="{{asset('images/icons/icons/medianologopnggrande.ico')}}" class="img img-fluid" alt="">
</header>
@endsection

@section('main')
<main>
    <div class="container">
        <div class="row ">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5">
                <div class=" shadow border-radius ">

                    <div class="card-body p-4 p-sm-5">
                        <div class="text-center ">
                            <h3>Editar Informacion Producto </h3>
                        </div>

                        @if ($errors->any())
                            @foreach ($errors->all() as $message)
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @endforeach
                        @endif

                        <form action="{{url('product',$product->id)}} " method="POST"  id="post-form" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PATCH')}}
                            @include('layauts.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection