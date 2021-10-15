@extends('layouts.app')

@section('title','Editar infromcaion del Producto')

@section('main')
<main>
    <div class="container">
        <div class="row ">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5">
                <div class=" shadow border-radius ">

                    <div class="card-body p-4 p-sm-5">
                        <div class="text-center ">
                            <h3>Editar nombre de la categoria </h3>
                        </div>

                        @if ($errors->any())
                        @foreach ($errors->all() as $message)
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @endforeach
                        @endif

                        <form action="{{route('category.update',$category->id)}} " method="POST" id="post-form" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PATCH')}}
                            @include('components.formCategory')
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
