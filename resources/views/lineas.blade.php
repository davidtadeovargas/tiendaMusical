@extends('layouts.app')
@section('content')



<div class="main-container col2-left-layout">
    <div class="main-top-container"></div>
        <div class="main container">
            <div class="inner-container">
                <div class="category-banner" style="margin-top: 20px">
                    <div class="cat-banner category-image-container" style="background-image: url(/images/banners/bajos.jpg)">
                    </div>
                </div>
                                        <div class="breadcrumbs">
    <ul>
                                    <li class="home" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="https://www.veerkamponline.com/" title="Ir a la página de inicio" itemprop="url"><span itemprop="title">Inicio</span></a>
            
                                <span class="sep"></span>
                                
                </li>
                                    <li class="category5">
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
    
        <p class="amount">
                            Elementos 1 a 40 de un total de 430                 </p>
        
        <div class="sort-by">
            <label>Ordenar por</label>
            <select onchange="setLocation(this.value)">
                                            <option value="https://www.veerkamponline.com/bajos.html?dir=asc&amp;order=position" selected="selected">
                    Posición                </option>
                                                            <option value="https://www.veerkamponline.com/bajos.html?dir=asc&amp;order=name">
                    Nombre              </option>
                                                            <option value="https://www.veerkamponline.com/bajos.html?dir=asc&amp;order=price">
                    Precio              </option>
                                                            <option value="https://www.veerkamponline.com/bajos.html?dir=asc&amp;order=marca">
                    Marca               </option>
                                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                                
                                                                </select>
                            <a class="category-asc ic ic-arrow-down" href="https://www.veerkamponline.com/bajos.html?dir=desc&amp;order=position" title="Establecer dirección descendente"></a>
                    </div>
        
        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="https://www.veerkamponline.com/bajos.html?limit=12">
                    12              </option>
                            <option value="https://www.veerkamponline.com/bajos.html?limit=40" selected="selected">
                    40              </option>
                        </select><span class="per-page"> por página</span>
        </div>
        
                <p class="view-mode">
                                        <label>Ver como:</label>
                                <span title="Parrilla" class="grid ic ic-grid"></span><a href="https://www.veerkamponline.com/bajos.html?mode=list" title="Lista" class="list ic ic-list"></a>                  </p>
                
    </div> <!-- end: sorter -->
        
            
        
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
                                        src="{{asset('images/productos/'.$prod->articulo.'.jpg')}}" alt="">
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



<!--<script type="text/javascript">
    $j(document).on('product-media-loaded', function() {
        ConfigurableMediaImages.init('small_image');
                ConfigurableMediaImages.setImageFallback(7886, $j.parseJSON('{"option_labels":[],"small_image":{"7886":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/8\/5\/85ac028.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(7888, $j.parseJSON('{"option_labels":[],"small_image":{"7888":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/7\/5\/75ac002.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(7891, $j.parseJSON('{"option_labels":[],"small_image":{"7891":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/7\/5\/75ac003.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(496, $j.parseJSON('{"option_labels":[],"small_image":{"496":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/I\/b\/Ibanez-Bajo-Electrico-Gio-GSR205-TR-8205317.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(497, $j.parseJSON('{"option_labels":[],"small_image":{"497":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/I\/b\/Ibanez-Bajo-Electrico-Gio-GSR200-TR-8205314.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(498, $j.parseJSON('{"option_labels":[],"small_image":{"498":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/I\/b\/Ibanez-Bajo-Electrico-Serie-SR505-BM-8202201.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(499, $j.parseJSON('{"option_labels":[],"small_image":{"499":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/I\/b\/Ibanez-Bajo-Electrico-Serie-SR506-BM-8202203.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(501, $j.parseJSON('{"option_labels":[],"small_image":{"501":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/8\/2\/8213974.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(502, $j.parseJSON('{"option_labels":[],"small_image":{"502":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/I\/b\/Ibanez-Bajo-Electrico-Serie-SR500-BM-8202198.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(512, $j.parseJSON('{"option_labels":[],"small_image":{"512":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/8\/2\/8214211.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(515, $j.parseJSON('{"option_labels":[],"small_image":{"515":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/H\/o\/Hofner-Bajo-Electrico-Ignition-HI-BB-SB-Violin-8203625.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(518, $j.parseJSON('{"option_labels":[],"small_image":{"518":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/C\/o\/Cort-Bajo-Electrico-Masterpiece-ABMP-1-OPBB-8213883.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(520, $j.parseJSON('{"option_labels":[],"small_image":{"520":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/8\/2\/8214125.png"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(532, $j.parseJSON('{"option_labels":[],"small_image":{"532":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/I\/b\/Ibanez-Bajo-Electrico-Gio-GSR320-CA-8205261.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(534, $j.parseJSON('{"option_labels":[],"small_image":{"534":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/C\/o\/Cort-Bajo-Electrico-Jeff-Berlin-RITHIMIC-NAT-8214091.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(542, $j.parseJSON('{"option_labels":[],"small_image":{"542":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/J\/i\/Jimmy-Wess-Encordadura-Bajo-Electrico-WAB300-2103330.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(543, $j.parseJSON('{"option_labels":[],"small_image":{"543":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/J\/i\/Jimmy-Wess-Encordadura-Bajo-Electrico-WAB306-2103331.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(544, $j.parseJSON('{"option_labels":[],"small_image":{"544":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/J\/i\/Jimmy-Wess-Encordadura-Bajo-Electrico-WNB200--2103350.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(545, $j.parseJSON('{"option_labels":[],"small_image":{"545":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/J\/i\/Jimmy-Wess-Encordadura-Bajo-Electrico-WNB205--2103369.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(546, $j.parseJSON('{"option_labels":[],"small_image":{"546":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/J\/i\/Jimmy-Wess-Encordadura-Bajo-Electrico-WNB206-2103351.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(547, $j.parseJSON('{"option_labels":[],"small_image":{"547":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/J\/i\/Jimmy-Wess-Encordadura-Bajo-Electrico-100SL-2103186.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(548, $j.parseJSON('{"option_labels":[],"small_image":{"548":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/E\/r\/Ernie-Ball-Encordadura-Bajo-Electrico-2833-Hybrid-Slinky-2103112.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(549, $j.parseJSON('{"option_labels":[],"small_image":{"549":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/E\/r\/Ernie-Ball-Encordadura-Bajo-Electrico-3834-Super-Slinky-Coated-2103113.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(550, $j.parseJSON('{"option_labels":[],"small_image":{"550":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/E\/r\/Ernie-Ball-Encordadura-Bajo-Electrico-2834-Super-Slinky-2103114.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(551, $j.parseJSON('{"option_labels":[],"small_image":{"551":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/E\/r\/Ernie-Ball-Encordadura-Bajo-Electrico-2836-Regular-Slinky-2103118.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(552, $j.parseJSON('{"option_labels":[],"small_image":{"552":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/E\/r\/Ernie-Ball-Encordadura-Bajo-Electrico-3836EB-Regular-Slinky-Coated-2103119.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(553, $j.parseJSON('{"option_labels":[],"small_image":{"553":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/E\/r\/Ernie-Ball-Encordadura-Bajo-Electrico-2838-LS-Slinky-2103202.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(554, $j.parseJSON('{"option_labels":[],"small_image":{"554":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/D\/u\/Dunlop-Encordadura-Bajo-Electrico-DBN45100-Med-Light-2103115.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(555, $j.parseJSON('{"option_labels":[],"small_image":{"555":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/D\/u\/Dunlop-Encordadura-Bajo-Electrico-DBN45105-Medium-2103116.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(556, $j.parseJSON('{"option_labels":[],"small_image":{"556":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/D\/u\/Dunlop-Encordadura-Bajo-Electrico-DBN45125-Medium-2103117.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(558, $j.parseJSON('{"option_labels":[],"small_image":{"558":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/D\/u\/Dunlop-Encordadura-Bajo-Electrico-RTT45130T-Trujillo-2103197.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(561, $j.parseJSON('{"option_labels":[],"small_image":{"561":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/E\/r\/Ernie-Ball-Encordadura-Bajo-Electrico-P03833-HybridSlinky-Coated-2103111.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(562, $j.parseJSON('{"option_labels":[],"small_image":{"562":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/E\/r\/Ernie-Ball-Encordadura-Bajo-Electrico-P02804-Flatwound-2103200.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(563, $j.parseJSON('{"option_labels":[],"small_image":{"563":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/E\/r\/Ernie-Ball-Encordadura-Bajo-Electrico-P02810-Flatwound-2103201.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(564, $j.parseJSON('{"option_labels":[],"small_image":{"564":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/E\/r\/Ernie-Ball-Encordadura-Bajo-Electrico-P02733-HybridSlinky-Cobalt-2103203.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(565, $j.parseJSON('{"option_labels":[],"small_image":{"565":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/E\/r\/Ernie-Ball-Encordadura-Bajo-Electrico-P02734-Super-Slinky-Cobalt-2103204.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(566, $j.parseJSON('{"option_labels":[],"small_image":{"566":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/D\/u\/Dunlop-Encordadura-Bajo-Electrico-DBSBN45105CV-Medium-2103274.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(567, $j.parseJSON('{"option_labels":[],"small_image":{"567":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/D\/u\/Dunlop-Encordadura-Bajo-Electrico-DBSBN45125CV-Medium-2103279.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(568, $j.parseJSON('{"option_labels":[],"small_image":{"568":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/D\/u\/Dunlop-Encordadura-Bajo-Electrico-DBSBN30130CV-Medium-2103285.jpg"},"base_image":[]}'));
                ConfigurableMediaImages.setImageFallback(569, $j.parseJSON('{"option_labels":[],"small_image":{"569":"https:\/\/www.veerkamponline.com\/media\/catalog\/product\/cache\/1\/small_image\/295x\/040ec09b1e35df139433887a97daa66f\/L\/a\/La-Bella-Encordadura-Bajo-Acustico-AB10-EXTRA-LIGHT-2102996.jpg"},"base_image":[]}'));
                $j(document).trigger('configurable-media-images-init', ConfigurableMediaImages);
    });
</script>-->
                    </div>


                    

                @if($Categorias != null)
                <div class="col-left sidebar grid12-3 grid-col2-sidebar no-gutter">
                    <div class="block block-vertnav hide-below-768">
                        <div class="block-title">
                            <strong>
                                <span>Categorías para {{$linea}}</span>
                            </strong>
                        </div>
                        <div class="block-content">
                            <ul class="accordion accordion-style1 vertnav vertnav-side clearer">
                                @foreach($Categorias as $cat)
                                <li class="nav-item level0 nav-1 first">
                                    <a href="{{route('lineas',[$linea,$cat->categoria,'all'])}}">
                                        <span>{{$cat->categoria}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div id="layered-nav-marker"></div>
                </div>
                @endif


</div>
                    <div class="postscript"></div>
                </div>
            </div>
            <div class="main-bottom-container"></div>
        </div>

@stop