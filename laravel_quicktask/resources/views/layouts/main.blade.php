<!DOCTYPE html>

<head>
    <title>E-clothes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"></script>
    <link rel="stylesheet" href="{{ asset('bower_components/admin_template/css/bootstrap.min.css') }}">
    <link href="{{ asset('bower_components/admin_template/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('bower_components/admin_template/css/style-responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('bower_components/admin_template/css/font.css') }}" type="text/css" />
    <link href="{{ asset('bower_components/admin_template/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bower_components/admin_template/css/morris.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('bower_components/admin_template/css/monthly.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('bower_components/admin_template/js/jquery2.0.3.min.js') }}"></script>
    <script src="{{ asset('bower_components/admin_template/js/raphael-min.js') }}"></script>
    <script src="{{ asset('bower_components/admin_template/js/morris.js') }}"></script>
</head>

<body>
    <section id="container">
        <!-- header start -->
        @include('layouts.header')
        {{-- header end --}}

        <!--sidebar start-->
        @include('layouts.sidebar')
        <!--sidebar end-->

        {{-- main content start --}}
        @yield('main-content')
        {{-- main content end --}}
    </section>

    <script src="{{ asset('bower_components/admin_template/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bower_components/admin_template/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('bower_components/admin_template/js/scripts.js') }}"></script>
    <script src="{{ asset('bower_components/admin_template/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('bower_components/admin_template/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('bower_components/admin_template/js/jquery.scrollTo.js') }}"></script>
    <script src="{{ asset('bower_components/admin_template/js/monthly.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/home.js') }}" type="text/javascript"></script>
</body>

</html>
