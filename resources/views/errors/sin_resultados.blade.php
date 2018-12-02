@extends('layouts.app')
@section('content')

<div class="main-container col2-left-layout">
    <div class="main-top-container"></div>
        <div class="main container">
            <div class="inner-container">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home" itemscope="" itemtype="">
                            <a href="{{route('home')}}" title="Ir a la Página de Inicio" itemprop="url">
                                <span itemprop="title">Inicio</span>
                            </a>
                            <span class="sep"></span>
                        </li>
                        <li class="search">
                            <span class="last-crumb">{{$linea}}</span>
                        </li>
                    </ul>
                </div>
                <div class="preface"></div>
                <div class="col-main grid12-9 grid-col2-main no-gutter">
                    <div class="page-title">
                        <h1>{{$linea}}</h1>
                    </div>
                    <p class="note-msg">
                        Búsqueda sin resultados.
                    </p>
                </div>
                <div class="postscript"></div>
            </div>
        </div>
        <div class="main-bottom-container"></div>
</div>

@stop