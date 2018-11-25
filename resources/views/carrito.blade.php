@extends('layouts.headerFooter')
@section('content')

<div class="main-container col1-layout">
    <div class="main-top-container"></div>
    <div class="main container">
        <div class="inner-container">
            <div class="preface"></div>
            <div class="col-main">
                <div class="cart">
    				<div class="page-title title-buttons">
        				<h1>Carrito de compra</h1>
            		</div>
            		<div class="grid-container">
    					<div class="grid12-8">
		    				<form action="https://www.veerkamponline.com/checkout/cart/updatePost/" method="post" class="the-cart-form">
		        				<input name="form_key" type="hidden" value="iSFimJdpLZirdhtV">
		        				<fieldset>
		        					<div class="cart-table-wrapper">
		            					<table id="shopping-cart-table" class="data-table cart-table">
		                					<colgroup>
		                						<col class="col-img" width="1">
		                						<col>
		                						<col class="col-edit" width="1">
		            		            		<col class="col-unit-price" width="1">
		            		                	<col width="1">
		            		            		<col class="col-total" width="1">
		            		                	<col class="col-delete" width="1">
											</colgroup>
											<thead>
							                    <tr class="first last">
							                        <th class="col-img" rowspan="1">Imagen</th>
							                        <th rowspan="1">
							                        	<span class="nobr">Productos</span>
							                        </th>
							                        <th rowspan="1" class="a-center">Cantidad</th>
							                        <th class="col-unit-price a-center" colspan="1">
							                        	<span class="nobr">Precio</span>
							                        </th>		                        
							                        <th class="a-center" colspan="1">Subtotal</th>
							                        <th class="col-delete a-center" rowspan="1">&nbsp;</th>
							                    </tr>
		                    		        </thead>
		                					<tfoot>
		                    					<tr class="first last">
		                        					<td colspan="50" class="aright last">
		                        						<button type="submit" name="update_cart_action" value="empty_cart" title="Vaciar el Carrito" class=" grid12-4 button btn-empty" id="empty_cart_button">
		                        							<span>
		                        								<span>Limpiar Carro </span>
		                        							</span>
		                        							<!--<i aria-hidden="true" class="fa fa-angle-right"></i>-->
		                        						</button>		                                                     
											            <button type="submit" name="update_cart_action" value="update_qty" title="Update Cart" class="grid12-4 button btn-update btn-inline">
											            	<span>
											            		<span>Actualizar Carrito</span>
											            	</span>
											            </button>

											            <button type="submit" name="update_cart_action" value="update_qty" title="Update Cart" class="grid12-4 button btn-update btn-inline">
											            	<span>
											            		<span>Seguir comprando</span>
											            	</span>
											            </button>
													</td>
		                    					</tr>
		                					</tfoot>
		                					<tbody>
		                		                <tr class="first last odd">
    												<td>
    													<a href="https://www.veerkamponline.com/soporte-on-stage-para-guitarra-gs7640.html" title="Soporte On-Stage Para Guitarra GS7640" class="product-image">
    														<img src="images/productos/85ac028.jpg" alt="Soporte On-Stage Para Guitarra GS7640">
    													</a>
    												</td>
    												<td>
            											<h2 class="product-name">
                    										<a href="https://www.veerkamponline.com/soporte-on-stage-para-guitarra-gs7640.html">Soporte On-Stage Para Guitarra GS7640</a>
                										</h2>
                                                    </td>
    
													<td class="a-center pad">        
												        <span class="cell-label">Cantidad</span>
												    	<input type="button" value="-" class="qtyminus" field="qty-58130">

												        <input name="cart[58130][qty]" fieldname="qty-58130" data-cart-item-id="85AC028" value="1" size="4" title="Cantidad" class="input-text qty" maxlength="12"  disabled>

												       	<input type="button" value="+" class="qtyplus" field="qty-58130">
												    </td>

									                <td class="col-unit-price">
									            		<span class="cell-label">Precio Unitario</span>
									        			<span class="cart-price">
									          				<span class="price">$265.00</span>
									          			</span>
									                </td>
                
    									            <td class="col-total">
	    												<span class="cell-label">Sub-total</span>
    													<span class="cart-price">
	        												<span class="price">$265.00</span>
	        											</span>
													</td>
        											
        											<td class="col-delete a-center last">
        												<a href="https://www.veerkamponline.com/checkout/cart/delete/id/58130/form_key/iSFimJdpLZirdhtV/uenc/aHR0cHM6Ly93d3cudmVlcmthbXBvbmxpbmUuY29tL2NoZWNrb3V0L2NhcnQv/" title="Eliminar Artí­culo" class="btn-remove btn-remove2">Eliminar Artí­culo</a>
        											</td>
												</tr>
		                		            </tbody>
		            					</table>
 
	<script type="text/javascript">decorateTable('shopping-cart-table')</script>
		        
		        </div>
		    </fieldset>
		</form>
		<div class="grid-full alpha omega">
    
    <script type="text/javascript">
	
	jQuery(function($) {
		var owl = $('#crosssell-products-list');
		owl.owlCarousel({
			lazyLoad : true,
			itemsCustom : [[0, 1], [320, 1], [480, 4], [960, 6], [1280, 6]],
			responsiveRefreshRate : 50,
			slideSpeed : 200,
			paginationSpeed : 500,
			scrollPerPage : true,
			stopOnHover : true,
			rewindNav : true,
			rewindSpeed : 600,
			pagination : false,
			navigation : false, 
			navigationText : false
		});
		//end: owl
	});
	
</script>            
</div>
</div>
	    <div class="grid12-4">
	    	<div class="grid12-12">
				<div class="grid12-12 cupon mobile-grid-half">
	            	<form id="discount-coupon-form" action="https://www.veerkamponline.com/checkout/cart/couponPost/" method="post">
	    				<div class="discount">
	        				<h2>Cupón de Descuento</h2>
	        				<div class="discount-form">
	            				<input type="hidden" name="remove" id="remove-coupone" value="0">
					            <div class="input-box">
					                <input class="input-text" id="coupon_code" name="coupon_code">
					            </div>
	            				<div class="buttons-set">
		                			<button type="button" title="Aplicar" class="button" onclick="discountForm.submit(false)" value="Aplicar">
		                				<span>
		                					<span>Aplicar</span>
		                				</span>
		                			</button>
	                            </div>
	        				</div>
	    				</div>
					</form>
<script type="text/javascript">

var discountForm = new VarienForm('discount-coupon-form');
discountForm.submit = function (isRemove) {
    if (isRemove) {
        $('coupon_code').removeClassName('required-entry');
        $('remove-coupone').value = "1";
    } else {
        $('coupon_code').addClassName('required-entry');
        $('remove-coupone').value = "0";
    }
    return VarienForm.prototype.submit.bind(discountForm)();
}

</script>
</div>		
		    	 <!-- end: cart-right-column -->
<div class="grid12-12 envio">
	<div class="grid12-12 mobile-grid-half"></div>		            
</div>
<div class="grid12-12 totales">
	<div class="totals grid-full alpha omega">
		<div class="totals-inner">
		    <table id="shopping-cart-totals-table">
        		<colgroup>
        			<col>
        			<col width="1">
        		</colgroup>
        		<tfoot>
            		<tr>
    					<td style="" class="a-right" colspan="1">
        					<strong>Total</strong>
    					</td>
    					<td style="" class="a-right">
        					<strong>
        						<span class="price">$265.00</span>
        					</strong>
    					</td>
					</tr>
        		</tfoot>
        		<tbody>
            		<tr>
    					<td style="" class="a-right" colspan="1">Subtotal</td>
    					<td style="" class="a-right">
        					<span class="price">$265.00</span>
        				</td>
					</tr>
        		</tbody>
    		</table>
		    <ul class="checkout-types">
		    	<li>
		    		<button type="button" title="Comprar" class="button btn-proceed-checkout btn-checkout" onclick="window.location='https://www.veerkamponline.com/onepage/';">
		    			<span>
		    				<span>Comprar</span>
		    			</span>
		    		</button>
				</li>
			</ul>
		</div>
	</div>				
</div>
		    </div>
	   	</div>
    </div>
</div>
                    </div>
                    <div class="postscript"></div>
                </div>
            </div>
            <div class="main-bottom-container"></div>
        </div>
@stop