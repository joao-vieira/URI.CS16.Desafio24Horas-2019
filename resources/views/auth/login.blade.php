@extends('website')

@section('content')
<section id="wrapper">
        <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material AVAST_PAM_loginform" id="loginform" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h3 class="box-title m-b-20">Login</h3>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Username" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex no-block align-items-center">
                                <div class="checkbox checkbox-primary p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup" {{ old('remember') ? 'checked' : '' }}> Lembrar-me </label>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div> 
                                <div class="ml-auto">
                                    <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fa fa-lock m-r-5" href="{{ route('password.request') }}"></i> Esqueceu a senha?</a> 
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <a href="/dashboard" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Entrar</a>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" id="recoverform" action="index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recuperar Senha</h3>
                                <p class="text-muted">Digite seu e-mail e as instruções serão enviadas para você! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
