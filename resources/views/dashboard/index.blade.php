@extends('layouts.dashboard')
@section('content')

<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Bienvenido a {{ config('app.name', 'Laravel') }} House</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

<div class="row">
                   
                    <!--<div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white">
                                	<i class="mdi mdi-view-dashboard"></i>
                                </h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div>
                    </div>-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white">
                                	<i class="fas fa-th-list"></i>
                                </h1>
                                <h6 class="text-white">Catálogo</h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white">
                                	<i class="fas fa-folder"></i>
                                </h1>
                                <h6 class="text-white">Mis Cotizaciones</h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white">
                                	<i class="fas fa-cart-plus"></i>
                                </h1>
                                <h6 class="text-white">Carrito</h6>
                            </div>
                        </div>
                    </div>
                </div>

@stop