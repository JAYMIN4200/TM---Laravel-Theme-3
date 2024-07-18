<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        @stack('title')

        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />

        <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
        <!-- Plugins Core Css -->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
        <!-- Custom Css -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
        <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
        <link href="{{asset('assets/css/styles/all-themes.css')}}" rel="stylesheet" />
        <!-- START: APP JS -->
        <link href="{{asset('assets/css/form.min.css')}}" rel="stylesheet">
        <!-- END: APP JS -->
    </head>

    <body id="main-container" class="default">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30">
                    <img class="loading-img-spin" src="{{ asset('assets/images/loading.png') }}" width="20" height="20" alt="admin">
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->

        <!-- START: Header -->
        @include('layout.top')
        @include('layout.side')
        <!-- END: Header -->

        <section class="content">
            @yield('content')
        </section>

        <!-- Plugins Js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/chart.min.js') }}"></script>
        <!-- Custom Js -->
        <script src="{{ asset('assets/js/admin.js') }}"></script>
        <script src="{{ asset('assets/js/pages/index.js') }}"></script>
        <script src="{{ asset('assets/js/pages/charts/jquery-knob.js') }}"></script>
        <script src="{{ asset('assets/js/pages/sparkline/sparkline-data.js') }}"></script>
        <script src="{{ asset('assets/js/pages/medias/carousel.js') }}"></script>
        <script src="{{ asset('assets/js/pages/forms/basic-form-elements.js') }}"></script>
        <script src="{{ asset('assets/js/form.min.js') }}"></script>

        <script src="{{ asset('assets/js/table.min.js') }}"></script>
        <script src="{{ asset('assets/js/bundles/export-tables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/js/bundles/export-tables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/js/bundles/export-tables/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/js/bundles/export-tables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/js/bundles/export-tables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/js/bundles/export-tables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/js/bundles/export-tables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
        <!-- Demo Js -->
    </body>
</html>
