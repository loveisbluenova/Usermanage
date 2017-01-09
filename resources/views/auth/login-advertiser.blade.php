@extends('app')
    @include('partials.header')
@section('template_title')
    Login-Advertiser
@endsection
@section('content')
      
        <div class="main-container">
            <section class="pt-sm-16 pb-sm-16 pt-xs-16 pb-xs-16">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 text-left mb-xs-24">
                            <h1 class="color-green">Register<br> as Advertiser</h1>
                            <img alt="Register as Influencer" src="img/register-advertiser.png">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h3>Log In</h3>
                            <div class="panel-body">

                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <div class="form-group">
                                                 <strong>{{ Lang::get('auth.whoops') }}</strong> {{ Lang::get('auth.someProblems') }}<br /><br />
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                    <li>{!! HTML::link(url('/password/email'), Lang::get('auth.forgot_message'), array('id' => 'forgot_message',)) !!}</li>
                                                </ul>

                                            </div>
                                        </div>
                                
                                    @endif
                            </div>
                                {!! Form::open(array('url' => 'auth/login', 'method' => 'POST', 'class' => 'lockscreen-credentials form-horizontal', 'role' => 'form')) !!}
                                    <div class="form-group has-feedback">
                                        {!! Form::label('email', Lang::get('auth.email') , array('class' => 'col-sm-4 control-label')); !!}
                                        <div class="col-sm-6">
                                            {!! Form::email('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_email'), 'required' => 'required',)) !!}
                                            <span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        {!! Form::label('password', Lang::get('auth.password') , array('class' => 'col-sm-4 control-label')); !!}
                                        <div class="col-sm-6">
                                            {!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => Lang::get('auth.ph_password'), 'required' => 'required',)) !!}
                                            <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-offset-1 col-sm-offset-4">
                                            <div class="checkbox">
                                                {!! Form::checkbox('remember', 'remember', true, array('id' => 'remember')); !!}
                                                {!! Form::label('remember', Lang::get('auth.rememberMe')); !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        {!! Form::button(Lang::get('auth.login'), array('class' => 'btn btn-primary','type' => 'submit')) !!}
                                        {!! HTML::link(url('/password/email'), Lang::get('auth.forgot'), array('id' => 'forgot', 'class' => 'btn btn-link')) !!}
                                    </div>
                                </div>
                                <p class="text-center">Or</p>
                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        {!! HTML::link(route('social.redirect', ['provider' => 'facebook']), 'Facebook', array('class' => 'btn btn-lg btn-primary btn-block facebook')) !!}
                                        {!! HTML::link(route('social.redirect', ['provider' => 'twitter']), 'Twitter', array('class' => 'btn btn-lg btn-primary btn-block twitter')) !!}
                                        {!! HTML::link(route('social.redirect', ['provider' => 'google']), 'Google +', array('class' => 'btn btn-lg btn-primary btn-block google')) !!}
                                        {!! HTML::link(route('social.redirect', ['provider' => 'instagram']), 'Instagram', array('class' => 'btn btn-lg btn-primary btn-block instagram')) !!}                               
                                    </div>
                                </div>
                        
                            </div>    
                            
                        </div>

                    </div>
                    
                </div>
                    
            </section>
        </div>
    
@endsection