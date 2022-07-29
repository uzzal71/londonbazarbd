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

    <style type="text/css">


#navbar ul li a {
  color:  #fff !important;
  border-right:  1px solid #fff !important;
}

#navbar ul li a:last-child {
  border-right:  none;
}

.btn .bx {
  vertical-align: inherit;
  margin-top: -3px;
  font-size: 1.15rem;
}

.form-control {
  height: calc(2.5rem + 2px);
  padding: 0.5rem 1.5rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.btn {
  font-size: 1rem;
  padding: 0.5rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
}

.bx.icon-single {
  font-size: 1.5rem;
}

.form-inline .form-control {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.form-inline .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) {
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .form-inline .form-control {
    width: 210px;
  }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
  .form-inline .form-control {
    width: 440px;
  }
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
  .form-inline .form-control {
    width: 600px;
  }
}

.sub-menu.navbar-light .navbar-nav .active > .nav-link,
.sub-menu.navbar-light .navbar-nav .nav-link.active,
.sub-menu.navbar-light .navbar-nav .nav-link.show,
.sub-menu.navbar-light .navbar-nav .show > .nav-link {
  border-bottom: 3px solid #007bff;
  color: #007bff;
}

.navbar .navbar-toggler {
  border: none;
}

.navbar-light .navbar-toggler:focus {
  outline: none;
}

.navbar {
  /*padding: 1rem;*/
}

.main-menu {
  position: relative;
  z-index: 3;
}

.sub-menu {
  position: relative;
  z-index: 2;
  padding: 0 1rem;
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .sub-menu {
    padding: 0 1rem;
  }

  .sub-menu.navbar-expand-md .navbar-nav .nav-link {
    padding: 1rem 1.5rem;
  }
}

.navbar.bg-light {
  background: #fff !important;
  box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.1);
}

.user-dropdown .nav-link {
  padding: 0.15rem 0;
}

#sidebar {
  background: #fff;
  height: 100%;
  left: -100%;
  top: 0;
  bottom: 0;
  overflow: auto;
  position: fixed;
  transition: 0.4s ease-in-out;
  width: 84%;
  z-index: 5001;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
  padding: 1.25rem 1rem 1rem;
}

#sidebar.active {
  left: 0;
}

#sidebar .sidebar-header {
  background: #fff;
  border-bottom: 1px solid #e4e4e4;
  padding-bottom: 1.5rem;
}

#sidebar ul.components {
  padding: 20px 0;
  border-bottom: 1px solid #e4e4e4;
  margin-bottom: 40px;
}

#sidebar ul p {
  color: #fff;
  padding: 10px;
}

#sidebar ul li a {
  padding: 10px 16px;
  font-size: 1.1em;
  display: block;
  color: #000;
}

#sidebar ul li a:hover {
  color: #7386d5;
  background: #fff;
}

#sidebar ul li.active > a,
#sidebar a[aria-expanded="true"] {
  color: #007bff;
  background: #e6f2ff;
  border-radius: 6px;
}

a[data-toggle="collapse"] {
  position: relative;
}

#sidebar .links .dropdown-toggle::after {
  display: block;
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
}

.overlay {
  background: rgba(0, 0, 0, 0.7);
  height: 100vh;
  left: 0;
  position: fixed;
  top: 0;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  z-index: -1;
  width: 100%;
  opacity: 0;
}

.overlay.visible {
  opacity: 1;
  z-index: 5000;
}

/* .mobiHeader .menuActive~.overlay {
    opacity: 1;
    width: 100%;
} */


.search-bar {
  position: relative;
  z-index: 2;
  box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.1);
}

.search-bar .form-control {
  width: calc(100% - 45px);
}

.avatar {
  border-radius: 50%;
  width: 4.5rem;
  height: 4.5rem;
  margin-right: 8px;
}

.avatar.avatar-xs {
  width: 2.25rem;
  height: 2.25rem;
}

.user-dropdown .dropdown-menu {
  left: auto;
  right: 0;
}

</style>
    
</head>
<body style="background-color: #fff !important">
    <div id="app">

        @include('navbar')
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

<script type="text/javascript">
  $(document).ready(function() {
  $("#sidebarCollapse").on("click", function() {
    $("#sidebar").addClass("active");
  });

  $("#sidebarCollapseX").on("click", function() {
    $("#sidebar").removeClass("active");
  });

  $("#sidebarCollapse").on("click", function() {
    if ($("#sidebar").hasClass("active")) {
      $(".overlay").addClass("visible");
      console.log("it's working!");
    }
  });

  $("#sidebarCollapseX").on("click", function() {
    $(".overlay").removeClass("visible");
  });
});

</script>

    @yield('scripts')
</body>
</html>
