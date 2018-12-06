@extends('layouts.app')
@section('content')

<div class="main-container col1-layout">
            <div class="main-top-container"></div>
            <div class="main container">
                <div class="inner-container">
                    <div class="breadcrumbs">
    <ul>
                                    <li class="home" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="{{route('home')}}" title="Ir a página de inicio" itemprop="url"><span itemprop="title">Inicio</span></a>
            
                                <span class="sep"></span>
                                
                </li>
                                    <li class="cms_page">
                    <span class="last-crumb">Formas de Pago</span>
            
                                
                </li>
            </ul>
</div>
                    <div class="preface"></div>
                    <div class="col-main">
                        <div class="std"><p class="p1"><img title="Formas de pago" alt="" src=""></p>
<p class="p1">Contamos con los siguientes métodos de pago:</p>
<ul>
<li class="li1"><b>Tarjeta de Crédito o de Debito (Visa/MasterCard).</b></li>
<li class="li1"><b>Cuenta Paypal.</b></li>
<li class="li1"><b>Transferencia Interbancaria.</b></li>
<li class="li1"><b>Depósito Bancario.</b></li>
</ul>
<p class="p2">&nbsp;</p>
<p class="p1"><b>CONDICIONES:</b></p>
<p class="p1">&nbsp;</p>
<ul>
<li class="li1"><b>Tarjeta de crédito o débito (Visa/MasterCard) y Paypal.&nbsp;</b></li>
</ul>
<p class="p4">&nbsp;Para efectos de seguridad de nuestros clientes 
evitando un posible fraude o robo de identidad&nbsp; es necesario 
adjuntar los siguientes comprobantes de pago:</p>
<ol class="ol1">
<li class="li4">Foto o scanner de tu identificación oficial (INE ó IFE VIGENTES), por ambos lados del titular de la tarjeta.</li>
<li class="li4">Foto o scanner de tu tarjeta con la realizaste la compra o estás registrado en Paypal, solo por la parte del frente.</li>
</ol>
<p class="p5">Los puedes mandar al correo: pedidosonline@laravel.com o en el mismo mail que te llegue al hacer tu pedido.</p>
<p><span style="font-size: 12px;">*Si no cumples con los siguientes 
requisitos, tu compra no podrá ser procesada y tendrá que ser cancelada 
sin tu consentimiento ya que son políticas de seguridad emitidas por la 
empresa.</span></p>
<ol>
<li><span style="font-size: 12px;">El INE debe ser forzosamente de la 
persona titular de la tarjeta con la que se haya hecho el cargo, en caso
 de ser pago con Paypal tendrá que ser el INE del titular de la cuenta.</span></li>
<li><span style="font-size: 12px;">Si se hacen más de 3 intentos fallidos pagando con la misma tarjeta de débito o crédito.</span></li>
<li><span style="font-size: 12px;">Si registraste más de 2 tarjetas para la realización de tu compra deberás informarlo mandando un correo a: </span><a style="font-size: 12px;" href="mailto:pedidosonline@laravel.com">pedidosonline@laravel.com</a><span style="font-size: 12px;"> ya que para el sistema es un posible fraude.</span></li>
</ol>
<p><span style="font-size: 12px; background-color: #ffff99;">Si no 
mandas tus comprobantes en 5 días hábiles después de haber realizado tu 
compra, ésta se cancelará sin tu consentimiento y se te hará una 
devolución total por el mismo medio por el que se pagó, dicha 
cancelación se verá reflejada en tu cuenta bancaria dentro de los 
próximos 2 días hábiles.</span></p>
<p><span style="font-size: 12px;">Por cuestiones de seguridad, se 
recomienda que los menores de edad realicen la compra siempre 
acompañados de una persona adulta. No nos hacemos responsables por las 
compras realizadas por menores de edad. Los métodos de pagos de Tarjeta 
de Crédito, Tarjeta de Débito y Paypal están restringidos para los 
menores de edad por el requerimiento de documentos legales.</span></p>
<p class="p3">&nbsp;</p>
<ul>
<li class="li1"><b>Transferencia interbancaria y depósito bancario.</b></li>
</ul>
<p class="p1">Si seleccionas como método de pago alguno de estos dos, lo
 único que tienes que hacer es mandar tu comprobante de pago a nuestro 
correo: <a href="mailto:pedidosonline@laravel.com">pedidosonline@laravel.com</a> ya sea váucher para el depósito bancario o el comprobante electrónico de la transferencia interbancaria.</p>
<p class="p5"><span style="background-color: #ffff99;">Si no mandas tus 
comprobantes en 3 días hábiles después de haber realizado tu compra, 
ésta se cancelará sin tu consentimiento por políticas de la empresa y se
 te solicitará un número de cuenta para realizar la devolución.</span></p>
<p class="p5">&nbsp;</p>
<p>&nbsp;</p></div>                    </div>
                    <div class="postscript"></div>
                </div>
            </div>
            <div class="main-bottom-container"></div>
        </div>

@stop