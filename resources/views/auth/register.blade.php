@extends('layouts.app')

{{-- Web site Title --}}
@section('title') {!! trans('site/user.register') !!} :: @parent @endsection

{{-- Content --}}
@section('content')
    <section id="register-section">
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h2>{!! trans('site/user.register') !!}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="oauth-login-buttons">
                        <a class="btn btn-social btn-facebook" onclick="fb_login();"><i class="fa fa-facebook"></i>&nbsp;|&nbsp;login</a>
                        <a class="btn btn-social btn-google" onclick="fb_login();"><i class="fa fa-google"></i>&nbsp;|&nbsp;sign in</a>
                    </div>
                    <div id="status">
                    </div>
                    <div class="word-separator">
                        <span>or</span>
                    </div>
                    {!! Form::open(array('url' => url('auth/register'), 'method' => 'post', 'files'=> true, 'class' => 'form-400')) !!}
                    <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                        <div class="controls">
                            {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name')) !!}
                            <span class="help-block">{{ $errors->first('name', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group  {{ $errors->has('username') ? 'has-error' : '' }}">
                        <div class="controls">
                            {!! Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Username')) !!}
                            <span class="help-block">{{ $errors->first('username', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                        <div class="controls">
                            {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) !!}
                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                        <div class="controls">
                            {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
                            <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        <div class="controls">
                            {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Password confirmation')) !!}
                            <span class="help-block">{{ $errors->first('password_confirmation', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="span-12 text-right">
                            <button type="submit" class="btn btn-success">
                                Register
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
