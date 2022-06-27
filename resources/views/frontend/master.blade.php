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
  <link href="{{asset('js/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
    <title>Hello, world!</title>
  </head>
  <body>
    
    @include('frontend.navbar')
    @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->
    <a href='https://www.freepik.com/vectors/cute-background'>Cute background vector created by rawpixel.com - www.freepik.com</a>
    <a href="https://storyset.com/job">Job illustrations by Storyset</a>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset("bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="{{asset("bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset('js/jquery-ui/external/jquery/jquery.js')}}"></script>
    <script src="{{asset('js/jquery-ui/jquery-ui.js')}}"></script>
  </body>
</html>