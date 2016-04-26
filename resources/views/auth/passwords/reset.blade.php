@extends('layouts.app')

@section('content')


{!! Form::open(array('url' => '/password/reset', 'method' => 'POST', 'class'=> '')) !!}
<div class="ui one column center aligned grid">
  <div class="column six wide form-holder">
    <h2 class="center aligned header form-head">Cambiar tu Contraseña</h2>
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="ui form">
        @if ($errors->has('email'))           
            <div class="ui message">
              <i class="close icon"></i>
              <div class="header">
                {{ $errors->first('email') }}
              </div>
            </div>
        @endif
      <div class="ui left icon fluid input login">
        {!! Form::text('email', $email, array('placeholder'=> 'Email', 'class' => '')); !!}
        <i class="mail icon"></i>        
      </div>
       @if ($errors->has('password'))
            <div class="ui message">
              <i class="close icon"></i>
              <div class="header">
                {{ $errors->first('password') }}
              </div>
            </div>
        @endif
      <div class="ui left icon fluid input login">
        {!! Form::password('password', ['placeholder' => 'Paswoord']) !!}
        <i class="privacy icon"></i>       
      </div>
       @if ($errors->has('password_confirmation'))
            <div class="ui message">
              <i class="close icon"></i>
              <div class="header">
                {{ $errors->first('password_confirmation') }}
              </div>
            </div>
        @endif
      <div class="ui left icon fluid input login">
        {!! Form::password('password_confirmation', ['placeholder' => 'Password Confirmacion']) !!}
        <i class="privacy icon"></i>       
      </div>
      <div class="inline field">
         {!! Form::submit('Cambiar Contraseña', ['class' => 'ui button primary']); !!}
                 
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}




@endsection
