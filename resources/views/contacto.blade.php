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
                    <span class="last-crumb">Contacto</span>
            
                                
                </li>
            </ul>
</div>
                    <div class="preface"></div>
                    <div class="col-main">
                                                    <div class="page-title">
        <h1>Contacto</h1>
    </div>
<div class="std"><div class="contacto">
<div class="right"><a class="bottom" href="{{route('preguntas')}}">Ir a Preguntas Frecuentes</a></div>
<div class="informacion">
<h3>Teléfono</h3>
<p>Estamos para servirte de lunes a viernes de 10:00 a 18:00 hrs. al teléfono (55) 5709-3716</p>
<br>
<h3>Correo Electrónico</h3>
<p>Escríbenos a <a href="mailto:pedidos@laravelonline.com">pedidosonline@laravel.com</a> y con gusto resolveremos todas tus dudas.</p>
</div>
&nbsp;
<div id="messages_product_view"></div>
<form action="" id="contactForm" method="post">
    <div class="fieldset">
                <ul class="form-list">
            <li>
                <div class="field">
                    <label for="name" class="required"><em>*</em>Nombre</label>
                    <div class="input-box">
                        <input name="name" id="name" title="Nombre" class="input-text required-entry" type="text">
                    </div>
                </div>
            </li>
            <li>
                <div class="field">
                    <label for="email" class="required"><em>*</em>E-mail</label>
                    <div class="input-box">
                        <input name="email" id="email" title="Correo electrónico" class="input-text required-entry validate-email" type="text">
                    </div>
                </div>
            </li>
            <li style="display: none">
                <label for="telephone">Teléfono</label>
                <div class="input-box">
                    <input name="telephone" id="telephone" title="Teléfono" class="input-text" type="text">
                </div>
            </li>
            <li class="wide">
                <label for="comment" class="required"><em>*</em>Duda</label>
                <div class="input-box">
                    <textarea name="comment" id="comment" title="Comentario" class="required-entry input-text" cols="5" rows="3"></textarea>
                </div>
            </li>
        </ul>
    </div>
    <div class="buttons-set">
        <p class="required">*Selección Requerida</p>
        <input type="text" name="hideit" id="hideit" style="display:none !important;">
        <button type="submit" title="Enviar" class="button"><span><span>Enviar</span></span></button>
    </div>
</form>
<script type="text/javascript">
//<![CDATA[
    var contactForm = new VarienForm('contactForm', true);
//]]>
</script>
</div></div>                    </div>
                    <div class="postscript"></div>
                </div>
            </div>
            <div class="main-bottom-container"></div>
        </div>

@stop