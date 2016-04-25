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

    <style type="text/css">
     body {
        background: url('images/background.jpg') fixed;
        background-size: cover;
        padding: 0;
        margin: 0;
      }

      .form-holder {
        background: rgba(255,255,255,0.3);
        margin-top: 10%;
        border-radius: 3px;
        border-radius: 0.28571429rem;
      }

      .form-head {
        font-size: 30px;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #fff;
        text-shadow: 0 0 30px #000;
        margin: 15px auto 30px auto;
      }

      .remember-me {
        text-align: left;
      }
      .login
      {
        margin-bottom: .5em;
      }
      .barra
      {
        background: rgba(255,255,255,0.8) !important;
        font-size: 30px;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin: 15px auto 30px auto;
      }

  </style>

</head>
<body id="app-layout" background="images/background.jpg">

    <div class="ui large menu barra">
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
    
   

    @yield('content')

    <!-- JavaScripts -->
    <script src={{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js")}}></script>
    <script src={{asset("semantic/semantic.js")}}></script>   
    <script type="text/javascript">
        $(function(){
            $('.ui.dropdown').dropdown();
            $('.message .close').on('click', function() {
                $(this).closest('.message').transition('fade');
            });
        });
    </script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
