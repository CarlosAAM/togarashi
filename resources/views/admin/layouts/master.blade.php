<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Togarashi Administration</title>

    <!-- Bootstrap -->
    <link href="{{ asset('../../assets/admin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    
    <!-- NProgress -->
    <link href="{{ asset('../../assets/admin/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- jQuery custom content scroller -->
    <link href="{{ asset('../../assets/admin/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet" />

    <!-- Pnotify styles -->
    <link href="{{ asset('../../assets/admin/pnotify/pnotify.custom.min.css') }}" rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="{{ asset('../../assets/admin/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('admin.layouts.sidebar')

            @include('admin.layouts.topbar')

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>@yield('title')</h3>
                        </div>
                    </div>
                </div>

                @yield('content')
            </div>
            <!-- /page content -->

            @include('admin.layouts.footer')
        </div>
    </div>

    @include('admin.layouts.scripts')

    @include('admin.layouts.errors')
    @include('admin.layouts.success')
</body>

</html>