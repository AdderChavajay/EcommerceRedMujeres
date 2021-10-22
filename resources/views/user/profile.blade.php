@extends('layauts.plantilla')

@section('header')
@include('components.header')
@endsection

@section('main')
<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="">
                    <img src="foto.jpg" class=" img img-fluid" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Nombre de Usuario
                    </div>
                </div>

                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu ">
                    <ul class="nav text-center">

                        <li class="mx-auto">
                            <a href="{{ route('settings.profile') }}" class="nav-link">
                                Ajustes de perfil
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                <div class="Card">
                    <div class="card-header text-center">
                        <h5>Historial de compras</h5>
                    </div>
                    <div class="card-body overflow-auto">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <th>#</th>
                                <th>Producto</th>
                                <th>Tamaño</th>
                                <th>Precio/U</th>
                                <th>subtotal</th>
                            </thead>
                            <tbody>
                                <td></td>
                                <td>nombre producto</td>
                                <td>S</td>
                                <td>$. 45</td>
                                <td>$. 45 </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
