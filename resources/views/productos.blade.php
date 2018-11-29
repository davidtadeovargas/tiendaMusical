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
                                    <a href="" title="{{$prod->descripcion}}" class="product-image">
                                        <img id="product-collection-image-81" 
                                        src="{{$dominio}}/images/productos/{{$prod->articulo}}.jpg" alt="">
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