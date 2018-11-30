@extends('layouts.headerFooter')
@section('content')

<div class="main-container col1-layout">
            <div class="main-top-container"></div>
            <div class="main container">
                <div class="inner-container">
                                        <div class="preface"></div>
                    <div class="col-main">
                                                

<div class="account-login">
    <div class="page-title">
        <h1>Ingresar o crear una cuenta</h1>
    </div>
            <form action="https://www.veerkamponline.com/customer/account/loginPost/" method="post" id="login-form">
    	<input name="form_key" type="hidden" value="UWcFT6UlKpmj5W5t">
        <div class="col2-set">
            <div class="col-1 new-users">
                <div class="content">
                    <h2>Usuarios Nuevos </h2>
                    <p>Al crear una cuenta en nuestra tienda, usted será
 capaz de realizar el proceso de compra más rápidamente, almacenar 
varias direcciones de envío, ver y rastrear sus pedidos en su cuenta y 
más. </p>
                </div>
            </div>
            <div class="col-2 registered-users">
                <div class="content">
                    <h2>Clientes Registrados</h2>
                    <p>Si usted tiene una cuenta con nosotros, por favor conectarse. </p>
                    <ul class="form-list">
                        <li>
                            <label for="email" class="required"><em>*</em>Email</label>
                            <div class="input-box">
                                <input type="text" name="login[username]" id="email" class="input-text required-entry validate-email" title="Email">
                            </div>
                        </li>
                        <li>
                            <label for="pass" class="required"><em>*</em>Contraseña</label>
                            <div class="input-box">
                                <input type="password" name="login[password]" class="input-text required-entry validate-password" id="pass" title="Contraseña">
                            </div>
                        </li>
                                            </ul>
                    


                    <p class="required">* Campos Requeridos</p>
                </div>
            </div>
        </div>
        <div class="col2-set">
            <div class="col-1 new-users">
                <div class="buttons-set">
                    <a href="{{route('create-account')}}" class="button">
                        <span>
                            <span>Crear una Cuenta</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-2 registered-users">
                <div class="buttons-set">
                    <a href="https://www.veerkamponline.com/customer/account/forgotpassword/" class="f-left">¿Olvidaste tu contraseña? </a>
                    <button type="submit" class="button" title="Entrar" name="send" id="send2"><span><span>Entrar</span></span></button>
                </div>
            </div>
        </div>
            </form>
    <script type="text/javascript">
    //<![CDATA[
        var dataForm = new VarienForm('login-form', true);
    //]]>
    </script>
</div>
                    </div>
                    <div class="postscript"></div>
                </div>
            </div>
            <div class="main-bottom-container"></div>
        </div>

@stop