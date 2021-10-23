@extends('layauts.plantilla')

@section('header')
@include('components.header');
@endsection

@section('main')
<main>
    <div class="mx-auto s row align-item-center justify-content-center vh-100">
        <div class="mx-auto align-self-center">
            <div class="d-flex justify-content-center">
                <img src="{{asset('images/check.png')}}" alt="" width="100rem">
            </div>
            <div class="py-3">
                <h3>Compra Realizada</h3>
                <p>Esperamos que vuelva pronto...</p>
            </div>
        </div>
    </div>
</main>
@endsection