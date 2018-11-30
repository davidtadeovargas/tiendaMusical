@extends('layouts.headerFooter')
@section('content')

<div class="main-container col2-left-layout">
    <div class="main-top-container"></div>
        <div class="main container">
            <div class="inner-container">
                <div class="category-banner"></div>
                <div class="breadcrumbs">
                    <ul>
                        <li class="home" itemscope="" itemtype="" title="Ir a la página de inicio" itemprop="url">
                                <span itemprop="title">Inicio</span>
                            <span class="sep"></span>
                        </li>
                        <li class="category4">
                            <span class="last-crumb">{{$linea}}</span>
                        </li>
                    </ul>
                </div>
                <div class="preface"></div>
                <div class="col-main grid12-9 grid-col2-main no-gutter">
                    <div class="page-title category-title">
                        <h1>{{$linea}}</h1>
                    </div>
                    <div class="category-products">
                        <div class="toolbar">
                            <div class="sorter">
                                <p class="amount">Elementos 1 a 40 de un total de 820</p>
                                <div class="sort-by">
                                    <label>Ordenar por</label>
                                    <select onchange="setLocation(this.value)">
                                        <option value="" selected="selected">Posición</option>
                                        <option value="">Nombre</option>
                                        <option value="">Precio</option>
                                        <option value="">Marca</option>
                                    </select>
                                    <a class="category-asc ic ic-arrow-down" href="" title="Establecer dirección descendente"></a>
                                </div>
                            
                                <div class="limiter">
                                    <label>Mostrar</label>
                                    <select onchange="setLocation(this.value)">
                                        <option value="?limit=4">4</option>
                                        <option value="?limit=8" selected="selected">8</option>
                                    </select>
                                    <span class="per-page"> por página</span>
                                </div>

                                <p class="view-mode">
                                    <label>Ver como:</label>
                                    <span title="Parrilla" class="grid ic ic-grid"></span>
                                    <a href="" title="Lista" class="list ic ic-list"></a>
                                </p>  
                            </div>
                        </div>

<div class="productos"> 
                        
                            <div class="toolbar">
                                <div class="pager">
                                    <div class="pages">
                                        <strong>Página:</strong>
                                        <ol>
                                            {!! $Productos->render() !!}
                                        </ol>
                                    </div>
                                </div>
                            </div>
                       
                                       

                        <ul class="products-grid category-products-grid itemgrid itemgrid-adaptive itemgrid-3col single-line-name centered hover-effect equal-height">
                            @foreach($Productos as $prod)
                            <li class="item" style="height: 343.767px; padding-bottom: 62px;">
                                <div class="product-image-wrapper" style="max-width:295px;">
                                    <a href="" title="{{$prod->nombre}}" class="product-image">
                                        <img id="product-collection-image-81" 
                                        src="{{$dominio}}/images/productos/{{$prod->articulo}}.jpg" alt="">
                                    </a>
                                <h2 class="product-name">
                                    <a href="" title="{{$prod->nombre}}">{{$prod->nombre}}</a>
                                </h2>
                                <h3 class="product-marca">{{$prod->marca}}</h3>
                                <h3 class="product-marca">&nbsp;</h3>
                                <div class="price-box">
                                    <!--<p class="old-price">
                                        <span class="price-label">Precio Habitual:</span>
                                        <span class="price" id="old-price-81">$</span>
                                    </p>-->
                                    <p class="special-price">
                                        <span class="price-label">Precio oferta</span>
                                        <span class="price" id="product-price-81">${{ number_format($prod->precio,2)}}</span>
                                    </p>
                                </div>
                                <div class="actions clearer" style="padding-left: 55.3833px; bottom: 28px;">
                                    <a class="button btn-cart" href="{{route('cart-add',$prod->articulo)}}">
                                        <span>
                                            <span>¡Lo Quiero!</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        
                        <div class="toolbar-bottom">
                            <div class="toolbar">
                                <div class="pager">
                                    <div class="pages">
                                        <strong>Página:</strong>
                                        <ol>
                                            {!! $Productos->render() !!}
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!--productos-->

                    </div>

                </div>

                <div class="col-left sidebar grid12-3 grid-col2-sidebar no-gutter">
                    <div class="block block-vertnav hide-below-768">
                        <div class="block-title">
                            <strong>
                                <span>Categorías {{$linea}}</span>
                            </strong>
                        </div>
                        <div class="block-content">
                            <ul class="accordion accordion-style1 vertnav vertnav-side clearer">
                                @foreach($Categorias as $cat)
                                <li class="nav-item level0 nav-1 first">
                                    <a href="{{$dominio}}/{{$linea}}/{{$cat->categoria}}/all">
                                        <span>{{$cat->categoria}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div id="layered-nav-marker"></div>
                    <div class="paypal-logo">
                        <a href="#" title="Opciones Adicionales" onclick="javascript:window.open('https://www.paypal.com/mx/cgi-bin/webscr?cmd=xpt/Marketing/popup/OLCWhatIsPayPal-outside','paypal','width=600,height=350,left=0,top=0,location=no,status=yes,scrollbars=yes,resizable=yes'); return false;">
                            <img src="Guitarras%20Archivos/bnr_nowAccepting_150x60.gif" alt="Opciones Adicionales" title="Opciones Adicionales">
                        </a>
                    </div>
                </div>
                <div class="postscript"></div>
            </div>
        </div>
        <div class="main-bottom-container"></div>
</div>

@stop