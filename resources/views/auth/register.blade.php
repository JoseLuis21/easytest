@extends('layouts.app')

@section('content')



{!! Form::open(array('url' => '/register', 'method' => 'POST', 'class'=> '')) !!}
<div class="ui one column center aligned grid">
  <div class="column six wide form-holder">
    <h2 class="center aligned header form-head">Registrarse</h2>
    <div class="ui form">
        @if ($errors->has('name'))           
        <div class="ui message">
          <i class="close icon"></i>
          <div class="header">
            {{ $errors->first('name') }}
          </div>
        </div>
        @endif
      <div class="ui left icon fluid input login">
        {!! Form::text('name', old('name'), array('placeholder'=> 'Nombre', 'class' => '')); !!}
        <i class="user icon"></i>        
      </div>
        @if ($errors->has('email'))           
            <div class="ui message">
              <i class="close icon"></i>
              <div class="header">
                {{ $errors->first('email') }}
              </div>
            </div>
        @endif
      <div class="ui left icon fluid input login">
        {!! Form::text('email', old('email'), array('placeholder'=> 'Email', 'class' => '')); !!}
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
        {!! Form::password('password', ['placeholder' => 'Password']) !!}
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
        {!! Form::password('password_confirmation', ['placeholder' => 'Password Confirmación']) !!}
        <i class="privacy icon"></i>       
      </div>
      
      <div class="inline field">
         {!! Form::submit('Registrarse', ['class' => 'ui button primary']); !!}
                    
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}























@endsection
