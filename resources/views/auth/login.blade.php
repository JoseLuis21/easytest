@extends('layouts.app')

@section('content')

{!! Form::open(array('url' => '/login', 'method' => 'POST', 'class'=> '')) !!}
<div class="ui one column center aligned grid">
  <div class="column six wide form-holder">
    <h2 class="center aligned header form-head">Ingresar</h2>
    <div class="ui form">
      <h1>JOse</h1>
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
        {!! Form::password('password', ['placeholder' => 'Paswoord']) !!}
        <i class="privacy icon"></i>
      </div>
      <div class="inline field">
        <div class="ui checkbox">
          {!! Form::checkbox('remember'); !!}
          <label>Recuerdame</label>
        </div>
      </div>
      <div class="inline field">
         {!! Form::submit('Ingresar a EasyTest', ['class' => 'ui button primary']); !!}
         {!! link_to('/password/reset', $title = 'Olvidaste tu contraseña?', $attributes = array('class' => 'ui button secondary'), $secure = null); !!}
      </div>
    </div>
  </div>
</div>
{!! Form::close() !!}





@endsection
