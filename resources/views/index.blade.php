@extends('layouts.app')
@section('content')

	<div class="block_header_banners">
		<div class="banner container clearer">	
						<div class="grid-container"><div class="grid12-1">&nbsp;</div>
<div class="grid12-7">
<div class="grid12-4 envio item-bn"><img alt="" src="images/envio-gratis.png"> <span>Envío a todo<br> México</span></div>
<div class="grid12-4 entrega item-bn"><img alt="" src="images/entrega.png"> <span>Entrega en 72 hrs <br> hábiles</span></div>
<div class="grid12-4 formas item-bn"><img alt="" src="images/formas-pago.png">&nbsp; &nbsp;<span>Visa, Mastercard y PayPal</span></div>
<div class="grid12-4 formas item-bn">&nbsp;</div>
</div>
<div class="grid12-3 academia item-bn"><img alt="" src="images/aprende-veerkamp.png"> <span><a href="https://www.facebook.com/AcademiaVeerkamp/" target="_blank">Aprende a tocar un instrumento <br> Academia Veerkamp</a><br></span></div></div>
				</div>
	</div>
	</div> <!-- end: header-container3 -->
</div> <!-- end: header-container2 -->
</div> <!-- end: header-container -->




<script type="text/javascript">
//<![CDATA[

		
		var SmartHeader = {

			mobileHeaderThreshold : 770
			, rootContainer : jQuery('.header-container')

			, init : function()
			{
				enquire.register('(max-width: ' + (SmartHeader.mobileHeaderThreshold - 1) + 'px)', {
					match: SmartHeader.moveElementsToMobilePosition,
					unmatch: SmartHeader.moveElementsToRegularPosition
				});
			}

			, activateMobileHeader : function()
			{
				SmartHeader.rootContainer.addClass('header-mobile').removeClass('header-regular');
			}

			, activateRegularHeader : function()
			{
				SmartHeader.rootContainer.addClass('header-regular').removeClass('header-mobile');
			}

			, moveElementsToMobilePosition : function()
			{
				SmartHeader.activateMobileHeader();

				//Move cart
				jQuery('#mini-cart-wrapper-mobile').prepend(jQuery('#mini-cart'));

			
			
			
				//Reset active state
				jQuery('.skip-active').removeClass('skip-active');
				
				//Disable dropdowns
				jQuery('#mini-cart').removeClass('dropdown');
				jQuery('#mini-compare').removeClass('dropdown');

				//Clean up after dropdowns: reset the "display" property
				jQuery('#header-cart').css('display', '');
				jQuery('#header-compare').css('display', '');

			}

			, moveElementsToRegularPosition : function()
			{
				SmartHeader.activateRegularHeader();

				//Move cart
				jQuery('#mini-cart-wrapper-regular').prepend(jQuery('#mini-cart'));

			
			
			
				//Reset active state
				jQuery('.skip-active').removeClass('skip-active');

				//Enable dropdowns
				jQuery('#mini-cart').addClass('dropdown');
				jQuery('#mini-compare').addClass('dropdown');
			}

		}; //end: SmartHeader

		//Important: mobile header code must be executed before sticky header code
		SmartHeader.init();

		jQuery(function($) {

			//Skip Links
			var skipContents = $('.skip-content');
			var skipLinks = $('.skip-link');

			skipLinks.on('click', function (e) {
				e.preventDefault();

				var self = $(this);
				var target = self.attr('href');

				//Get target element
				var elem = $(target);

				//Check if stub is open
				var isSkipContentOpen = elem.hasClass('skip-active') ? 1 : 0;

				//Hide all stubs
				skipLinks.removeClass('skip-active');
				skipContents.removeClass('skip-active');

				//Toggle stubs
				if (isSkipContentOpen) {
					self.removeClass('skip-active');
				} else {
					self.addClass('skip-active');
					elem.addClass('skip-active');
				}
			});

		}); //end: on document ready

	


		
		jQuery(function($) {

			var StickyHeader = {

				stickyThreshold : 960 
				, isSticky : false
				, isSuspended : false
				, headerContainer : $('.header-container')
				, stickyContainer : $('.sticky-container')	//.nav-container
				, stickyContainerOffsetTop : 55 //Position of the bottom edge of the sticky container relative to the viewport
				, requiredRecalculation : false //Flag: required recalculation of the position of the bottom edge of the sticky container

				, calculateStickyContainerOffsetTop : function()
				{
					//Calculate the position of the bottom edge of the sticky container relative to the viewport
					StickyHeader.stickyContainerOffsetTop = 
						StickyHeader.stickyContainer.offset().top + StickyHeader.stickyContainer.outerHeight();

					//Important: disable flag
					StickyHeader.requiredRecalculation = false;
				}

				, init : function()
				{
					StickyHeader.hookToActivatedDeactivated(); //Important: call before activateSticky is called
					StickyHeader.calculateStickyContainerOffsetTop();
					StickyHeader.applySticky();
					StickyHeader.hookToScroll();
					StickyHeader.hookToResize();

					if (StickyHeader.stickyThreshold > 0)
					{
						enquire.register('(max-width: ' + (StickyHeader.stickyThreshold - 1) + 'px)', {
							match: StickyHeader.suspendSticky,
							unmatch: StickyHeader.unsuspendSticky
						});
					}
				}

				, applySticky : function()
				{
					if (StickyHeader.isSuspended) return;

					//If recalculation required
					if (StickyHeader.requiredRecalculation)
					{
						//Important: recalculate only when header is not sticky
						if (!StickyHeader.isSticky)
						{
							StickyHeader.calculateStickyContainerOffsetTop();
						}
					}

					var viewportOffsetTop = $(window).scrollTop();
					if (viewportOffsetTop > StickyHeader.stickyContainerOffsetTop)
					{
						if (!StickyHeader.isSticky)
						{
							StickyHeader.activateSticky();
						}
					}
					else
					{
						if (StickyHeader.isSticky)
						{
							StickyHeader.deactivateSticky();
						}
					}
				}

				, activateSticky : function()
				{
					var stickyContainerHeight = StickyHeader.stickyContainer.outerHeight();
					var originalHeaderHeight = StickyHeader.headerContainer.css('height');

					//Compensate the change of the header height after the sticky container was removed from its normal position
					StickyHeader.headerContainer.css('height', originalHeaderHeight);

					//Trigger even just before making the header sticky
					$(document).trigger("sticky-header-before-activated");

					//Make the header sticky
					StickyHeader.headerContainer.addClass('sticky-header');
					StickyHeader.isSticky = true;

					//Effect
					StickyHeader.stickyContainer.css('margin-top', '-' + stickyContainerHeight + 'px').animate({'margin-top': '0'}, 200, 'easeOutCubic');
					//StickyHeader.stickyContainer.css('opacity', '0').animate({'opacity': '1'}, 300, 'easeOutCubic');
				}

				, deactivateSticky : function()
				{
					//Remove the compensation of the header height change
					StickyHeader.headerContainer.css('height', '');

					StickyHeader.headerContainer.removeClass('sticky-header');
					StickyHeader.isSticky = false;

					$(document).trigger("sticky-header-deactivated");
				}

				, suspendSticky : function()
				{
					StickyHeader.isSuspended = true;

					//Deactivate sticky header.
					//Important: call method only when sticky header is actually active.
					if (StickyHeader.isSticky)
					{
						StickyHeader.deactivateSticky();
					}
				}

				, unsuspendSticky : function()
				{
					StickyHeader.isSuspended = false;

					//Activate sticky header.
					//Important: call applySticky instead of activateSticky to check if activation is needed.
					StickyHeader.applySticky();
				}

				, hookToScroll : function()
				{
					$(window).on("scroll", StickyHeader.applySticky);
				}

				, hookToScrollDeferred : function()
				{
					var windowScrollTimeout;
					$(window).on("scroll", function() {
						clearTimeout(windowScrollTimeout);
						windowScrollTimeout = setTimeout(function() {
							StickyHeader.applySticky();
						}, 50);
					});
				}

				, hookToResize : function()
				{
					$(window).on('themeResize', function(e) {

						//Require recalculation
						StickyHeader.requiredRecalculation = true;

						//Remove the compensation of the header height change
						StickyHeader.headerContainer.css('height', '');
					});
				}

				, hookToActivatedDeactivated : function()
				{
					//Move elements to sticky header
					$(document).on('sticky-header-before-activated', function(e, data) {

						//Move mini cart to sticky header but only if mini cart is NOT yet inside the holder
						//(if parent of parent doesn't have class "nav-holder").
						if (jQuery('#mini-cart').parent().parent().hasClass('nav-holder') === false)
						{
							jQuery('#nav-holder1').prepend(jQuery('#mini-cart'));
						}

						//Move mini compare to sticky header but only if mini compare is NOT yet inside the holder
						//(if parent of parent doesn't have class "nav-holder").
						if (jQuery('#mini-compare').parent().parent().hasClass('nav-holder') === false)
						{
							jQuery('#nav-holder2').prepend(jQuery('#mini-compare'));
						}

					}); //end: on event

					//Move elements from sticky header to normal position
					$(document).on('sticky-header-deactivated', function(e, data) {

						//Move mini cart back to the regular container but only if mini cart is directly inside the holder
						if (jQuery('#mini-cart').parent().hasClass('nav-holder'))
						{
							jQuery('#mini-cart-wrapper-regular').prepend(jQuery('#mini-cart'));
						}

						//Move mini compare back to the regular container but only if mini compare is directly inside the holder
						if (jQuery('#mini-compare').parent().hasClass('nav-holder'))
						{
							jQuery('#mini-compare-wrapper-regular').prepend(jQuery('#mini-compare'));
						}

					}); //end: on event
				}

			}; //end: StickyHeader

			StickyHeader.init();

		}); //end: on document ready

	
//]]>
</script>
        <div class="main-container col1-layout">
            <div class="main-top-container"></div>
            <div class="main container">
                <div class="inner-container">
                                        <div class="preface"></div>
                    <div class="col-main">
                                                            <div class="magestore-bannerslider">
                            <div class="magestore-bannerslider-standard">
                    <script type="text/javascript">
    var j7 = jQuery.noConflict();
    j7(document).ready(function($) {
        j7('.flexslider-7-1').flexslider({
            animation: "fade",
            slideshowSpeed: 4500            //minItems: 2,
            //maxItems: 4            
        });
    });
</script>
<div class="flexslider flexslider-7-1">
    <ul class="slides"> 
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                <a href="" target="_self" onclick="bannerClicks('14','1')" style="display:block"><img alt="Clínicas Veerkamp Mesones" src="images/home1.jpg"></a>
            </li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                <a href="https://www.veerkamponline.com/dj-s/mezcladoras.html?utm_source=Sitio_web&amp;utm_medium=Banner1_allenHeath15&amp;utm_campaign=20181004_all_general_AllenHeath_Reloop_Timbales&amp;utm_term=Banner1_allenHeath15&amp;utm_content=2018-10-04-Banner1_allenHeath15" target="_parent" onclick="bannerClicks('20','1')" style="display:block"><img alt="Allen &amp; Heath hasta 15% de descuento" src="images/home_allen.jpg"></a>
            </li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                <a href="https://www.veerkamponline.com/dj-s.html?utm_source=Sitio_web&amp;utm_medium=Banner2_Reloop30&amp;utm_campaign=20181004_all_general_AllenHeath_Reloop_Timbales&amp;utm_term=Banner2_Reloop30&amp;utm_content=2018-10-04-Banner2_Reloop30" target="_parent" onclick="bannerClicks('21','1')" style="display:block"><img alt="Reloop hasta 30% de descuento" src="images/home_reloop_10.jpg"></a>
            </li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                <a href="https://www.veerkamponline.com/percusiones/latinas.html?utm_source=Banner3_Timbales15&amp;utm_medium=Newsletter&amp;utm_campaign=20181004_all_general_AllenHeath_Reloop_Timbales&amp;utm_term=Banner3_Timbales15&amp;utm_content=2018-10-04-Banner3_Timbales15" target="_parent" onclick="bannerClicks('22','1')" style="display:block"><img alt="Timbales hasta 15% de descuento" src="images/home_timbales.jpg"></a>
            </li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: list-item;" class="flex-active-slide">
                <a href="https://www.veerkamponline.com/15-guitarras-clasicas-acusitcas-electroacusticas.html?utm_source=Sitio_web&amp;utm_medium=Banner1_GuitarrasAcusticasElectro15&amp;utm_campaign=20180927_all_general_Guitarras_Acusticas_ElectroAcusti15&amp;utm_term=Banner1_GuitarrasAcusti" target="_parent" onclick="bannerClicks('24','1')" style="display:block"><img alt="Guitarras eléctricas y electroacústicas hasta 15% de descuento" src="images/home_guitarras_11.jpg"></a>
            </li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                <a href="https://www.veerkamponline.com/15-fundas-y-estuches.html?utm_source=Sitio_web&amp;utm_medium=Banner2_FundasEstuches15&amp;utm_campaign=20180927_all_general_Guitarras_Acusticas_ElectroAcusti15&amp;utm_term=Banner2_FundasEstuches15&amp;utm_content=2018-09-27-Banner2_Fundas" target="_parent" onclick="bannerClicks('32','1')" style="display:block"><img alt="Fundas y Estuches hasta 15% de descuento" src="images/home_fundas_1.jpg"></a>
            </li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                <a href="https://www.veerkamponline.com/alientos/boquillas.html?utm_source=Sitio_web&amp;utm_medium=Banner3_Boquillas30&amp;utm_campaign=20180927_all_general_Guitarras_Acusticas_ElectroAcusti15&amp;utm_term=Banner3_Boquillas30&amp;utm_content=2018-09-27-Banner3_Boquillas30" target="_parent" onclick="bannerClicks('35','1')" style="display:block"><img alt="Boquillas y Abrazaderas 30% de descuento" src="images/home_boquillas_5.jpg"></a>
            </li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                <a href="https://www.veerkamponline.com/formas-pago/" target="_parent" onclick="bannerClicks('2','1')" style="display:block"><img alt="Formas de pago" src="images/formas_de_pago_3.jpg"></a>
            </li>
            
    <!-- items mirrored twice, total of 12 -->
    </ul>
<ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li><li><a class="">4</a></li><li><a class="flex-active">5</a></li><li><a class="">6</a></li><li><a class="">7</a></li><li><a class="">8</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>

                </div>    
                    </div>
        
	<div class="std"><p><br> </p><div class="grid-container categories-home">
	<div class="grid12-4">
		<figure class="effect-jazz">
			<img alt="img25" src="images/guitarras_acusticas_1_1.jpg">
			<figcaption class="guitarras">
				<h2>Guitarras</h2>			
				<a href="guitarras.php">View more</a>
			</figcaption>			
		</figure>
	</div>
	<div class="grid12-4">
		<figure class="effect-jazz">
			<img alt="img25" src="images/bajos_1_1.jpg">
			<figcaption class="bajos">
				<h2>Bajos</h2>			
				<a href="">View more</a>
			</figcaption>			
		</figure>
	</div>
	<div class="grid12-4">
		<figure class="effect-jazz">
			<img alt="img25" src="images/IMG_64021_1.jpg">
			<figcaption class="amplificadores &amp; efectos">
				<h2>Amplificadores &amp; Efectos</h2>			
				<a href="">View more</a>
			</figcaption>			
		</figure>
	</div>
	<div class="grid12-4">
		<figure class="effect-jazz">
			<img alt="img25" src="images/menu_baterias.jpg">
			<figcaption class="baterias">
				<h2>Baterias</h2>			
				<a href="">View more</a>
			</figcaption>			
		</figure>
	</div>
	<div class="grid12-4">
		<figure class="effect-jazz">
			<img alt="img25" src="images/remo2_1.jpg">
			<figcaption class="percusiones">
				<h2>Percusiones</h2>			
				<a href="">View more</a>
			</figcaption>			
		</figure>
	</div>
	<div class="grid12-4">
		<figure class="effect-jazz">
			<img alt="img25" src="images/clasicos_1_1.jpg">
			<figcaption class="clásicos">
				<h2>Clásicos</h2>			
				<a href="">View more</a>
			</figcaption>			
		</figure>
	</div>
	<div class="grid12-4">
		<figure class="effect-jazz">
			<img alt="img25" src="images/alientos_menu_2.jpg">
			<figcaption class="alientos ">
				<h2>Alientos </h2>			
				<a href="">View more</a>
			</figcaption>			
		</figure>
	</div>
	<div class="grid12-4">
		<figure class="effect-jazz">
			<img alt="img25" src="images/djs_1_1.jpg">
			<figcaption class="electrónica">
				<h2>Electrónica</h2>			
				<a href="">View more</a>
			</figcaption>			
		</figure>
	</div>
	<div class="grid12-4">
		<figure class="effect-jazz">
			<img alt="img25" src="images/libros_1.jpg">
			<figcaption class="libros">
				<h2>Libros</h2>			
				<a href="">View more</a>
			</figcaption>			
		</figure>
	</div>
</div><p></p>
<p><br>  <br> 
</p>



<script>
	//<![CDATA[
    jQuery(function($) {
    	if($(window).width() < 767){
	        var owl = $('#destSlider');
	        owl.owlCarousel({
	            lazyLoad: true,
				itemsCustom: [ [0, 1], [320, 2], [480, 2], [768, 3], [960, 3], [1280, 4] ],
				responsiveRefreshRate: 50,
				slideSpeed: 200,
				paginationSpeed: 500,
				scrollPerPage: true,
				autoPlay: 5000,
				stopOnHover: true,
				rewindNav: true,
				rewindSpeed: 600,
				pagination: false,		
				navigation: false,
				navigationText: false
	        }); //end: owl
			}
    });
//]]>
</script> <br> <div class="widget widget-new-products">
    <div class="widget-title">
        <h2>Nuevos</h2>
    </div>
    <div class="widget-products">
	    <div id="newSlider" class="grid-container">
	    	    	        	        	        	        	            <div class="grid12-3 nuevo">            	
	                <a href="https://www.veerkamponline.com/encordadura-d-addario-para-guitarra-electrica-niquel-010-052-exl140.html" title="Encordadura D'Addario Para Guitarra Eléctrica Níquel .010 - .052 EXL140" class="product-image"><img src="images/21ag011.jpg" alt="Encordadura D'Addario Para Guitarra Eléctrica Níquel .010 - .052 EXL140"></a>
	                <h3 class="product-name"><a href="https://www.veerkamponline.com/encordadura-d-addario-para-guitarra-electrica-niquel-010-052-exl140.html" title="Encordadura D'Addario Para Guitarra Eléctrica Níquel .010 - .052 EXL140)">Encordadura D'Addario Para Guitarra Eléctrica Níquel .010 - .052 EXL140</a></h3>
	                <h3 class="product-marca">D'Addario</h3>
	                

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-7232-widget-new-grid">
                                            <span class="price">$180.00</span>                                    </span>
                        
        </div>

                                        <button type="button" title="¡Lo Quiero!" class=" button btn-cart " onclick="setLocation('https://www.veerkamponline.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cudmVlcmthbXBvbmxpbmUuY29tLw,,/product/7232/form_key/hrGM0kKucLMueU64/');">¡Lo Quiero!</button>
                    
                 	 
	            </div>
             	        	        	        	            <div class="grid12-3 nuevo">            	
	                <a href="https://www.veerkamponline.com/encordadura-d-addario-para-bajo-niquel-040-095-exl220bt.html" title="Encordadura D'Addario Para Bajo Níquel .040 - .095 EXL220BT" class="product-image"><img src="images/21ag027.jpg" alt="Encordadura D'Addario Para Bajo Níquel .040 - .095 EXL220BT"></a>
	                <h3 class="product-name"><a href="https://www.veerkamponline.com/encordadura-d-addario-para-bajo-niquel-040-095-exl220bt.html" title="Encordadura D'Addario Para Bajo Níquel .040 - .095 EXL220BT)">Encordadura D'Addario Para Bajo Níquel .040 - .095 EXL220BT</a></h3>
	                <h3 class="product-marca">D'Addario</h3>
	                

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-7249-widget-new-grid">
                                            <span class="price">$604.00</span>                                    </span>
                        
        </div>

                                        <button type="button" title="¡Lo Quiero!" class=" button btn-cart " onclick="setLocation('https://www.veerkamponline.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cudmVlcmthbXBvbmxpbmUuY29tLw,,/product/7249/form_key/hrGM0kKucLMueU64/');">¡Lo Quiero!</button>
                    
                 	 
	            </div>
             	        	        	        	            <div class="grid12-3 nuevo">            	
	                <a href="https://www.veerkamponline.com/atril-hercules-para-clarinete-ds440b.html" title="Atril Hercules Para Clarinete DS440B" class="product-image"><img src="images/45ag001.jpg" alt="Atril Hercules Para Clarinete DS440B"></a>
	                <h3 class="product-name"><a href="https://www.veerkamponline.com/atril-hercules-para-clarinete-ds440b.html" title="Atril Hercules Para Clarinete DS440B)">Atril Hercules Para Clarinete DS440B</a></h3>
	                <h3 class="product-marca">Hercules</h3>
	                

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-7270-widget-new-grid">
                                            <span class="price">$528.00</span>                                    </span>
                        
        </div>

                                        <button type="button" title="¡Lo Quiero!" class=" button btn-cart " onclick="setLocation('https://www.veerkamponline.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cudmVlcmthbXBvbmxpbmUuY29tLw,,/product/7270/form_key/hrGM0kKucLMueU64/');">¡Lo Quiero!</button>
                    
                 	 
	            </div>
             	        	        	        	            <div class="grid12-3 nuevo">            	
	                <a href="https://www.veerkamponline.com/encordadura-d-addario-para-guitarra-electrica-de-7-cuerdas-niquel-010-059-exl1107.html" title="Encordadura D'Addario Para Guitarra Eléctrica De 7 Cuerdas Níquel .010 - .059 EXL1107" class="product-image"><img src="images/21ag002.jpg" alt="Encordadura D'Addario Para Guitarra Eléctrica De 7 Cuerdas Níquel .010 - .059 EXL1107"></a>
	                <h3 class="product-name"><a href="https://www.veerkamponline.com/encordadura-d-addario-para-guitarra-electrica-de-7-cuerdas-niquel-010-059-exl1107.html" title="Encordadura D'Addario Para Guitarra Eléctrica De 7 Cuerdas Níquel .010 - .059 EXL1107)">Encordadura D'Addario Para Guitarra Eléctrica De 7 Cuerdas Níquel .010 - .059 EXL1107</a></h3>
	                <h3 class="product-marca">D'Addario</h3>
	                

                        
    <div class="price-box">
                                                                <span class="regular-price" id="product-price-7223-widget-new-grid">
                                            <span class="price">$214.00</span>                                    </span>
                        
        </div>

                                        <button type="button" title="¡Lo Quiero!" class=" button btn-cart " onclick="setLocation('https://www.veerkamponline.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cudmVlcmthbXBvbmxpbmUuY29tLw,,/product/7223/form_key/hrGM0kKucLMueU64/');">¡Lo Quiero!</button>
                    
                 	 
	            </div>
             	        	    </div>
    </div>
</div>
<script>
	//<![CDATA[
    jQuery(function($) {
    	if($(window).width() < 767){
	        var owl = $('#newSlider');
	        owl.owlCarousel({
	            lazyLoad: true,
				itemsCustom: [ [0, 1], [320, 2], [480, 2], [768, 4], [960, 4], [1280, 4] ],
				responsiveRefreshRate: 50,
				slideSpeed: 200,
				paginationSpeed: 500,
				scrollPerPage: true,
				autoPlay: 5000,
				stopOnHover: true,
				rewindNav: true,
				rewindSpeed: 600,
				pagination: false,		
				navigation: false,
				navigationText: false
	        }); //end: owl
        }
    });
//]]>
</script><p></p>
<div class="grid-container marcas">&nbsp;
<h3 class="section-title padding-right"></h3>
<div class="itemslider-wrapper brand-slider-wrapper slider-arrows1 slider-arrows1-pos-top-right slider-pagination1 slider-pagination1-centered">
	<div id="itemslider-brands-b135c28330e7769dc153f4e8d7e65a15" class="itemslider itemslider-responsive brand-slider owl-carousel owl-theme" style="opacity: 1; display: block;">
										
			<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 18078px; left: 0px; display: block; transition: all 500ms ease 0s; transform: translate3d(-3537px, 0px, 0px);"><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Alfred%20Music" title="Ver más productos Alfred Music"><img class="lazyOwl" alt="Alfred Music" style="display: inline;" src="images/alfred-music.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Amati" title="Ver más productos Amati"><img class="lazyOwl" alt="Amati" style="display: inline;" src="images/amati.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Amatus" title="Ver más productos Amatus"><img class="lazyOwl" alt="Amatus" style="display: inline;" src="images/amatus.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Ancora" title="Ver más productos Ancora"><img class="lazyOwl" alt="Ancora" style="display: inline;" src="images/ancora.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Ariana" title="Ver más productos Ariana"><img class="lazyOwl" alt="Ariana" style="display: inline;" src="images/ariana.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Audix" title="Ver más productos Audix"><img class="lazyOwl" alt="Audix" style="display: inline;" src="images/audix.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Bari" title="Ver más productos Bari"><img class="lazyOwl" alt="Bari" style="display: inline;" src="images/bari.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Blessing" title="Ver más productos Blessing"><img class="lazyOwl" alt="Blessing" style="display: inline;" src="images/blessing.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Caraya" title="Ver más productos Caraya"><img class="lazyOwl" alt="Caraya" style="display: inline;" src="images/caraya.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Cort" title="Ver más productos Cort"><img class="lazyOwl" alt="Cort" style="display: inline;" src="images/cort.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Cpk" title="Ver más productos Cpk"><img class="lazyOwl" alt="Cpk" style="display: inline;" src="images/cpk.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Dixon" title="Ver más productos Dixon"><img class="lazyOwl" alt="Dixon" style="display: inline;" src="images/dixon.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Dunlop" title="Ver más productos Dunlop"><img class="lazyOwl" alt="Dunlop" style="display: inline;" src="images/dunlop.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=El%20Cometa" title="Ver más productos El Cometa"><img class="lazyOwl" alt="El Cometa" style="display: inline;" src="images/el-cometa.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Emo" title="Ver más productos Emo"><img class="lazyOwl" alt="Emo" style="display: inline;" src="images/emo.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Focusrite" title="Ver más productos Focusrite"><img class="lazyOwl" alt="Focusrite" style="display: inline;" src="images/focusrite.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Gibraltar" title="Ver más productos Gibraltar"><img class="lazyOwl" alt="Gibraltar" style="display: inline;" src="images/gibraltar.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Gonbops" title="Ver más productos Gonbops"><img class="lazyOwl" alt="Gonbops" style="display: inline;" src="images/gonbops.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Hal%20Leonard" title="Ver más productos Hal Leonard"><img class="lazyOwl" alt="Hal Leonard" style="display: inline;" src="images/hal-leonard.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Herco" title="Ver más productos Herco"><img class="lazyOwl" alt="Herco" style="display: inline;" src="images/herco.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Hofner" title="Ver más productos Hofner"><img class="lazyOwl" alt="Hofner" style="display: inline;" src="images/hofner.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Hohner" title="Ver más productos Hohner"><img class="lazyOwl" alt="Hohner" style="display: inline;" src="images/hohner.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Ibanez" title="Ver más productos Ibanez"><img class="lazyOwl" alt="Ibanez" style="display: inline;" src="images/ibanez.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Jimmywess" title="Ver más productos Jimmywess"><img class="lazyOwl" alt="Jimmywess" style="display: inline;" src="images/jimmywess.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Jupiter" title="Ver más productos Jupiter"><img class="lazyOwl" alt="Jupiter" style="display: inline;" src="images/jupiter.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=K&amp;M" title="Ver más productos K&amp;M"><img class="lazyOwl" alt="K&amp;M" style="display: inline;" src="images/k-m.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=La%20Bella" title="Ver más productos La Bella"><img class="lazyOwl" alt="La Bella" style="display: inline;" src="images/la-bella.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=La%20Estudiantina" title="Ver más productos La Estudiantina"><img class="lazyOwl" alt="La Estudiantina" style="display: inline;" src="images/la-estudiantina.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=La%20Valenciana" title="Ver más productos La Valenciana"><img class="lazyOwl" alt="La Valenciana" style="display: inline;" src="images/la-valenciana.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Laney" title="Ver más productos Laney"><img class="lazyOwl" alt="Laney" style="display: inline;" src="images/laney.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Lark" title="Ver más productos Lark"><img class="lazyOwl" alt="Lark" style="display: inline;" src="images/lark.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Linko" title="Ver más productos Linko"><img class="lazyOwl" alt="Linko" style="display: inline;" src="images/linko.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=LP" title="Ver más productos LP"><img class="lazyOwl" alt="LP" style="display: inline;" src="images/lp.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Magestic" title="Ver más productos Magestic"><img class="lazyOwl" alt="Magestic" style="display: inline;" src="images/magestic.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Musicman" title="Ver más productos Musicman"><img class="lazyOwl" alt="Musicman" style="display: inline;" src="images/musicman.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Nomad" title="Ver más productos Nomad"><img class="lazyOwl" alt="Nomad" style="display: inline;" src="images/nomad.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Novation" title="Ver más productos Novation"><img class="lazyOwl" alt="Novation" style="display: inline;" src="images/novation.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Orange" title="Ver más productos Orange"><img class="lazyOwl" alt="Orange" style="display: inline;" src="images/orange.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Parrot" title="Ver más productos Parrot"><img class="lazyOwl" alt="Parrot" style="display: inline;" src="images/parrot.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Pirastro" title="Ver más productos Pirastro"><img class="lazyOwl" alt="Pirastro" style="display: inline;" src="images/pirastro.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Pomarico" title="Ver más productos Pomarico"><img class="lazyOwl" alt="Pomarico" style="display: inline;" src="images/pomarico.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Powerbeat" title="Ver más productos Powerbeat"><img class="lazyOwl" alt="Powerbeat" style="display: inline;" src="images/powerbeat.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Prestini" title="Ver más productos Prestini"><img class="lazyOwl" alt="Prestini" style="display: inline;" src="images/prestini.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Promark" title="Ver más productos Promark"><img class="lazyOwl" alt="Promark" style="display: inline;" src="images/promark.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Pyramid" title="Ver más productos Pyramid"><img class="lazyOwl" alt="Pyramid" style="display: inline;" src="images/pyramid.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Quiktune" title="Ver más productos Quiktune"><img class="lazyOwl" alt="Quiktune" style="display: inline;" src="images/quiktune.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Reloop" title="Ver más productos Reloop"><img class="lazyOwl" alt="Reloop" style="display: inline;" src="images/reloop.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Remo" title="Ver más productos Remo"><img class="lazyOwl" alt="Remo" style="display: inline;" src="images/remo.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Sabian" title="Ver más productos Sabian"><img class="lazyOwl" alt="Sabian" style="display: inline;" src="images/sabian.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=San%20Antonio" title="Ver más productos San Antonio"><img class="lazyOwl" alt="San Antonio" style="display: inline;" src="images/san-antonio.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Savarez" title="Ver más productos Savarez"><img class="lazyOwl" alt="Savarez" style="display: inline;" src="images/savarez.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Schilke" title="Ver más productos Schilke"><img class="lazyOwl" alt="Schilke" style="display: inline;" src="images/schilke.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Selmer" title="Ver más productos Selmer"><img class="lazyOwl" alt="Selmer" style="display: inline;" src="images/selmer.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Shadow" title="Ver más productos Shadow"><img class="lazyOwl" alt="Shadow" style="display: inline;" src="images/shadow.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Shimro" title="Ver más productos Shimro"><img class="lazyOwl" alt="Shimro" style="display: inline;" src="images/shimro.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Snark" title="Ver más productos Snark"><img class="lazyOwl" alt="Snark" style="display: inline;" src="images/snark.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Starfire" title="Ver más productos Starfire"><img class="lazyOwl" alt="Starfire" style="display: inline;" src="images/starfire.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Sterling" title="Ver más productos Sterling"><img class="lazyOwl" alt="Sterling" style="display: inline;" src="images/sterling.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Strunal" title="Ver más productos Strunal"><img class="lazyOwl" alt="Strunal" style="display: inline;" src="images/strunal.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Sub" title="Ver más productos Sub"><img class="lazyOwl" alt="Sub" style="display: inline;" src="images/sub.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Supersensitive" title="Ver más productos Supersensitive"><img class="lazyOwl" alt="Supersensitive" style="display: inline;" src="images/supersensitive.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Tama" title="Ver más productos Tama"><img class="lazyOwl" alt="Tama" style="display: inline;" src="images/tama.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Teller" title="Ver más productos Teller"><img class="lazyOwl" alt="Teller" style="display: inline;" src="images/teller.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Thomastik" title="Ver más productos Thomastik"><img class="lazyOwl" alt="Thomastik" style="display: inline;" src="images/thomastik.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Toca" title="Ver más productos Toca"><img class="lazyOwl" alt="Toca" style="display: inline;" src="images/toca.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Vandoren" title="Ver más productos Vandoren"><img class="lazyOwl" alt="Vandoren" style="display: inline;" src="images/vandoren.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Victor" title="Ver más productos Victor"><img class="lazyOwl" alt="Victor" style="display: inline;" src="images/victor.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Wittner" title="Ver más productos Wittner"><img class="lazyOwl" alt="Wittner" style="display: inline;" src="images/wittner.jpg"></a>
							</div></div><div class="owl-item" style="width: 131px;"><div class="item">
									<a class="fade-on-hover" href="https://www.veerkamponline.com/catalogsearch/result/?q=Wolf" title="Ver más productos Wolf"><img class="lazyOwl" alt="Wolf" style="display: inline;" src="images/wolf.jpg"></a>
							</div></div></div></div>

	

				<div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div> <!-- end: itemslider -->
</div> <!-- end: itemslider-wrapper -->
<script type="text/javascript">
//<![CDATA[
	jQuery(function($) {

		var owl = $('#itemslider-brands-b135c28330e7769dc153f4e8d7e65a15');
		owl.owlCarousel({

					lazyLoad: true,
		
					itemsCustom: [ [0, 1], [320, 2], [480, 2], [768, 4], [960, 6], [1280, 9] ],
			responsiveRefreshRate: 50,
		
					slideSpeed: 200,
		
					paginationSpeed: 500,
		
					scrollPerPage: true,
		
					autoPlay: 5000,
		
					stopOnHover: true,
		
					rewindNav: true,
			rewindSpeed: 600,
		
					pagination: false,
		
			navigation: true,
			navigationText: false

		}); //end: owl

	});
//]]>
</script>
</div></div>                 </div>
                    <div class="postscript"></div>
                </div>
            </div>
            <div class="main-bottom-container"></div>
        </div>


@stop