@extends('layouts.app')
@section('content')

 <div class="main-container col1-layout">
            <div class="main-top-container"></div>
            <div class="main container">
                <div class="inner-container">
                    <div class="preface"></div>
                        <div class="col-main">
<script type="text/javascript">countryRegions = {"config":{"show_all_regions":true,"regions_required":["MX"]},"MX":{"485":{"code":"AGS","name":"Aguascalientes"},"486":{"code":"BCN","name":"Baja California Norte"},"487":{"code":"BCS","name":"Baja California Sur"},"488":{"code":"CAM","name":"Campeche"},"489":{"code":"CHIS","name":"Chiapas"},"490":{"code":"CHIH","name":"Chihuahua"},"493":{"code":"DF","name":"Ciudad de M\u00e9xico"},"491":{"code":"COAH","name":"Coahuila"},"492":{"code":"COL","name":"Colima"},"494":{"code":"DGO","name":"Durango"},"495":{"code":"GTO","name":"Guanajuato"},"496":{"code":"GRO","name":"Guerrero"},"497":{"code":"HGO","name":"Hidalgo"},"498":{"code":"JAL","name":"Jalisco"},"501":{"code":"MEX","name":"Mexico (Estado de)"},"499":{"code":"MICH","name":"Michoacan"},"500":{"code":"MOR","name":"Morelos"},"502":{"code":"NAY","name":"Nayarit"},"503":{"code":"NL","name":"Nuevo Leon"},"504":{"code":"OAX","name":"Oaxaca"},"505":{"code":"PUE","name":"Puebla"},"506":{"code":"QRO","name":"Queretaro"},"507":{"code":"QROO","name":"Quintana Roo"},"508":{"code":"SLP","name":"San Luis Potosi"},"509":{"code":"SIN","name":"Sinaloa"},"510":{"code":"SON","name":"Sonora"},"511":{"code":"TAB","name":"Tabasco"},"512":{"code":"TAMPS","name":"Tamaulipas"},"513":{"code":"TLAX","name":"Tlaxcala"},"514":{"code":"VER","name":"Veracruz"},"515":{"code":"YUC","name":"Yucatan"},"516":{"code":"ZAC","name":"Zacatecas"}}}
</script>


<div id="customcheck" class="opc-wrapper-opc design_package_ultimo design_theme_default">
    <h2>Finalizar Compra</h2>
		<div class="right mensaje">
			<p>
                <span style="font-size: x-small;">Te proporcionaremos 
                    <strong>asistencia o ventas</strong> por teléfono 
                    <strong><br>(55) 5709-3716</strong>
                </span>
            </p>			
            <a class="bottom" href="{{route('cart-show')}}">Regresar al Carrito</a>
	   </div>
	   <div class="clear"></div>
	   <!--<div class="grid12-12">
	       <ul class="messages">
                <li class="success-msg">
                    <ul>
                        <li>
                            <span>Gracias por registrarte con.</span>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>-->
<div>

    <div class="opc-col-left">
    	<div class="steps">
			<div class="item grid12-12">
				<span class="circle one active">1</span>
				<div class="msj">Tus Datos</div>
			</div>
		</div>





		
        <form id="opc-address-form-billing" method="post">
        	<div id="co-billing-form">
                <ul class="form-list">
                    <li id="billing-new-address-form">
                        <fieldset>
                            <input type="hidden" name="billing[address_id]" value="102055" id="billing:address_id">
                            <ul>
                                <li class="fields">
                                    <div class="customer-name">
                                        <div class="field name-firstname">
                                            <label for="billing:firstname" class="required"><em>*</em>Nombre</label>
                                            <div class="input-box">
                                                <input type="text" id="billing:firstname" name="name" value="{{Auth::user()->name}}" title="Nombre" maxlength="255" class="input-text required-entry validation-passed">
                                            </div>
                                        </div>
                                        <div class="field name-lastname">
                                            <label for="billing:lastname" class="required">
                                                <em>*</em>Apellidos
                                            </label>
                                            <div class="input-box">
                                                <input type="text" id="billing:lastname" name="lastname" value="{{Auth::user()->lastname}}" title="Apellidos" maxlength="255" class="input-text required-entry validation-passed">
                                            </div>
                                        </div>
                                    </div>
                                </li>
        	                    <li class="fields">
                    <div class="field">
                        <label for="billing:telephone" class="required"><em>*</em>Celular o Teléfono</label>
                        <div class="input-box">
                            <input type="text" name="billing[telephone]" value="" title="Teléfono" class="input-text  required-entry validation-passed" id="billing:telephone">
                        </div>
                    </div>                  
                </li>
                        <li class="wide">
                	<div class="">
	                    <label for="billing:street1" class="required"><em>*</em>Calle</label>
	                    <div class="input-box">
	                        <input type="text" title="Calle y Número" name="billing[street][]" id="billing:street1" value="" class="input-text  required-entry validation-passed">
	                    </div>
                    </div>
                 </li>
                		<li class="fields">
        	                    
                    <div class="field">
                    	<label for="billing[street][]" class="required ">N° Exterior  </label>
                        <input type="text" title="Street Address 2" name="billing[street][]" id="billing:street2" value="" class="input-text required-entry validation-passed">
                    </div>
        	                    
                    <div class="field">
                    	<label for="billing[street][]" class=" "> N° Interior </label>
                        <input type="text" title="Street Address 3" name="billing[street][]" id="billing:street3" value="" class="input-text validation-passed">
                    </div>
        	                    
                    <div class="field">
                    	<label for="billing[street][]" class=" required">  Colonia</label>
                        <input type="text" title="Street Address 4" name="billing[street][]" id="billing:street4" value="" class="input-text  required-entry validation-passed">
                    </div>
        	            	</li>
                <li class="fields">
                    <div class="field">
                        <label for="billing:region_id" class="required"><em>*</em>Estado</label>
                        <div class="input-box">
                            <select id="billing:region_id" name="billing[region_id]" title="State / Province" class="validate-select required-entry validation-passed" style="" defaultvalue="" required="">
                                <option value="">Por favor seleccione la región, estado o provincia</option>
                            <option value="485">Aguascalientes</option><option value="486">Baja California Norte</option><option value="487">Baja California Sur</option><option value="488">Campeche</option><option value="489">Chiapas</option><option value="490">Chihuahua</option><option value="493">Ciudad de México</option><option value="491">Coahuila</option><option value="492">Colima</option><option value="494">Durango</option><option value="495">Guanajuato</option><option value="496">Guerrero</option><option value="497">Hidalgo</option><option value="498">Jalisco</option><option value="501">Mexico (Estado de)</option><option value="499">Michoacan</option><option value="500">Morelos</option><option value="502">Nayarit</option><option value="503">Nuevo Leon</option><option value="504">Oaxaca</option><option value="505">Puebla</option><option value="506">Queretaro</option><option value="507">Quintana Roo</option><option value="508">San Luis Potosi</option><option value="509">Sinaloa</option><option value="510">Sonora</option><option value="511">Tabasco</option><option value="512">Tamaulipas</option><option value="513">Tlaxcala</option><option value="514">Veracruz</option><option value="515">Yucatan</option><option value="516">Zacatecas</option></select>
                            <script type="text/javascript">
                            //<![CDATA[
                                $('billing:region_id').setAttribute('defaultValue',  "");
                            //]]>
                            </script>
                            <input type="text" id="billing:region" name="billing[region]" title="State / Province" class="input-text required-entry validation-passed" style="display:none;">
                        </div>
                    </div>
                    <div class="field">
                        <label for="billing:postcode" class=""><em style="display: none;">*</em>C.P.</label>
                        <div class="input-box">
                            <input type="text" title="Zip" name="billing[postcode]" id="billing:postcode" value="" class="input-text required-entry validate-zip-international  required-entry validation-passed">
                        </div>
                    </div>
                </li>
                <li class="fields">                    
                    <div class="field">
                        <label for="billing:city" class="required"><em>*</em>Delegación/Municipio</label>
                        <div class="input-box">
                            <input type="text" title="Ciudad" name="billing[city]" value="" class="input-text  required-entry validation-passed" id="billing:city">
                        </div>
                    </div>
                    <div class="field">
                        <label for="billing:country_id" class="required"><em>*</em>País</label>
                        <div class="input-box">
                            <select name="billing[country_id]" id="billing:country_id" class="validate-select validation-passed" title="Paí­s">
                                <option value=""> </option>
                                <option value="MX" selected="selected">México</option>
                            </select>  
                        </div>
                    </div>
                </li>
                
                
                <!--<div style="display:none !important">
					<input type="text" autocomplete="off">
					<input type="password" autocomplete="off" value="">
				</div>-->
			    
			    
            	<li class="wide">
                	<!--<div class="field requiere">
                		<input type="checkbox" class="req validation-passed" divname="div-rfc">
                        <span>Requieres Factura</span>
                	</div>-->
                	<script>
                		jQuery(function($) {
                			$('#billing-address-select option[value=""]').attr('selected','selected');
                			$('.requiere input.req').on('click', function(e) {
            					var divShow = $(this).attr('divname');            				
            					$('.'+divShow).toggle('slow');	
            					$('.'+divShow+' input.input-text').toggleClass('required-entry');	
            					$("input[noval='noint']").removeClass('required-entry');					
            				});
                		});
                	</script>
                	<div class="field div-rfc" style="display: none; width: 100%;">
	                    <label for="billing:razon_social">Razón Social</label> 
	                    <div class="input-box">
	                        <input type="text" id="billing:vat_id" name="billing[razon_social]" title="Razón Social" class="input-text validation-passed">
	                    </div>
	                    <label for="billing:vat_id">RFC</label>
	                    <div class="input-box">
	                        <input type="text" id="billing:vat_id" name="billing[vat_id]" title="RFC" class="input-text validation-passed">
	                    </div>
	                    <label for="billing:email_rfc">Correo electrónico</label>
	                    <div class="input-box">
	                        <input type="text" id="billing:vat_id" name="billing[email_rfc]" title="Correo electrónico" class="input-text validation-passed">
	                    </div>
	                    <br>	                    
	                    <h5 style="font-weight: 700;">Dirección de facturación</h5>
	                    <div class="grid12-12 direccion-fact">
	                    	<div class="grid12-12">
		                    	<label for="billing:calle_fact">Dirección</label>
			                    <div class="input-box">
			                        <input type="text" id="billing:calle_fact" name="billing[calle_fact]" title="Dirección" class="input-text validation-passed">
			                    </div>
	                    	</div>
	                    	<div class="grid12-6">
		                    	<label for="billing:numero_ext">N° Exterior</label>
			                    <div class="input-box">
			                        <input type="text" id="billing:numero_ext" name="billing[numero_ext]" title="N° Exterior" class="input-text validation-passed">
			                    </div>
	                    	</div>
	                    	<div class="grid12-6">
		                    	<label for="billing:num_int">N° Interior</label>
			                    <div class="input-box">
			                        <input type="text" noval="noint" id="billing:num_int" name="billing[num_int]" title="N° Interior" class="input-text validation-passed">
			                    </div>
	                    	</div>
	                    	<div class="grid12-6">
		                    	<label for="billing:estado_fact">Estado</label>
			                    <div class="input-box">
			                        <input type="text" id="billing:estado_fact" name="billing[estado_fact]" title="Estado" class="input-text validation-passed">
			                    </div>
	                    	</div>
	                    	<div class="grid12-6">
		                    	<label for="billing:cp_fact">C.P.</label>
			                    <div class="input-box">
			                        <input type="text" id="billing:cp_fact" name="billing[cp_fact]" title="C.P." class="input-text validation-passed">
			                    </div>
	                    	</div>
	                    	<div class="grid12-6">
		                    	<label for="billing:municipio_fact">Delegación/Municipio</label>
			                    <div class="input-box">
			                        <input type="text" id="billing:municipio_fact" name="billing[municipio_fact]" title="Delegación/Municipio" class="input-text validation-passed">
			                    </div>
	                    	</div>
	                    	<div class="grid12-6">
		                    	<label for="billing:pais">País</label>
			                    <div class="input-box">
			                        <input type="text" id="billing:pais" style="pointer-events: none; tab-index: -1;" name="billing[pais]" value="México" class="input-text validation-passed">
			                    </div>
	                    	</div>
	                    </div>	                   
                    </div>
                </li>
                <li class="no-display">
                    <input type="hidden" name="billing[save_in_address_book]" value="1">
                </li>
           </ul>
        </fieldset>
    </li>
        
    <!-- fix browser autocomplete -->
	
    <li class="control hidden">
        <input type="checkbox" name="billing[use_for_shipping]" id="billing:use_for_shipping_yes" value="1" checked="checked" title="Enviar a esta dirección" class="checkbox validation-passed">
        <label for="billing:use_for_shipping_yes">Enviar a esta dirección</label>
    </li>
    
	<!-- Warning Veerkamp-->
	<!--<li class="control">
	   <input type="checkbox" name="terminos_condiciones_veerkamp" value="1" title="terminos_condiciones_veerkamp" id="terminos_condiciones_veerkamp" class="checkbox required-entry validation-passed" checked="checked">
		<label for="terminos_condiciones_veerkamp" class="required">
            <strong>He leído y acepto el 
                <a href="https://www.veerkamponline.com/aviso-privacidad/" style="text-decoration: underline;" target="_blank">aviso de privacidad</a> de VEERKAMP MESONES, S.A de C.V.
            </strong>
        </label>
		<div class="validation-advice" id="advice-required-entry-terminos_condiciones_veerkamp" style="opacity: 0; display: none;">Este es un campo obligatorio.</div>
	</li>-->
	<li>&nbsp;</li>
</ul>
    
</div>
<script type="text/javascript">
    var billingRegionUpdater = new RegionUpdater('billing:country_id', 'billing:region', 'billing:region_id', {"config":{"show_all_regions":true,"regions_required":["MX"]},"MX":{"485":{"code":"AGS","name":"Aguascalientes"},"486":{"code":"BCN","name":"Baja California Norte"},"487":{"code":"BCS","name":"Baja California Sur"},"488":{"code":"CAM","name":"Campeche"},"489":{"code":"CHIS","name":"Chiapas"},"490":{"code":"CHIH","name":"Chihuahua"},"493":{"code":"DF","name":"Ciudad de M\u00e9xico"},"491":{"code":"COAH","name":"Coahuila"},"492":{"code":"COL","name":"Colima"},"494":{"code":"DGO","name":"Durango"},"495":{"code":"GTO","name":"Guanajuato"},"496":{"code":"GRO","name":"Guerrero"},"497":{"code":"HGO","name":"Hidalgo"},"498":{"code":"JAL","name":"Jalisco"},"501":{"code":"MEX","name":"Mexico (Estado de)"},"499":{"code":"MICH","name":"Michoacan"},"500":{"code":"MOR","name":"Morelos"},"502":{"code":"NAY","name":"Nayarit"},"503":{"code":"NL","name":"Nuevo Leon"},"504":{"code":"OAX","name":"Oaxaca"},"505":{"code":"PUE","name":"Puebla"},"506":{"code":"QRO","name":"Queretaro"},"507":{"code":"QROO","name":"Quintana Roo"},"508":{"code":"SLP","name":"San Luis Potosi"},"509":{"code":"SIN","name":"Sinaloa"},"510":{"code":"SON","name":"Sonora"},"511":{"code":"TAB","name":"Tabasco"},"512":{"code":"TAMPS","name":"Tamaulipas"},"513":{"code":"TLAX","name":"Tlaxcala"},"514":{"code":"VER","name":"Veracruz"},"515":{"code":"YUC","name":"Yucatan"},"516":{"code":"ZAC","name":"Zacatecas"}}}, undefined, 'billing:postcode');
</script>
</form><!--primer form-->








        	
       <!-- <form id="opc-address-form-shipping" class="hidden" method="post">
        <div>	
    <ul class="form-list">
            <li id="shipping-new-address-form">
            <fieldset>
                <input type="hidden" name="shipping[address_id]" value="102056" id="shipping:address_id">
                <ul>
                    <li class="fields"><div class="customer-name">
    <div class="field name-firstname">
        <label for="shipping:firstname" class="required"><em>*</em>Nombre</label>
        <div class="input-box">
            <input type="text" id="shipping:firstname" name="shipping[firstname]" title="Nombre" maxlength="255" class="input-text required-entry">
        </div>
    </div>
    <div class="field name-lastname">
        <label for="shipping:lastname" class="required"><em>*</em>Apellidos</label>
        <div class="input-box">
            <input type="text" id="shipping:lastname" name="shipping[lastname]" title="Apellido" maxlength="255" class="input-text required-entry">
        </div>
    </div>
</div>
</li>                    
                                 <li class="fields">
                        <div class="field">
                            <label for="shipping:telephone" class="required"><em>*</em>Celular o Teléfono</label>
                            <div class="input-box">
                                <input type="text" name="shipping[telephone]" title="Teléfono" class="input-text  required-entry" id="shipping:telephone">
                            </div>
                        </div>                        
                    </li>
                    <li class="wide">
                        <label for="shipping:street1" class="required"><em>*</em>Dirección</label>
                        <div class="input-box">
                            <input type="text" title="Calle y Número" name="shipping[street][]" id="shipping:street1" class="input-text  required-entry">
                        </div>
                    </li>
                                <li class="fields">
                                    <div class="field">
                    		<label for="shipping[street][]" class="">N° Exterior</label>
                            <input type="text" title="Street Address 2" name="shipping[street][]" id="shipping:street2" class="input-text ">
                        </div>
                                    <div class="field">
                    		<label for="shipping[street][]" class="">N° Interior</label>
                            <input type="text" title="Street Address 3" name="shipping[street][]" id="shipping:street3" class="input-text ">
                        </div>
                                    <div class="field">
                    		<label for="shipping[street][]" class="">N° Interior</label>
                            <input type="text" title="Street Address 4" name="shipping[street][]" id="shipping:street4" class="input-text ">
                        </div>
                                </li>                   
                    <li class="fields">                        
                        <div class="field">
                            <label for="shipping:region" class="required"><em>*</em>Estado</label>
                            <div class="input-box">
                                <select id="shipping:region_id" name="shipping[region_id]" title="State / Province" class="validate-select required-entry" style="" defaultvalue="" required="">
                                    <option value="" selected="selected">Por favor seleccione la región, estado o provincia</option>
                                <option value="485">Aguascalientes</option><option value="486">Baja California Norte</option><option value="487">Baja California Sur</option><option value="488">Campeche</option><option value="489">Chiapas</option><option value="490">Chihuahua</option><option value="493">Ciudad de México</option><option value="491">Coahuila</option><option value="492">Colima</option><option value="494">Durango</option><option value="495">Guanajuato</option><option value="496">Guerrero</option><option value="497">Hidalgo</option><option value="498">Jalisco</option><option value="501">Mexico (Estado de)</option><option value="499">Michoacan</option><option value="500">Morelos</option><option value="502">Nayarit</option><option value="503">Nuevo Leon</option><option value="504">Oaxaca</option><option value="505">Puebla</option><option value="506">Queretaro</option><option value="507">Quintana Roo</option><option value="508">San Luis Potosi</option><option value="509">Sinaloa</option><option value="510">Sonora</option><option value="511">Tabasco</option><option value="512">Tamaulipas</option><option value="513">Tlaxcala</option><option value="514">Veracruz</option><option value="515">Yucatan</option><option value="516">Zacatecas</option></select>
                                <script type="text/javascript">
                               
                                    $('shipping:region_id').setAttribute('defaultValue',  "");
                                
                                </script>
                                <input type="text" id="shipping:region" name="shipping[region]" title="State / Province" class="input-text required-entry" style="display:none;">
                            </div>
                        </div>
                        <div class="field">
                            <label for="shipping:postcode" class=""><em style="display: none;">*</em>C.P.</label>
                            <div class="input-box">
                                <input type="text" title="Zip" name="shipping[postcode]" id="shipping:postcode" class="input-text validate-zip-international  required-entry">
                            </div>
                        </div>
                    </li>
                    <li class="fields">
                        <div class="field">
                            <label for="shipping:city" class="required"><em>*</em>Delegación/Municipio</label>
                            <div class="input-box">
                                <input type="text" title="Ciudad" name="shipping[city]" class="input-text  required-entry" id="shipping:city">
                            </div>
                        </div>
                        <div class="field">
                            <label for="shipping:country_id" class="required"><em>*</em>País</label>
                            <div class="input-box">
                                <select name="shipping[country_id]" id="shipping:country_id" class="validate-select" title="Paí­s"><option value=""> </option><option value="MX" selected="selected">México</option></select>                            </div>
                        </div>
                    </li>                   
                    <li class="wide">
	                	<div class="field requiere">
	                		<input type="checkbox" class="req2" divname="div-rfc2"><span>Requieres Factura</span>
	                	</div>
	                	<script>
	                		jQuery(function($) {
	                			$('.requiere input.req2').on('click', function(e) {
	            					var divShow = $(this).attr('divname');
	            					$('.'+divShow).toggle('slow');								
	            				});
	                		});
	                	</script>
	                	<div class="field div-rfc" style="display: none">
	                    <label for="billing:vat_id">Razón Social</label> 
	                    <div class="input-box">
	                        <input type="text" id="shipping:vat_id" name="shipping[razon_social]" title="Razón Social" class="input-text ">
	                    </div>
	                    <label for="billing:vat_id">RFC</label>
	                    <div class="input-box">
	                        <input type="text" id="shipping:vat_id" name="shipping[vat_id]" title="RFC" class="input-text ">
	                    </div>
	                    <label for="billing:vat_id">Correo electrónico</label>
	                    <div class="input-box">
	                        <input type="text" id="shipping:vat_id" name="shipping[email_rfc]" title="Correo electrónico" class="input-text ">
	                    </div>
                    </div>
	                </li>
                                    <li class="no-display"><input type="hidden" name="shipping[save_in_address_book]" value="1"></li>
                                </ul>
            </fieldset>
        </li>
        <li class="control hidden">
            <input type="checkbox" name="shipping[same_as_billing]" id="shipping:same_as_billing" value="1" checked="checked" title="Usar dirección de cobro" class="checkbox"><label for="shipping:same_as_billing">Usar dirección de cobro</label>
        </li>
    </ul>

<script type="text/javascript">
    var shippingRegionUpdater = new RegionUpdater('shipping:country_id', 'shipping:region', 'shipping:region_id', {"config":{"show_all_regions":true,"regions_required":["MX"]},"MX":{"485":{"code":"AGS","name":"Aguascalientes"},"486":{"code":"BCN","name":"Baja California Norte"},"487":{"code":"BCS","name":"Baja California Sur"},"488":{"code":"CAM","name":"Campeche"},"489":{"code":"CHIS","name":"Chiapas"},"490":{"code":"CHIH","name":"Chihuahua"},"493":{"code":"DF","name":"Ciudad de M\u00e9xico"},"491":{"code":"COAH","name":"Coahuila"},"492":{"code":"COL","name":"Colima"},"494":{"code":"DGO","name":"Durango"},"495":{"code":"GTO","name":"Guanajuato"},"496":{"code":"GRO","name":"Guerrero"},"497":{"code":"HGO","name":"Hidalgo"},"498":{"code":"JAL","name":"Jalisco"},"501":{"code":"MEX","name":"Mexico (Estado de)"},"499":{"code":"MICH","name":"Michoacan"},"500":{"code":"MOR","name":"Morelos"},"502":{"code":"NAY","name":"Nayarit"},"503":{"code":"NL","name":"Nuevo Leon"},"504":{"code":"OAX","name":"Oaxaca"},"505":{"code":"PUE","name":"Puebla"},"506":{"code":"QRO","name":"Queretaro"},"507":{"code":"QROO","name":"Quintana Roo"},"508":{"code":"SLP","name":"San Luis Potosi"},"509":{"code":"SIN","name":"Sinaloa"},"510":{"code":"SON","name":"Sonora"},"511":{"code":"TAB","name":"Tabasco"},"512":{"code":"TAMPS","name":"Tamaulipas"},"513":{"code":"TLAX","name":"Tlaxcala"},"514":{"code":"VER","name":"Veracruz"},"515":{"code":"YUC","name":"Yucatan"},"516":{"code":"ZAC","name":"Zacatecas"}}}, undefined, 'shipping:postcode');
</script>
</div>        </form>

<div class="alerta_pass validation-advice" style="display: none">Las contraseñas no coinciden.</div>
<div class="alerta_sig validation-advice" style="display: none">Por favor, completa los campos requeridos.</div>
<div class="botom_next" style="display: none;">Siguiente</div>-->


</div>


















    <div class="opc-col-center">
    	<div class="steps">
			<div class="item grid12-12">
				<span id="two" class="circle two active">2</span>
				<div class="msj">Formas de Pago</div>
			</div>
		</div>
		<!--<div class="shipping-block" style="display:none;">
			<div id="shipping-block-methods">
                <form id="opc-co-shipping-method-form" autocomplete="off">
                    <div id="checkout-shipping-method-load">
                        <dl class="sp-methods">
                            <dt>DHL</dt>
                            <dd>
                                <ul>
                                    <li>
                                        <span class="no-display">
                                            <input name="shipping_method" class="shippingmethod" type="radio" value="flatrate_flatrate" id="s_method_flatrate_flatrate" checked="checked">
                                        </span>
                            <script>
                            	document.getElementsByClassName("shippingmethod").checked = true;
                            </script>
                                                    
                                        <label for="s_method_flatrate_flatrate">Envío calculado
                                            <span class="price">$249.00</span>
                                        </label>
                                    </li>
                                </ul>
                            </dd>
                        </dl>

<script type="text/javascript">
    var shippingCodePrice = {'flatrate_flatrate':249};
    $$('input[type="radio"][name="shipping_method"]').each(function(el){
        Event.observe(el, 'click', function(){
            if (el.checked == true) {
                var getShippingCode = el.getValue();
                                    var newPrice = shippingCodePrice[getShippingCode];
                    if (!lastPrice) {
                        lastPrice = newPrice;
                        quoteBaseGrandTotal += newPrice;
                    }
                    if (newPrice != lastPrice) {
                        quoteBaseGrandTotal += (newPrice-lastPrice);
                        lastPrice = newPrice;
                    }
                                checkQuoteBaseGrandTotal = quoteBaseGrandTotal;
                return false;
            }
       });
    });
</script>

                    </div>    
                    <div id="onepage-checkout-shipping-method-additional-load"></div>    
                </form>
            </div>
		</div>-->
		<div class="payment-block " style="">
			<script type="text/javascript">
                var quoteBaseGrandTotal = 534;
                var checkQuoteBaseGrandTotal = quoteBaseGrandTotal;
                var payment = new Payment('co-payment-form', 'https://www.veerkamponline.com/checkout/onepage/savePayment/');
                var lastPrice;
            </script>

<form action="" id="co-payment-form">	
    <fieldset id="checkout-payment-method-load">
        <dt id="dt_method_bancomer" class="">
            <input id="p_method_bancomer" value="bancomer" type="radio" name="payment[method]" title="Tarjeta de crédito / débito" onclick="payment.switchMethod('bancomer')" class="radio validation-passed" autocomplete="off">
            <label for="p_method_bancomer">Tarjeta de crédito / débito </label>
        </dt>
        <dd id="dd_method_bancomer">
            <ul class="form-list checkout-agreements" id="payment_form_bancomer" style="display: none;">
                <li class="form-alt">
    	           Al finalizar tu compra serás redireccionado a nuestro portal bancario para que puedas efectuar tu pago correspondiente.
                </li>
            </ul>
        </dd>

        <dt id="dt_method_paypal_express" class="">
            <input id="p_method_paypal_express" value="paypal_express" type="radio" name="payment[method]" title="PayPal" onclick="payment.switchMethod('paypal_express')" class="radio validation-passed" autocomplete="off">
            <label for="p_method_paypal_express">PayPal</label>
        </dt>
        <dd id="dd_method_paypal_express">
            <ul class="form-list checkout-agreements" id="payment_form_paypal_express" style="display: none;">
                <li class="form-alt">Al finalizar tu compra serás redireccionado al portal seguro de Paypal para que puedas efectuar tu pago correspondiente.</li>
            </ul>
        </dd>

        <dt id="dt_method_banktransfer" class="">
            <input id="p_method_banktransfer" value="banktransfer" type="radio" name="payment[method]" title="Transferencia Interbancaria" onclick="payment.switchMethod('banktransfer')" class="radio validation-passed" autocomplete="off">
            <label for="p_method_banktransfer">Transferencia Interbancaria </label>
        </dt>
        <dd id="dd_method_banktransfer">
            <ul class="form-list checkout-agreements" id="payment_form_banktransfer" style="display: none;">
                <li>
                    <div class="banktransfer-instructions-content agreement-content">
                        Al finalizar tu compra te llagara un mail con los datos 
                        bancarios para que puedas efectuar tu pago lo antes posible.
                    </div>
                </li>
            </ul>
        </dd>

        <dt id="dt_method_checkmo" class="active">
            <input id="p_method_checkmo" value="checkmo" type="radio" name="payment[method]" title="Deposito Bancario" onclick="payment.switchMethod('checkmo')" class="radio validation-passed" autocomplete="off">
            <label for="p_method_checkmo">Deposito Bancario </label>
        </dt>
        <!--<dd id="dd_method_checkmo">
            <ul class="form-list checkmo-list checkout-agreements" id="payment_form_checkmo" style="">
                <li> 
                    <div class="checkmo-instructions-content agreement-content">
                        Al finalizar tu compra te llagara un mail con los datos 
                        bancarios para que puedas efectuar tu pago lo antes posible.
                    </div>
                </li>
            </ul>
        </dd>-->
    </fieldset>
</form>










<div class="tool-tip" id="payment-tool-tip" style="display:none;">
    <div class="btn-close"><a href="#" id="payment-tool-tip-close" title="Cerrar">Cerrar</a></div>
    <div class="tool-tip-content"><img src="Pagina%20de%20Pago%20Archivos/cvv.gif" alt="Número de verificación visual de la Tarjeta" title="Número de verificación visual de la Tarjeta"></div>
</div>
<script type="text/javascript">
//<![CDATA[
    function toggleToolTip(event){
        if($('payment-tool-tip')){
            $('payment-tool-tip').setStyle({
                top: (Event.pointerY(event)-560)+'px'//,
                //left: (Event.pointerX(event)+100)+'px'
            })
            $('payment-tool-tip').toggle();
        }
        Event.stop(event);
    }
    if($('payment-tool-tip-close')){
        Event.observe($('payment-tool-tip-close'), 'click', toggleToolTip);
    }
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
    payment.currentMethod = "googlecheckout";
//]]>
</script>
		</div>
		
    </div>

















    <div class="opc-col-right">
    	<div class="steps">
			<div class="item grid12-12">
				<span id="three" class="circle three active">3</span>
				<div class="msj">Confirma tu pedido</div>
			</div>
		</div>
		
    
        
		<div class="opc-review-actions" id="checkout-review-submit" style="">
		      
<form action="" id="checkout-agreements" onsubmit="return false;" style="position: relative; display: block; margin-top: 89px;">
<ol class="checkout-agreements">
    <li style="background-color: #E6E6E6;">
        <div id="agreement-block-1" class="agreement-content ">
TERMINOS Y CONDICIONES<br>
Uso del Sitio<br>
<br>
Al aceptar estos Términos de Uso mediante tu uso del Sitio, certificas 
que tienes al menos 18 años de edad. Si eres menor de 18 años, pero 
mayor de 13 años, puedes utilizar el sitio bajo supervisión de tus 
padres o tutores legales quienes aceptan a obligarse a estos Términos de
 Uso. <br>
<br>
<br>
Si no estás de acuerdo (o no puedes cumplir) con alguno de estos 
términos y condiciones, no utilices este sitio. Toda la información de 
registro y facturación proporcionada deberá ser verdadera y exacta. 
Proporcionar cualquier información falsa o inexacta constituye el 
incumplimiento de estos Términos de Uso. Al confirmar tu compra, al 
final del proceso de pago, estás de acuerdo en aceptar y pagar por los 
artículos solicitados. <br>
<br>
Seguridad del Sitio<br>
<br>
Queda  prohibido violar o intentar violar la seguridad del sitio, incluyendo, sin limitación:<br>
<br>
 <br>
<br>
Acceder a datos no destinados al usuario o iniciar sesión en un servidor
 o cuenta en la que el usuario no esté autorizado a accesar.<br>
Intentar penetrar, escanear o probar la vulnerabilidad de un sistema o 
red o violar la seguridad o medidas de autenticación sin la debida 
autorización.<br>
Intentar interferir con el servicio a cualquier usuario, huésped o red, 
incluyendo, sin limitación, a través del envío de virus al Sitio, 
sobrecarga, inundación, spam, bombardeo de correo o fallas.<br>
Enviar correo no solicitado, incluyendo promociones y/o publicidad de productos o servicios.<br>
 <br>
<br>
Las violaciones al sistema o red de seguridad pueden dar lugar a 
responsabilidad civil o penal. Veerkamponline.com investigara las 
ocurrencias que puedan involucrar tales violaciones y puede implicar, y 
cooperar con las autoridades de la ley en la persecución de usuarios que
 participen en tales violaciones. Te comprometes a no utilizar ningún 
dispositivo, software o rutina para interferir o intentar interferir con
 el uso correcto de este sitio o cualquier actividad llevada a cabo en 
este Sitio. Quedas comprometido, en lo sucesivo, a no utilizar o 
intentar utilizar cualquier máquina, software, herramienta, agente u 
otro dispositivo o mecanismo ( incluyendo sin limitación navegadores, 
spiders, robots, avatars o agentes inteligentes) para navegar o buscar 
en este Sitio otro que no sea el motivo de búsqueda y agentes de 
búsqueda disponibles de Veerkamponline.com en este sitio y otros 
navegadores de terceros que generalmente están disponibles (ejemplo, 
Netscape, Navigator o Microsoft Explorer).<br>
<br>
 <br>
<br>
 <br>
<br>
Aceptación de pedido y compra<br>
<br>
Nos reservamos el derecho, a nuestra exclusiva discreción, de rechazar o
 cancelar algún pedido o compra por cualquier razón. Tu cuenta puede ser
 restringida o cancelada por cualquier razón a nuestra exclusiva 
discreción.<br>
<br>
Para tu comodidad, no se realizará ningún cargo  hasta que tú forma de 
pago sea autorizada por el banco emisor de tu tarjeta, la información 
precisa del pedido sea verificada y tu pedido sea enviado. Algunas 
situaciones pueden resultar en que  tu pedido  sea cancelado incluyendo 
limitaciones en cantidades disponibles para la compra, imprecisiones o 
errores en la información del producto o precio, o problemas 
identificados por nuestro personal de ventas online. También podemos 
solicitar verificaciones o información adicional antes de aceptar 
cualquier pedido. Te contactaremos si la totalidad o parcialidad de tu 
pedido es cancelada o si información adicional es requerida para aceptar
 tu pedido. Si tu pedido es cancelado después de haber realizado el 
pago, ya sea por medio de transferencia electrónica, depósito bancario o
 por medio de pagos con tarjetas de crédito o débito,  se emitirá un 
reembolso por el mismo medio en que fue el pago, para las transferencias
 electrónicas o depósitos bancarios, el cliente tendrá que proporcionar 
un número de cuenta clave, titular de la cuenta y el banco al cual será 
hecho el monto de la devolución del total.<br>
<br>
 <br>
<br>
Información sobre precios y contenidos<br>
<br>
www.veerkamponline.com se esfuerza en proporcionar información precisa 
en los precios, pueden ocurrir errores tipográficos y de etiquetado. 
www.veerkamponline.com no puede confirmar el precio de un artículo hasta
 haber recibido tu pedido. En el caso de que debido a un error un 
artículo este etiquetado con un precio incorrecto, 
www.veerkamponline.com tendrá el derecho, a exclusiva discreción de 
www.veerkamponline.com, de rechazar o cancelar todo pedido recibido de 
este  artículo. <br>
<br>
No obstante, en algunas ocasiones  el precio en línea no es igual al 
precio en tienda. Nuestras tiendas no respetan precios de Internet o 
anuncios de competidores fuera del territorio local de comercio de una 
tienda. Así mismo www.veerkamponline.com no se compromete a respetar 
ningún precio fuera de las fechas establecidas de promociones.<br>
www.veerkamponline.com no realiza ajustes de precio de acuerdo a otras tiendas físicas o en línea.<br>
<br>
Descripción y foto galería de Mercancías<br>
<br>
www.veerkamponline.com  procura ser exacto en las descripciones de sus 
productos. Sin embargo, www.veerkamponline.com no garantiza que las 
descripciones del producto u otro contenido del sitio sean exactos, 
completos, fiables, actuales o libres de error. Si un  producto no es 
como se describe, la única solución es devolverlo sin haberlo utilizado.
 <br>
<br>
Las fotos de los productos son únicamente ilustrativas por lo que 
www.veerkamponline.com no garantiza que la imagen del producto en la 
tienda online sea exactamente la misma al producto físico.<br>
<br>
Colores<br>
<br>
Hemos hecho esfuerzos significativos para exhibir con precisión los 
colores que aparecen de nuestros productos en el sitio. Sin embargo, los
 colores actuales que ves dependerán de tu monitor, no podemos 
garantizar que ninguno de los colores mostrados en tu monitor sea 
exactos.<br>
<br>
 <br>
<br>
 <br>
<br>
Reseñas, sugerencias y comentarios<br>
<br>
Para todos las reseñas,  comentarios, opiniones, retroalimentaciones, 
sugerencias, ideas y otras comunicaciones publicadas, presentadas u 
ofrecidas a www.veerkamponline.com en o a través de este sitio, vía 
correo electrónico o teléfono, o publicadas de otra manera, presentadas u
 ofrecidas en relación con el uso que das a este sitio, le concedes a 
www.veerkamponline.com el derecho de autor, sin costo alguno, 
irrevocable, transferible y con licencia de usar los comentarios  del 
modo que www.veerkamponline.com desee, incluyendo sin limitación, a 
copiar, modificar, eliminar en su totalidad, adaptar, publicar, 
traducir, crear trabajos derivados de y/o vender y/o distribuir dichos 
comentarios y/o incorporar dichos comentarios en cualquier forma, medio o
 tecnología en todo el mundo.<br>
<br>
www.veerkamponline.com tendrá derecho a utilizar, reproducir, divulgar, 
modificar, adaptar, crear trabajos derivados, de, publicar, exhibir y 
distribuir cualquier comentario que presentes para cualquier propósito, 
sin ninguna restricción y sin compensarte de alguna manera. 
www.veerkamponline.com no está ni estará bajo ninguna obligación de (1) 
mantener cualquier comentario en confidencia; (2) pagarle al usuario 
alguna compensación por cualquier comentario; o (3) responder a 
cualquier comentario de los usuarios. Aceptas que cualquier comentario 
presentado por ti en el sitio no violará los términos en estos Términos 
de Uso o ningún derecho o ningún tercero, incluyendo sin limitación, 
derechos de autor, marcas registradas, privacidad u otro(s) derecho(s) 
personal(es) o de propiedad(es), y que no causa daño a ninguna persona o
 entidad. Además aceptas que ningún comentario para el sitio presentado 
por ti será o contendrá difamación  o acciones ilegales, amenazantes, 
abusivos o de material obsceno, o contendrán virus de software, campañas
 políticas, solicitudes comerciales, cartas en cadena, correos masivos o
 cualquier forma de "correo no deseado".<br>
<br>
www.veerkamponline.com no examina regularmente los comentarios 
publicados, pero se reserva el derecho (más no la obligación) de 
monitorear y editar o eliminar cualquier comentario presentado en el 
sitio. Concedes a www.veerkamponline.com el derecho de utilizar el 
nombre que presentaste en relación con cualquier comentario.<br>
<br>
 <br>
<br>
 <br>
<br>
 <br>
<br>
Indemnización<br>
<br>
Aceptas defender, indemnizar y no incurrir en ningún daño a 
www.veerkamponline.com y sus afiliados de y contra cualquier y todo 
reclamo, daños, costos y gastos, incluyendo honorarios legales derivados
 de o relacionados con el uso que das al sitio o cualquier 
incumplimiento de tu parte de estos Términos de Uso.<br>
<br>
 <br>
<br>
Terminación<br>
<br>
Estos Términos de Uso son efectivos a menos que y hasta que sean 
rescindidos ya sea por ti o por www.verkamponline.com. Tú podrás 
rescindir estos Términos de Uso en cualquier momento, siempre y cuando 
suspendas cualquier uso posterior de este sitio. www.veerkamponline.com 
 también puede rescindir estos Términos de Uso en cualquier momento y 
puede hacerlo de forma inmediata sin previo aviso, y por lo tanto 
negarte el acceso al sitio, si a la exclusiva discreción de 
www.veerkamponline.com  no cumples con algún término o disposición de 
estos Términos de Uso. En caso de rescindir estos Términos de Uso ya sea
 por ti o por www.veerkamponline.com, debes destruir inmediatamente 
todos los materiales descargados u obtenidos de otra manera desde este 
sitio, así como todas las copias de tales materiales, que se hicieron 
bajo los Términos de Uso u otra manera.<br>
<br>
Renuncia de Responsabilidades<br>
<br>
www.veerkamponline.com  no hace representaciones o garantías de ningún 
tipo, expresa o implícita, en cuanto a la operación del sitio o de la 
información, contenido, materiales, o productos incluidos en este sitio.
 En toda la extensión permitida por la ley aplicable, 
www.veerkamponline.com renuncia a toda responsabilidad, expresa ó 
implícita, incluyendo más no limitándose a las garantías de 
comercialización y conveniencia para un propósito particular. Esta 
renuncia no aplica a ninguna garantía de producto ofrecida por el 
fabricante del artículo. Esta renuncia constituye una parte esencial de 
estos Términos de Uso. Algunos estados no permiten la limitación de la 
duración de una garantía implícita,  por lo que las limitaciones pueden 
no  aplicarse a ti.<br>
<br>
Renuncia de contenido de mercancías: EL acceso a la Información sobre el
  producto a través de este sitio web se obtiene de las exigencias del 
fabricante del producto. Por favor toma en cuenta que en ocasiones los 
fabricantes pueden alterar sus etiquetas así que el empaque actual del 
producto y materiales puede contener información diferente a la mostrada
 en nuestro Sitio Web, en consecuencia no podemos garantizar o asegurar 
la precisión, integridad, puntualidad, de la información de ningún 
producto. Recomendamos que no confíes únicamente en la información 
presentada y que siempre leas las etiquetas, advertencias e 
instrucciones antes de utilizar o consumir un producto. Para información
 adicional sobre un producto, por favor contacta al fabricante. 
www.veerkamponline.com no asume responsabilidad  por los errores o 
inexactitudes acerca de los productos. Los comentarios de los clientes  
se proporcionan únicamente para fines informativos. Los comentarios de 
los clientes únicamente reflejan los resultados y experiencias 
individuales y no son verificados o aprobados por Veerkamp.com.<br>
<br>
 <br>
<br>
Limitación de Obligación<br>
<br>
Bajo ninguna circunstancia y bajo ninguna teoría No legal o de equidad, 
ya sea en agravio, contrato, estricta responsabilidad o de otra manera, 
www.veerkamponline.com o ninguno de sus afiliados, empleados, 
directores, oficiales, representantes, vendedores o proveedores, serán 
responsables ante ti o ninguna otra persona por ningún daño o pérdida, 
indirecto, especial, incidental o consecuencia, de ninguna naturaleza 
que surja derivado de o en conexión con el uso de o inhabilidad de uso 
del sitio web de www.veerkamponline.com, incluyendo sin limitación, 
daños por pérdidas de ganancias, pérdida de buena voluntad, pérdida de 
datos, paro de labores, pérdidas económicas, exactitud de registros, o 
falla o mal funcionamiento de computadora , aun cuando un representante 
autorizado de www.veerkamponline.com haya sido avisado de o debiera 
estar al tanto de las posibilidad de tales daños.<br>
<br>
 <br>
<br>
 <br>
<br>
General<br>
<br>
Estos Términos de Uso representan el completo acuerdo entre las partes y
 sustituyen todo acuerdo y representaciones previas entre ellos. Los 
títulos utilizados en estos Términos de Uso son utilizados únicamente 
para fines de referencia  y de ninguna manera definen o limitan el 
alcance de la sección. Si cualquier disposición de estos Términos de Uso
 se considera inaplicable por cualquier razón, tal disposición deberá 
reformarse únicamente en la medida necesaria para hacerla ejecutable y 
las demás condiciones de estos Términos de Uso permanecerán en pleno 
vigor y efecto. La falla de www.veerkamponline.com de actuar con 
respecto al incumplimiento de estos Términos de Uso por ti u otros no 
constituye una renuncia  y no limitará los derechos de 
Veerkamponline.com  con respecto a tal incumplimiento o cualquier 
incumplimiento subsecuente. Estos Términos de Uso se regirán e 
interpretarán bajo las leyes de México sin tener en cuenta a conflictos 
de disposiciones legales<br>
<br>
<br>
 Aceptación de los términos<br>
 <br>
Si el usuario utiliza los servicios de www.veerkamponline.com, significa
 que ha leído, entendido y aceptado los términos antes expuestos. Si no 
está de acuerdo con ellos, el usuario no deberá proporcionar ninguna 
información personal, ni utilizar los servicios de 
www.veerkamponline.com.                    </div>
        <p class="agree">
            <input type="checkbox" id="agreement-1" name="agreement[1]" value="1" title="Acepto los términos y condiciones de Veerkamp Mesones SA de CV" class="checkbox">
            <a class="view-agreement" data-id="1">Acepto los términos y condiciones de Veerkamp Mesones SA de CV</a>
            
            
        </p>
    </li>
</ol>
</form>

<div id="opc-review-block">
    <script type="text/javascript">
    //<![CDATA[
        if (typeof CentinelAuthenticateController != 'undefined') {
            CentinelAuthenticateController.cancel();
        }
    //]]>
    </script>
<div id="checkout-review-table-wrapper">
    <h3 class="review-title">Revise su pedido </h3>
    <table class="opc-data-table" id="checkout-review-table">
        <colgroup>
            <col>
            <col width="1">
            <col width="1">
            <col width="1">
        </colgroup>
        <thead>
            <tr class="first last">
                <th rowspan="1">Nombre del producto</th>
                <th rowspan="1" class="a-center">Cantidad</th>
                <th colspan="1" class="a-center">Sub-total</th>
            </tr>
        </thead>
        <tfoot>
            <tr class="first">
                <td style="" class="a-right" colspan="2">
                    Subtotal</td>
                <td style="" class="a-right last">
                    <span class="price">${{number_format($total,2)}}</span>
                </td>
            </tr>
            <tr>
                <td style="" class="a-right" colspan="2">
                    Envío y Manejo (DHL - Envío calculado)</td>
                <td style="" class="a-right last">
                    <span class="price">$pendiente</span>
                </td>
            </tr>
            <tr class="last">
                <td style="" class="a-right" colspan="2">
                    <strong>Total</strong>
                </td>
                <td style="" class="a-right last">
                    <strong>
                        <span class="price">${{number_format($total,2)}}</span>
                    </strong>
                </td>
            </tr>
        </tfoot>
        <tbody>
            @foreach($cart as $item)
            <tr class="first odd">
                <td>
                    <h3 class="product-name">{{$item->nombre}}</h3>
                </td>
            
                <td class="a-center">
                    <span class="cell-label">Cantidad</span>{{$item->quantity}}
                </td>

                <td class="last">
                	<span class="cell-label">Sub-total</span>
                    <span class="cart-price">
                        <span class="price">${{ number_format($item->precio_u * $item->quantity,2)}}</span>            
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script type="text/javascript">
//<![CDATA[
    decorateTable('checkout-review-table');
    truncateOptions();
//]]>
</script></div>		  	
		  	<div class="boton check">
			      <button type="button" title="Finalizar compra" class="btn-checkout opc-btn-checkout"><span><span>Finalizar compra</span></span></button>
			  </div>	      
		</div>
    </div>
    
</div>

</div>
<script>
	var vopc = '4.3.0';
	IWD.OPC.Checkout.config = '{"baseUrl":"https:\/\/www.veerkamponline.com\/","isLoggedIn":1,"comment":"0","paypalLightBoxEnabled":false,"shipperhqEnabled":false}';
	</script>

<div id="agree_error" style="display:none !important;">Por favor, lee nuestros Términos y Condiciones atentamente antes de realizar un pedido</div>
<div id="pssm_msg" style="display:none !important;">Especifique método de enví­o por favor.</div>
<div class="opc-ajax-loader" style="display: none;">
	<div id="floatingCirclesG">
		<div class="f_circleG" id="frotateG_01"></div>
		<div class="f_circleG" id="frotateG_02"></div>
		<div class="f_circleG" id="frotateG_03"></div>
		<div class="f_circleG" id="frotateG_04"></div>
		<div class="f_circleG" id="frotateG_05"></div>
		<div class="f_circleG" id="frotateG_06"></div>
		<div class="f_circleG" id="frotateG_07"></div>
		<div class="f_circleG" id="frotateG_08"></div>
	</div>
</div>
<div class="opc-message-wrapper design_package_ultimo design_theme_default">
	
	<div class="opc-messages">
		<a class="close-message-wrapper"><i class="fa fa-close"></i></a>
		<div class="opc-message-container"></div>
		<div class="opc-messages-action"><button class="button"><span><span>Cerrar</span></span></button></div>
	</div>
</div>
<script>
	jQuery(function($) {	
		
		$('#customcheck .opc-col-left .form-list input.input-text').live('focus', function(e) {
			$('#two, #three').removeClass('active');
			$('.payment-block, #checkout-review-submit').fadeOut('slow');
			$('#customcheck .botom_next').show();
		});
		$('#customcheck .botom_next').live('click', function(e) {

			//Terminos y condiciones Veerkamp
			var terminos = 0;
			if($("#terminos_condiciones_veerkamp").is(':checked')) {
				console.log("Esta seleccionado");
				terminos = 1;
			} else {
				console.log("No esta seleccionado");
			}

			var name = $("input[title='Nombre']").val();
			var lastname = $("input[title='Apellido']").val();
			var tel = $("input[title='Teléfono']").val();
			var dir = $("input[title='Calle y Número']").val();
			var ciud = $("input[title='Ciudad']").val();
			var pass1 = $("input[val='pass1']").val(); 
			var pass2 = $("input[val='pass2']").val();
			if( pass1 != pass2){
				$('.alerta_pass').show();
			}
			else if (name == '' || lastname == '' || tel == ''|| dir == ''|| ciud == '' || pass1 == '' || pass2 == '' || terminos == 0 ) {
					$('.alerta_sig').show();
			} else {
				$('.alerta_sig').hide();
				$('.alerta_pass').hide();
				$('#two').addClass('active');		
				$('.payment-block').fadeIn('slow');
				$(this).hide();
			return false;	
		}
		});
		$('#customcheck .opc-col-center .payment-block dt input').live('click', function(e) {
			$('#three').addClass('active');		
			$('#checkout-review-submit').fadeIn('slow');								
		});
	});
</script>                    </div>
                    <div class="postscript"></div>
                </div>
            </div>
            <div class="main-bottom-container"></div>
        </div>

@stop