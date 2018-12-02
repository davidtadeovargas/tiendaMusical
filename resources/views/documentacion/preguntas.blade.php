@extends('layouts.app')
@section('content')

<div class="main-container col1-layout">
            <div class="main-top-container"></div>
            <div class="main container">
                <div class="inner-container">
                    <div class="breadcrumbs">
    <ul>
                                    <li class="home" itemscope="" itemtype="">
                    <a href="{{route('home')}}" title="Ir a página de inicio" itemprop="url"><span itemprop="title">Inicio</span></a>
            
                                <span class="sep"></span>
                                
                </li>
                                    <li class="cms_page">
                    <span class="last-crumb">Preguntas Frecuentes</span>
            
                                
                </li>
            </ul>
</div>
                    <div class="preface"></div>
                    <div class="col-main">
                                                    <div class="page-title">
        <h1>PREGUNTAS FRECUENTES</h1>
    </div>
<div class="std"><div class="faq">
<div class="q">¿Cómo comprar en {{ config('app.name', 'Laravel') }}?</div>
<div class="a active"><ol>
<li class="li2">Lo primero que debes hacer para que tu compra en <strong><a href="{{route('home')}}" target="_blank">www.laravelonline.com</a></strong> sea exitosa es registrarte para que tus datos se encuentren guardados y realices tu compra,<strong> regístrate <a href="{{ url('/register') }}">aquí.</a></strong></li>
<li class="li2">Una vez que te hayas registrado debes de localizar el 
producto que tanto deseas y dar clic para que puedas ver toda la 
información, te puedes apoyar con nuestro buscador escribiendo el nombre
 del producto y haciendo enter o clic en el icono de buscar que está de 
color amarillo, también puedes buscar tu producto navegando por las 
distintas categorías que tenemos en nuestro menú y en la parte izquierda
 dando clic a la categoría seleccionada encontraras los filtros 
necesarios para que tu búsqueda sea específica.</li>
<li class="li2">Una vez que tu búsqueda sea exitosa y que estés 100% seguro de que ese producto es el ideal para ti, tienes que dar clic en <strong>¡LO QUIERO!</strong> para que se refleje en tu carrito de compra, si no encuentras tu producto puedes llamarnos al 5709-3716 o escríbenos al correo:<strong> <a href="">pedidosonline@laravel.com</a></strong>
 y con gusto te ayudaremos a encontrar lo que estás buscando, deberás 
seguir agregando los productos a tu carrito de compras hasta que esté 
completo con todo lo que necesitas.</li>
<li class="li2">Cuando tengas tu carrito de compras completo corrobora 
que las cantidades estén correctas, número de piezas y precios, puedes 
modificar las cantidades con el icono de “+” y “-” y después dar clic en
 actualizar carrito, si tienes un cupón de descuento lo puedes usar 
colocando el código en el campo de <strong>“Cupón de descuento”</strong> y das clic en <strong>“APLICAR”</strong>, si es tu primer compra da clic<strong>&nbsp;<a href="https://laravelonline.com/customer/account/create/">aquí</a></strong> para obtener tu primer cupón en <strong>laravel Online</strong>, para continuar tienes que dar clic en “COMPRAR” de color amarillo.</li>
<li class="li2">En este último paso tienes que llenar tu dirección de 
envío y en caso de que requieras factura llena los datos fiscales para 
poder emitirla adecuadamente, elije uno de los <strong>5 métodos de pago</strong> que tenemos para ti y sigue el proceso de pago, una vez que tengas todos tus campos completos da clic en<strong> “FINALIZAR”</strong> y espera tu número de pedido ya que con ese le podrás dar seguimiento a tu producto hasta que lo llevemos a tu domicilio.</li>
<li class="li2">Te llegará un primer correo a la dirección que nos 
proporcionaste corroborando tu pedido, despúes un segundo correo cuando 
corfirmemos tu pago y por ultimo un tercer correo notificando la salida 
de tu pedido, recibirás el número de guía y te notificaremos qué 
mensajería lo llevará.</li>
</ol></div>
<div class="q">¿Cuál es el estado de mi pedido?</div>
<div class="a">
<p class="p2">Ingresa a tu cuenta y revisa el estatus de tu pedido, si 
tienes alguna duda nos puedes llamar de lunes a viernes de 10:00 a 18:00
 hrs al teléfono <strong>5709-3716</strong> o puedes escribirnos al correo: <strong>pedidosonline@laravel.com</strong></p>
</div>
<div class="q">¿Formas de pago?</div>
<div class="a">
<p class="p2">Contamos con los siguientes métodos de pago (consulta formas de pago a detalle<a href="" target="_blank"><strong> aquí</strong></a>)</p>
<ul>
<li class="li2">Tarjeta de Crédito o Debito (Visa/MasterCard).</li>
<li class="li2">American Express.</li>
<li class="li2">Transferencia Interbancaria.</li>
<li class="li2">Depósito Bancario.</li>
<li class="li2">Cuenta Paypal.</li>
</ul>
</div>
<div class="q">¿Método de envío y tiempo de entrega?</div>
<div class="a">
<p><b>Para la Ciudad de México y Área Metropolitana:</b></p>
<ul>
<li class="li2">Mensajería&nbsp;</li>
<li class="li2">Costo de envío - $149</li>
<li class="li2">Tiempo de entrega – 3 a 4 días hábiles después de haberse confirmado el pago.</li>
</ul>
<p><b>Para el Interior de la Republica:</b></p>
<ul>
<li class="li2">Mensajería&nbsp;</li>
<li class="li2">Costo de envío - $249</li>
<li class="li2">Tiempo de entrega – 5 a 6 días hábiles después de haberse confirmado el pago.</li>
</ul>
</div>
<div class="q">¿Puedo facturar mi pedido?</div>
<div class="a">
<p class="p2">Cuando elijas el método de pago encontrarás la opción <strong>"Facturar tu pedido"</strong>,
 en caso de terminar el pedido y no seleccionar esta opción pero 
requieres factura, llámanos de lunes a viernes de 10:00 a 18:00 hrs. al 
teléfono 5709-3716 o nos puedes escribir al correo&nbsp;<a href="">pedidosonline@laravel.com</a> no excediendo un lapso de 24 hrs después de haber hecho tu pedido, después de ese tiempo no podremos emitir factura.</p>
</div>
<div class="q">No recibí mi cupón en mi correo ¿Qué hago?</div>
<div class="a">
<p class="p2">Recuerda revisar tu bandeja spam y agrega nuestra cuenta de correo&nbsp;<strong>pedidosonline@laravel.com</strong>&nbsp;a
 tu lista de contactos para que siempre recibas nuestros comunicados. 
Por favor espera algunos minutos ya que la entrega de cupones por email 
demora algunos minutos, también&nbsp;<span>nos puedes llamar de lunes a viernes de 10:00 a 18:00 hrs al teléfono <strong>5709-3716</strong> o nos puedes escribir al correo&nbsp;</span><strong><a href="">pedidosonline@laravel.com</a></strong></p>
</div>
<div class="q">¿Cómo puedo recibir las ofertas en mi correo?</div>
<div class="a">
<p class="p2">Suscríbete a nuestro boletín, ingresa tu correo 
electrónico en la parte inferior derecha de la página y ¡listo! 
recibirás todas nuestras ofertas y estarás siempre informado de todo lo 
que pase en <strong>www.laravelonline.com</strong></p>
</div>
<div class="q">¿Dónde se encuentra la tienda física?</div>
<div class="a">
<p class="p2">Nuestras oficinas se encuentran ubicadas en Calle Mesones #21, Col. Centro, Delegación Cuauhtémoc, C.P. 06080, Ciudad de México.</p>
</div>
<div class="q">¿Puedo hacer una devolución?</div>
<div class="a">
<p class="p2">Se podrá devolver cualquier artículo comprado en<strong>&nbsp;www.laravelonline.com</strong> siempre y cuando no presenten las siguientes causas:</p>
<ul>
<li class="li6">El cambió o devolución se podrá realizar después de la 
recepción del producto y la verificación del estado en el que se 
encuentre.</li>
<li class="li6">El producto haya sido abierto o usado.</li>
<li class="li6">Si hace falta algún tipo de accesorio.</li>
<li class="li6">Si el producto presenta signos de deterioro o maltrato.</li>
<li class="li6">No se mantenga en el mismo estado en que se recibió.</li>
<li class="li6">No conserve el empaque y caja original así como sus etiquetas.</li>
<li class="li6">No hayan pasado más de 10 días desde que se realizó la compra.</li>
<li class="li6">Las devoluciones no aplican para productos saldos, Outlet o con descuento.</li>
<li class="li6">En las compras a meses sin intereses no se aceptan devoluciones solo cambios.</li>
</ul>
</div>
</div>
<p style="font-size: 13px; font-weight: bold; margin: 15px 0;"><b>*Debes de contar forzosamente con el Ticket o Factura.* (Revisa políticas de Envíos y Devoluciones)</b></p>
<p style="font-size: 13px; font-weight: bold; margin: 15px 0;">&nbsp;</p>
<style><!--
.faq .q {
    font-size: 14px;
    font-weight: 700;
    line-height: 20px;
    padding-left: 20px;
    position: relative;
    text-decoration: none;
    cursor: pointer;
}
.faq .q i{
	font-size: 19px;
    font-style: normal;
    left: 0;
    position: absolute;
}
.faq .q i.rotate{
	transform: rotate(90deg);
}	
.faq div.a {
    font-size: 13px;
    line-height: 21px;
    text-align: justify;
    margin: 25px 0;
}
--></style></div>                    </div>
                    <div class="postscript"></div>
                </div>
            </div>
            <div class="main-bottom-container"></div>
        </div>

@stop