@extends('layouts.headerFooter')
@section('content')

<div class="main-container col2-left-layout">
    <div class="main-top-container"></div>
        <div class="main container">
            <div class="inner-container">
                <div class="category-banner"></div>
                <div class="breadcrumbs">
                    <ul>
                        <li class="home" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="https://www.veerkamponline.com/" title="Ir a la página de inicio" itemprop="url">
                                <span itemprop="title">Inicio</span>
                            </a>
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
                                        <option value="https://www.veerkamponline.com/guitarras.html?dir=asc&amp;order=position" selected="selected">Posición</option>
                                        <option value="https://www.veerkamponline.com/guitarras.html?dir=asc&amp;order=name">Nombre</option>
                                        <option value="https://www.veerkamponline.com/guitarras.html?dir=asc&amp;order=price">Precio</option>
                                        <option value="https://www.veerkamponline.com/guitarras.html?dir=asc&amp;order=marca">Marca</option>
                                    </select>
                                    <a class="category-asc ic ic-arrow-down" href="https://www.veerkamponline.com/guitarras.html?dir=desc&amp;order=position" title="Establecer dirección descendente"></a>
                                </div>
                            
                                <div class="limiter">
                                    <label>Mostrar</label>
                                    <select onchange="setLocation(this.value)">
                                        <option value="https://www.veerkamponline.com/guitarras.html?limit=12">12</option>
                                        <option value="https://www.veerkamponline.com/guitarras.html?limit=40" selected="selected">40</option>
                                    </select>
                                    <span class="per-page"> por página</span>
                                </div>

                                <p class="view-mode">
                                    <label>Ver como:</label>
                                    <span title="Parrilla" class="grid ic ic-grid"></span>
                                    <a href="https://www.veerkamponline.com/guitarras.html?mode=list" title="Lista" class="list ic ic-list"></a>
                                </p>  
                            </div>
                            
                            <div class="pager">
                                <div class="pages">
                                    <strong>Página:</strong>
                                    <ol>
                                        <li class="current">1</li>
                                        <li><a href="https://www.veerkamponline.com/guitarras.html?p=2">2</a></li>
                                        <li><a href="https://www.veerkamponline.com/guitarras.html?p=3">3</a></li>
                                        <li><a href="https://www.veerkamponline.com/guitarras.html?p=4">4</a></li>
                                        <li><a href="https://www.veerkamponline.com/guitarras.html?p=5">5</a></li>
                                        <li class="next">
                                            <a class="next ic ic-right" href="https://www.veerkamponline.com/guitarras.html?p=2" title="Siguiente"></a>
                                        </li>
                                    </ol>
                                </div> 
                            </div>  
                        </div>
                            
                            
                        <ul class="products-grid category-products-grid itemgrid itemgrid-adaptive itemgrid-3col single-line-name centered hover-effect equal-height">
                            @foreach($Productos as $prod)
                            <li class="item" style="height: 343.767px; padding-bottom: 62px;">
                                <div class="product-image-wrapper" style="max-width:295px;">
                                    <a href="" title="{{$prod->descripcion}}" class="product-image">
                                        <img id="product-collection-image-81" 
                                        src="../../images/productos/{{$prod->articulo}}.jpg" alt="">
                                    </a>
                                <h2 class="product-name">
                                    <a href="" title="{{$prod->descripcion}}">{{$prod->descripcion}}</a>
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
                                        <span class="price" id="product-price-81">${{$prod->precio}}</span>
                                    </p>
                                </div>
                                <div class="actions clearer" style="padding-left: 55.3833px; bottom: 28px;">
                                    <button type="button" title="¡Lo Quiero!" class="button btn-cart" onclick="setLocation('https://www.veerkamponline.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cudmVlcmthbXBvbmxpbmUuY29tL2d1aXRhcnJhcy5odG1s/product/81/form_key/XLfvI7SkUubvOoIS/')">
                                        <span>
                                            <span>¡Lo Quiero!</span>
                                        </span>
                                    </button>
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
                                            <li class="current">1</li>
                                            <li><a href="https://www.veerkamponline.com/guitarras.html?p=2">2</a></li>
                                            <li><a href="https://www.veerkamponline.com/guitarras.html?p=3">3</a></li>
                                            <li><a href="https://www.veerkamponline.com/guitarras.html?p=4">4</a></li>
                                            <li><a href="https://www.veerkamponline.com/guitarras.html?p=5">5</a></li>
                                            <li class="next">
                                                <a class="next ic ic-right" href="https://www.veerkamponline.com/guitarras.html?p=2" title="Siguiente"></a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

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