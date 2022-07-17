<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
  
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/skin_color.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{asset('js/script.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
  <link href="{{asset('js/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
  <title>Hello, world!</title>
  @livewireStyles
  </head>
  <body>
    
    @include('frontend.navbar')
    @yield('content')

    
    <a href='https://www.freepik.com/vectors/cute-background'>Cute background vector created by rawpixel.com - www.freepik.com</a>
    <a href="https://storyset.com/job">Job illustrations by Storyset</a>
    
    @livewireScripts
    <script src="{{asset("bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset('js/jquery-ui/external/jquery/jquery.js')}}"></script>
    <script src="{{asset('js/jquery-ui/jquery-ui.js')}}"></script>
    {{-- <script>
      $( ".datepicker" ).datepicker({
        changeMonth: true,
      changeYear: true,
  });
  </script> --}}
  </body>
</html>

