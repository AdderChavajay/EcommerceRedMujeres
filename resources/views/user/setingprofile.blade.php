@extends('layauts.plantilla')

@section('header')
@include('components.header')
@endsection

@section('main')
<main>
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5
    shadow border-radius px-5 py-5">

        <form action="" method="post">
            @include('components.formsetingprofile')
        </form>
    </div>

</main>
@endsection