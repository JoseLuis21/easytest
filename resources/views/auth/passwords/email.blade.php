@extends('layouts.app')

<!-- Main Content -->
@section('content')


{!! Form::open(array('url' => '/password/email', 'method' => 'POST', 'class'=> '')) !!}
<div class="ui one column center aligned grid">
  <div class="column six wide form-holder">
    <h2 class="center aligned header form-head">Olvidaste tu Contraseña?</h2>    
     @if (session('status'))
        <div class="message ui">
            {{ session('status') }}
        </div>
    @endif
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
        {!! Form::text('email', old('email'), array('placeholder'=> 'Email', 'class' => '')); !!}
        <i class="mail icon"></i>        
      </div>       
      <div class="inline field">
         {!! Form::submit('Enviar Email', ['class' => 'ui button primary']); !!}                 
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}


@endsection
