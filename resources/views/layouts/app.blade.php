<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:100,300,400,700')}}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('semantic/semantic.css')}}" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body id="app-layout">

    <div class="ui large menu">
    @if (Auth::guest())
      <a class="item" href="{{ url('/') }}">
         Bienvenido a EasyTest
      </a>
    @else
      <a class="item" href="{{ url('/home') }}">
         <i class="user icon"></i> {{ Auth::user()->name }}
      </a>
    @endif
      <div class="right menu">       
            @if (Auth::guest())
                <a class="item" href="{{ url('/login') }}"><i class="sign in icon"></i> Login</a>
                <a class="item" href="{{ url('/register') }}"><i class="add user icon"></i> Register</a>
            @else
                <a href="{{ url('/logout') }}" class="item">
                 <i class="sign out icon"></i> Cerrar Session 
                </a>                
            @endif
          
        </div>
      </div>      
    </div>
   

    @yield('content')

    <!-- JavaScripts -->
    <script src={{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js")}}></script>
    <script src={{asset("semantic/semantic.js")}}></script>

    <script type="text/javascript">
        $(function(){
            $('.ui.dropdown').dropdown();
        });
    </script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
