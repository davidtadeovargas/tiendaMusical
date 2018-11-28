@extends('layouts.headerFooter')
@section('content')

<div class="main-container col1-layout">
    <div class="main-top-container"></div>
    <div class="main container">
        <div class="inner-container">
            <div class="preface"></div>
            <div class="col-main">

            	@if (count($cart))
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
		                        						<a href="{{route('cart-trash')}}" class="grid12-4 button btn-empty" style="width: 200px;height: 40px">
		                        							<span>
		                        								<span>Limpiar Carro</span>
		                        							</span>
		                        						</a>

											            <a href="#" class="grid12-4 button btn-update btn-inline" style="width: 200px;height: 40px" id="update">
											            	<span>
											            		<span>Actualizar Carrito</span>
											            	</span>
											            </a>

											            <a href="{{$dominio}}/index.php" class="grid12-4 button btn-update btn-inline" style="width: 200px;height: 40px">
											            	<span>
											            		<span>Seguir comprando</span>
											            	</span>
											            </a>
													</td>
		                    					</tr>
		                					</tfoot>

		                					<tbody>
		                						@foreach($cart as $item)
		                		                <tr class="first last odd">
    												<td>
    													<a href="" title="{{$item->descripcion}}" class="product-image">
    														<img src="{{$dominio}}/images/productos/{{$item->articulo}}.jpg" alt="{{$item->descripcion}}">
    													</a>
    												</td>
    												<td>
            											<h2 class="product-name">
                    										<a href="">{{$item->descripcion}}</a>
                										</h2>
                                                    </td>
    
													<td class="a-center pad">        
												        <span class="cell-label">Cantidad</span>

												    	<input type="button" value="-" class="qtyminus" field="{{$item->articulo}}">

												        <input name="cart[{{$item->articulo}}][qty]" fieldname="{{$item->articulo}}" id="{{$item->articulo}}" value="{{$item->quantity}}" size="4" title="Cantidad" class="input-text qty" maxlength="12"  disabled>

												       	<input type="button" value="+" class="qtyplus" field="{{$item->articulo}}">
												    </td>

									                <td class="col-unit-price">
									            		<span class="cell-label">Precio Unitario</span>
									        			<span class="cart-price">
									          				<span class="price">
									          					${{ number_format($item->precio_u, 2)}}</span>
									          			</span>
									                </td>
                
    									            <td class="col-total">
	    												<span class="cell-label">Sub-total</span>
    													<span class="cart-price">
	        												<span class="price">
	        													${{ number_format($item->precio_u * $item->quantity,2)}}
	        												</span>
	        											</span>
													</td>
        											
        											<td class="col-delete a-center last">
        												<a href="{{route('cart-delete', $item->articulo)}}" title="Eliminar Artí­culo" class="btn-remove btn-remove2">Eliminar Artículo</a>
        											</td>
												</tr>
												@endforeach
		                		            </tbody>

		            					</table>

    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#update').click(function(){
    			console.log("hola");
    		});
    	});
    </script>
 
	<script type="text/javascript">
		decorateTable('shopping-cart-table')
	</script>
		        
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
        						<span class="price">${{number_format($total,2)}}</span>
        					</strong>
    					</td>
					</tr>
        		</tfoot>
        		<!--<tbody>
            		<tr>
    					<td style="" class="a-right" colspan="1">Subtotal</td>
    					<td style="" class="a-right">
        					<span class="price">$265.00</span>
        				</td>
					</tr>
        		</tbody>-->
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


@else

	<div class="page-title">
    	<h1>El Carrito de compra está vacío</h1>
	</div>
	<div class="cart-empty">
        <p>No tiene artículos en su carrito de compras. </p>
    	<p>Click 
    		<a href="">aqui</a> para seguir comprando.
    	</p>
    </div>

@endif

                    </div>
                    <div class="postscript"></div>
                </div>
            </div>
            <div class="main-bottom-container"></div>
        </div>
@stop