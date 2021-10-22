@extends('layauts.plantilla')

@section('header')
@include('components.header')
@endsection

@section('main')
<main>
    <div class="container mlp  -auto">
        <div class="col-md-4 shadow py-3 px-3">
            <div>
                <span>Cambiar nombre</span>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" placeholder="Cambiar Nombre"
                        aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div>
                <span>Cambiar Apellido</span>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" placeholder="Cambiar Apellido"
                        aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div>
                <span>Cambiar Correo</span>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">@</span>
                    </div>
                    <input type="email" class="form-control" aria-label="Small" placeholder="Cambiar Correo"
                        aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div>
                <span>Cambiar Contraseña</span>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                            <ion-icon name="key-outline"></ion-icon>
                        </span>
                    </div>
                    <input type="email" class="form-control" aria-label="Small" placeholder="Cambiar Correo"
                        aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div>
                <span>Confirmar Contraseña</span>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                            <ion-icon name="key-outline"></ion-icon>
                        </span>
                    </div>
                    <input type="email" class="form-control" aria-label="Small" placeholder="Cambiar Correo"
                        aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
