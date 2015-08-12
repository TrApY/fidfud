<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fidfud.co</title>

    <style>

        .navbar-static-top {
            margin-bottom:20px;
        }

        i {
            font-size:16px;
        }

        .nav > li > a {
            color:#787878;
        }

        footer {
            margin-top:20px;
            padding-top:20px;
            padding-bottom:20px;
            background-color:#efefef;
        }

        /* count indicator near icons */
        .nav>li .count {
            position: absolute;
            bottom: 12px;
            right: 6px;
            font-size: 9px;
            background: rgba(51,200,51,0.55);
            color: rgba(255,255,255,0.9);
            line-height: 1em;
            padding: 2px 4px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
            border-radius: 10px;
        }

    </style>
    @include('partials.scripts')
</head>
<body style="margin-bottom: 60px">
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#!">Panel Administrador</a>
            <a class="navbar-brand" href="/">Inicio</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> {{ auth()->user()->name }} <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="{{ route('logout') }}"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Opciones</strong></a>

            <hr>

            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Secciones <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li class="active"> <a href="{{ route('admin.restaurantes.index') }}"><i class="glyphicon"></i> Restaurantes</a></li>
                        <li><a href="#"><i class="glyphicon"></i> Recetas</a></li>
                        <li><a href="#"><i class="glyphicon"></i> Noticias</a></li>
                        <li><a href="#"><i class="glyphicon"></i> Usuarios</a></li>
                        <li><a href="#"><i class="glyphicon"></i> Productos</a></li>
                    </ul>
                </li>

                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu3"> Redes Sociales <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu3">
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Instagram</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Pinterest</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">

            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
            <hr>
            @yield('content')
        </div>
    </div>
</div>
<!-- /Main -->

<!-- Scripts -->
@yield('scripts')
@include('footer')
<script>
    $(".alert").addClass("in").fadeOut(4500);

    /* swap open/close side menu icons */
    $('[data-toggle=collapse]').click(function(){
        // toggle icon
        $(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
    });
</script>
</body>
</html>
