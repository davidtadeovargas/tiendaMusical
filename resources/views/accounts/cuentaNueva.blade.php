@extends('layouts.headerFooter')
@section('content')

 <div class="main-container col1-layout">
    <div class="main-top-container"></div>
    <div class="main container">
        <div class="inner-container">
            <div class="preface"></div>
                <div class="col-main">
                                                
<div class="account-create">
    <div class="page-title">
        <h1>Crear una cuenta</h1>
    </div>
    <form action="" method="post" id="form-validate">
        <div class="fieldset">
            <input type="hidden" name="success_url" value="">
            <input type="hidden" name="error_url" value="">
            <input type="hidden" name="form_key" value="KKt1fohUp3Xt3FuH">
            <h2 class="legend">Información Personal</h2>
            <ul class="form-list">
                <li class="fields">
                    <div class="customer-name">
                        <div class="field name-firstname">
                            <label for="firstname" class="required">
                                <em>*</em>Nombre
                            </label>
                            <div class="input-box">
                                <input type="text" id="firstname" name="firstname" title="Nombre" maxlength="255" class="input-text required-entry">
                            </div>
                        </div>
                        <div class="field name-lastname">
                            <label for="lastname" class="required">
                                <em>*</em>Apellidos
                            </label>
                            <div class="input-box">
                                <input type="text" id="lastname" name="lastname" title="Apellido" maxlength="255" class="input-text required-entry">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <label for="email_address" class="required">
                        <em>*</em>Email
                    </label>
                    <div class="input-box">
                        <input type="text" name="email" id="email_address" title="Email" class="input-text validate-email required-entry">
                    </div>
                </li>
            </ul>
        </div>
        <div class="fieldset">
            <h2 class="legend">Informaccion de Acceso</h2>
            <ul class="form-list">
                <li class="fields">
                    <div class="field">
                        <label for="password" class="required"><em>*</em>Contraseña</label>
                        <div class="input-box">
                            <input type="password" name="password" id="password" title="Contraseña" class="input-text required-entry validate-password">
                        </div>
                    </div>
                    <div class="field">
                        <label for="confirmation" class="required"><em>*</em>Confirmar contraseña</label>
                        <div class="input-box">
                            <input type="password" name="confirmation" title="Confirmar contraseña" id="confirmation" class="input-text required-entry validate-cpassword">
                        </div>
                    </div>
                </li>
            </ul>
<!--<script type="text/javascript">

    function toggleRememberMepopup(event){
        if($('remember-me-popup')){
            var viewportHeight = document.viewport.getHeight(),
                docHeight      = $$('body')[0].getHeight(),
                height         = docHeight > viewportHeight ? docHeight : viewportHeight;
            $('remember-me-popup').toggle();
            $('window-overlay').setStyle({ height: height + 'px' }).toggle();
        }
        Event.stop(event);
    }

    document.observe("dom:loaded", function() {
        new Insertion.Bottom($$('body')[0], $('window-overlay'));
        new Insertion.Bottom($$('body')[0], $('remember-me-popup'));

        $$('.remember-me-popup-close').each(function(element){
            Event.observe(element, 'click', toggleRememberMepopup);
        })
        $$('#remember-me-box a').each(function(element) {
            Event.observe(element, 'click', toggleRememberMepopup);
        });
    });

</script>-->
        </div>
        <div class="buttons-set">
            <p class="required">* Campos Requeridos</p>
            <p class="back-link">
                <a href="javascript:history.go(-1)" class="back-link">
                    <small>« </small>Volver
                </a>
            </p>
            <button type="submit" title="Enviar" class="button">
                <span>
                    <span>Enviar</span>
                </span>
            </button>
        </div>
    </form>

</div>
</div>
    <div class="postscript"></div>
</div>
</div>
<div class="main-bottom-container"></div>
</div>

@stop