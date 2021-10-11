@extends('layauts.plantilla')

@section('title','Compras')

@section('header')
@include('components.header');
@endsection


@section('main')

<div class="container col-md-6">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center">
                        <h4>Productos</h4>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div>
                                        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-shopping-carts/img1.jpg"
                                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                    </div>
                                    <div class="ms-3 px-3 py-0">
                                        <h5>Iphone 11 pro</h5>
                                        <p class="small mb-0">256GB, Navy Blue</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <div style="width: 50px;">
                                        <h5 class="fw-normal mb-0">2</h5>
                                    </div>
                                    <div style="width: 80px;">
                                        <h5 class="mb-0">$900</h5>
                                    </div>
                                    <a href="#" class="btn btn-default" style="color: green;">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection