<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('/node_modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/node_modules/weathericons/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/node_modules/weathericons/css/weather-icons-wind.min.css')}}">
    <link rel="stylesheet" href="{{asset('/node_modules/summernote/dist/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('/node_modules/summernote/dist/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugin/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugin/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugin/datatables/select.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugin/datatables/dataTables.bootstrap4.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/components.css') }}">


</head>

<body>
    <div class="main-wrapper" id="app">
        {{-- Add Nav --}}
        @include('layouts.nav')

        {{-- Add Sidebar --}}
        @include('layouts.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">

                <div class="section-header">
                    <h1>@yield('heading')</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item">@yield('page')</div>
                    </div>
                </div>
                @yield('content')
            </section>
        </div>

        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                    Nauval Azhar</a>
            </div>
            <div class="footer-right">
                2.3.0
            </div>
        </footer>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="{{asset('/node_modules/simpleweather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('/node_modules/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('/node_modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('/node_modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('/node_modules/summernote/dist/summernote-bs4.js')}}"></script>
    <script src="{{asset('/node_modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
    <script src="{{asset('/assets/plugin/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('/assets/plugin/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('/assets/plugin/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/plugin/datatables/dataTables.select.min.js')}}"></script>
    <script src="{{asset('/assets/plugin/datatables/jquery-ui.min.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{asset('/assets/js/scripts.js')}}"></script>
    <script src="{{asset('/assets/js/custom.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{asset('/assets/js/page/index-0.js')}}"></script>
    <script src="{{asset('/assets/plugin/datatables/modules-datatables.js')}}"></script>
    @stack('scripts')

</body>

</html>