@extends('layouts.app')

{{-- Web site Title --}}
@section('title') {!!  trans('site/user.login') !!} :: @parent @endsection

{{-- Content --}}
@section('content')
    <div class="row">
        <div class="page-header">
            <h2>Login into your Account</h2>
        </div>
    </div>
    <section id="login-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    {!! Form::open(array('url' => url('auth/login'), 'method' => 'post', 'files'=> true)) !!}
                    <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email', "E-Mail Address", array('class' => 'control-label')) !!}
                        <div class="controls">
                            {!! Form::text('email', null, array('class' => 'form-control')) !!}
                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                        {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                        <div class="controls">
                            {!! Form::password('password', array('class' => 'form-control')) !!}
                            <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-success" style="margin-right: 15px;">
                                Login
                            </button>
                            <a class="link-dark" onclick="$('#forgot-pass-form').toggle();">Forgot Your Password?</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- href="{{ url('/password/email') }}" -->
            <div class="row" id="forgot-pass-form" style="display:none;">
                <div class="col-sm-8 col-sm-offset-2">
                    {!! Form::open(array('url' => url('password/email'), 'method' => 'post', 'files'=> true)) !!}
                    <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email', "E-Mail Address", array('class' => 'control-label')) !!}
                        <div class="controls">
                            {!! Form::text('email', null, array('class' => 'form-control')) !!}
                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-info">
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>
                    {!! FOrm::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
