@extends('layouts.app')
@section('content')
    <!-- Header-->
     <!-- Intro Header-->
     <div class="container">
        <div class="row">
            <div class="col-md-12">
      <div class="intro-body">
        <!-- Login-->
        <h2></h2>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<div class="panel" style="background-color: rgba(255,255,255,0.3);">
        <br>
        <br>

<div class="row row fadeIn">
        <div class="col-md-4 col-md-offset-4">
            <div class="form-signin">
                <div class="panel-group">
                    {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Alamat Email', ['class'=>'col-md-1 control-label sr-only']) !!}
                        <div class="col-md-10">
                            {!! Form::email('email', null, ['placeholder'=>'Email address','class'=>'form-control']) !!}
                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label('password', 'Password', ['class'=>'col-md-1 control-label sr-only']) !!}
                        <div class="col-md-10">
                            {!! Form::password('password', ['placeholder'=>'Password','class'=>'form-control']) !!}
                            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-lg btn-universal btn-block">Sign in</button>
                            
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
      </div>
  </div>
    </div>
      </div>
  </div>
  
    </header>
 @endsection