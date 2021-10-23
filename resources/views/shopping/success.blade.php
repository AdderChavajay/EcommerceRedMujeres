@extends('layauts.plantilla')

@section('header')
@include('components.header');
@endsection

@section('main')
<main>
    <div class="mx-auto s row align-item-center justify-content-center vh-100">
        <div class="mx-auto align-self-center">
            <div class="d-flex justify-content-center" style="width: 200px;">
                <img src="{{asset('images/icons/check.png')}}" alt="" width="100px">
            </div>
            <div class="py-3">
                <h3>Compra Realizada</h3>
                <p>Esperamos que vuelva pronto...</p>
                <a href="{{ route('main') }}" class="btn btn-primary">Seguir comprando</a>
            </div>
        </div>
    </div>
</main>
@endsection
