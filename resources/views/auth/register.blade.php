@extends('layouts.app')
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

    <form action="{{ url('/register') }}" method="POST" id="form-validate" role="form">
        {{ csrf_field() }}
        <div class="fieldset">
            <input type="hidden" name="success_url" value="">
            <input type="hidden" name="error_url" value="">
            <input type="hidden" name="form_key" value="KKt1fohUp3Xt3FuH">
            <h2 class="legend">Información Personal</h2>
            <ul class="form-list">
                <li class="fields">
                    <div class="customer-name">
                        <div class="field name-firstname">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="firstname" class="required">
                                    <em>*</em>Nombre
                                </label>                           
                                <input id="name" type="text" class="input-text required-entry" name="name" maxlength="255" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="field name-firstname">
                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <label for="lastname" class="required">
                                    <em>*</em>Apellidos
                                </label>                           
                                <input id="lastname" type="text" class="input-text required-entry" name="lastname" maxlength="255" value="{{ old('lastname') }}" required autofocus>
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    
                    <div class="input-box">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="required">
                                <em>*</em>Email
                            </label>
                            <div class="input-box">
                                <input id="email" type="email" class="input-text validate-email required-entry" name="email" value="{{ old('email') }}" required>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                </li>
            </ul>
        </div>
        <div class="fieldset">
            <h2 class="legend">Información de Acceso</h2>
            <ul class="form-list">
                <li class="fields">
                    <div class="field">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="required"><em>*</em>Contraseña</label>
                                <div class="input-box">
                                     <input type="password" name="password" id="password" title="Contraseña" class="input-text required-entry validate-password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>                        
                    </div>
                    <div class="field">
                        <label for="confirmation" class="required"><em>*</em>Confirmar contraseña</label>
                        <div class="input-box">
                            <input id="password-confirm" type="password" class="input-text required-entry validate-cpassword" name="password_confirmation" required>
                        </div>
                    </div>
                </li>
            </ul>
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