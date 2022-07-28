<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('splidejs/css/splide.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body style="background-color: #fff !important">
    <div id="app">
    
        @include('header')
        @if (Request::path() == '/')
            @include('slider')

            @include('level_one_deal')

            @include('level_two_deal')

            @include('level_three_deal')
        @endif

        @if (Request::path() != '/')
            @yield('content')
        @endif

        @if (Request::path() == '/')
            @include('latest_product')
        @endif

        @include('footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('splidejs/js/splide.min.js') }}"></script>
    <script src="{{ asset('splidejs/js/splide-extension-auto-scroll.min.js') }}"></script>
    <script>
      document.addEventListener( 'DOMContentLoaded', function() {
        
        new Splide( '.hero-slider' , {
          type   : 'loop',
          perPage: 1,
          perMove: 1,
          speed: 400,
          gap    : '1rem',
          autoplay: true,
          interval: 2500,
          pagination: true,
          arrows: false,
          pauseOnHover: true,
          rewind: true,
          lazyLoad: 'nearby'
        }).mount();


          let timeOutInterval = 2000;
          for (let index = 1; index < 4;) {
            const hasOffer = document.querySelector(`.offer${index}`);
            if(hasOffer) {
              new Splide( `.offer${index}` , {
                type   : 'loop',
                perPage: 5,
                perMove: 1,
                speed: 400,
                gap: '15px',
                autoplay: true,
                interval: timeOutInterval,
                pagination: false,
                pagination: false,
                pauseOnHover: true,
                rewind: true,
                lazyLoad: 'nearby',
                breakpoints: {
                '1024': {
                  perPage: 3,
                },
                '768': {
                  perPage: 2,
                },
              }
              }).mount(); 
              timeOutInterval += 500;
            }

            index++;
          }

      });
    </script>
</body>
</html>
