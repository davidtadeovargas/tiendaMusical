@extends('layouts.app')
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
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}" id="login-form">
    {{ csrf_field() }}
    	<input name="form_key" type="hidden" value="UWcFT6UlKpmj5W5t">
        <div class="col2-set">
            <div class="col-1 new-users">
                <div class="content">
                    <h2>Usuarios Nuevos </h2>
                    <p>
                        Al crear una cuenta en nuestra tienda, usted será
                         capaz de realizar el proceso de compra más rápidamente, almacenar 
                        varias direcciones de envío, ver y rastrear sus pedidos en su cuenta y 
                        más.
                    </p>
                </div>
            </div>
            <div class="col-2 registered-users">
                <div class="content">
                    <h2>Clientes Registrados</h2>
                    <p>Si usted tiene una cuenta con nosotros, por favor conectarse. </p>
                    <ul class="form-list">
                        <li>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="required"><em>*</em>Email</label>
                                <div class="input-box">
                                    <input id="email" type="email" class="input-text required-entry validate-email" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="required"><em>*</em>Contraseña</label>
                                <div class="input-box">
                                    <input id="password" type="password" class="input-text required-entry validate-password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Recordar contraseña
                                        </label>
                                    </div>
                                </div>
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
                    <a href="{{route('account-register')}}" class="button">
                        <span>
                            <span>Crear una Cuenta</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-2 registered-users">
                <div class="buttons-set">
                    <a href="{{ url('/password/reset') }}" class="f-left">¿Olvidaste tu contraseña? </a>
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