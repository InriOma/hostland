<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Backend Developer in Hostland</title>

  <style>
    @font-face {
        font-family: "Nunito-Bold";
        src: url("{{ asset('/fuentes/Nunito-Bold.ttf') }}");
    }

    @font-face {
        font-family: "Nunito-SemiBold";
        src: url("{{ asset('/fuentes/Nunito-SemiBold.ttf') }}");
    }
    @font-face {
        font-family: "Nunito-Regular";
        src: url("{{ asset('/fuentes/Nunito-Regular.ttf') }}");
    }
  </style>


  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.all.min.css') }}" />
  
  <link rel="stylesheet" type="text/css" href="{{ asset('css/hostland.css') }}" />
  
  @stack('css')
  
</head>

<body>
  
  @include('layouts.navbar')
  
  <div class="@yield('main-class', '')" controller="@yield('controller', '0')" id="app">
    <div class="container">
      @yield('content')
    </div>
  </div>
  
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/fontawesome.all.min.js') }}"></script>
  
  <script src="{{ asset('js/hostland.js') }}"></script>

  @stack('scripts')

  </body>
</html>
