@extends('layouts.app')
@section('content')
 <div class="main-container col1-layout">
    <div class="main-top-container"></div>
        <div class="main container">
            <div class="inner-container">
            <div class="preface"></div>
            <div class="col-main">
                <div class="page-title">
                    <h1>¿Olvidaste tu contraseña? </h1>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form role="form" method="POST" action="{{ url('/password/reset') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="fieldset">
                        <h2 class="legend">Recupere su contraseña aquí </h2>
                        <p>
                            Introduzca su dirección de correo electrónico a continuación. Usted recibirá un enlace para restablecer tu contraseña.
                        </p>
                        <ul class="form-list">
                            <li>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="required"><em>*</em>Email</label>
                                    <div class="input-box">
                                        <input id="email" type="email" class="input-text required-entry validate-email" name="email" value="{{ $email or old('email') }}" required autofocus>

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
                    <div class="buttons-set">
                        <p class="required">* Campos Requeridos</p>
                        <p class="back-link">
                            <a href="">
                                <small>« </small>Volver a inicio
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
            <div class="postscript"></div>
            </div>
        </div>
        <div class="main-bottom-container"></div>
</div>

@stop