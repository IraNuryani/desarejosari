<!doctype html>
<html lang="en">
  <head>

    {{-- <style>
      body {
        background: linear-gradient(to bottom, #e3f3f9, #b8d5f2);
      }
    </style> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Rejosari | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/e1d399ff20.js" crossorigin="anonymous"></script>
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- My Style -->
    <link rel="stylesheet" href="/css/style.css">

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="/css/mystyle.css" rel="stylesheet" id="bootstrap-css">

    <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">

{{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="{{ asset('user_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/style.css') }}">
<!------ Include the above in your HEAD tag ---------->

    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display:none;
      }
    </style>

  </head>
  <body style="background-color: #ffffff">
    {{-- <div  style="background: linear-gradient(to right bottom, rgb(0, 119, 255), rgb(0, 162, 255));"> --}}
        @include('partials.navbar')
    
    {{-- <div class="untree_co-hero overlay" style="background-image: url('img/wisata.jpg');"> --}}
      <div class="container mt-4">
          @yield('container')
      </div>

      <div>
        @include('partials.footer')
      </div>
    {{-- </div> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    {{-- </div> --}}


{{-- SCRIPT JS --}}

    <script src="{{ asset('user_assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('user_assets/js/aos.js') }}"></script>
    <script src="{{ asset('user_assets/js/custom.js') }}"></script>

  </body>
</html>