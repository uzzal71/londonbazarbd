<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title : 'Stitch Shop' }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('splidejs/css/splide.min.css') }}">
    <script src="{{ asset('splidejs/js/splide.min.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

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

            @include('latest_product')
        @else
            @yield('content')
        @endif

        @include('footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/zoom-image.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
<script>
     new Splide( '.hero-slider' , {
      type   : 'loop',
      perPage: 1,
      perMove: 1,
      speed: 400,
      gap    : '1rem',
      autoplay: true,
      interval: 2500,
      arrow: true,
      pagination: true,
      arrows: false,
      pauseOnHover: true,
      rewind: true,
      lazyLoad: 'nearby'
    }).mount();
</script>


<script type="text/javascript">
new Splide('.offer1' , {
  type   : 'loop',
  perPage: 5,
  perMove: 1,
  speed: 400,
  gap: '15px',
  autoplay: true,
  interval: 2000,
  arrow: true,
  pagination: false,
  pauseOnHover: true,
  rewind: true,
  lazyLoad: 'nearby',
  breakpoints: {
  '1024': {
    perPage: 3,
    arrow: true,
  },
  '768': {
    perPage: 2,
    arrow: true,
  },
}
}).mount();
</script>


<script type="text/javascript">
new Splide('.offer2' , {
  type   : 'loop',
  perPage: 5,
  perMove: 1,
  speed: 400,
  gap: '15px',
  autoplay: true,
  interval: 2000,
  arrow: true,
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
</script>


<script type="text/javascript">
new Splide('.offer3' , {
  type   : 'loop',
  perPage: 5,
  perMove: 1,
  speed: 400,
  gap: '15px',
  autoplay: true,
  interval: 2000,
  arrow: true,
  pagination: false,
  pauseOnHover: true,
  rewind: true,
  lazyLoad: 'nearby',
  breakpoints: {
  '1024': {
    perPage: 3,
    arrow: true,
  },
  '768': {
    perPage: 2,
    arrow: true,
  },
}
}).mount();
</script>


<script type="text/javascript">
new Splide('.offer4' , {
  type   : 'loop',
  perPage: 5,
  perMove: 1,
  speed: 400,
  gap: '15px',
  autoplay: true,
  interval: 2000,
  arrow: true,
  pagination: false,
  pauseOnHover: true,
  rewind: true,
  lazyLoad: 'nearby',
  breakpoints: {
  '1024': {
    perPage: 3,
    arrow: true,
  },
  '768': {
    perPage: 2,
    arrow: true,
  },
}
}).mount();
</script>

    @yield('scripts')
</body>
</html>
