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
    <link href="{{asset('css/semantic.css')}}" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body id="app-layout">


    <div class="ui secondary  menu">
      <a class="item" href="{{ url('/') }}">
         Laravel
      </a>
      <a class="item" href="{{ url('/home') }}">
        Home
      </a>
      <a class="item active">
        Friends
      </a>
      <div class="right menu">
        <div class="item">
            @if (Auth::guest())
                <a class="ui item" href="{{ url('/login') }}">Login</a>
                <a class="ui item" href="{{ url('/register') }}">Register</a>
            @else
                <a href="{{ url('/logout') }}" class="ui item">
                  Logout {{ Auth::user()->name }}
                </a>                
            @endif
        </div>
        
      </div>
    </div>
   

    @yield('content')

    <!-- JavaScripts -->
    <script src={{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js")}}></script>
    <script src={{asset("js/semantic.js")}}></script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
