<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @include('partials.scripts')
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar">Restaurantes</span>
                <span class="icon-bar">Recetas</span>
                <span class="icon-bar">Noticias</span>
            </button>
            <a class="navbar-brand" href="#">FIDFUD</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @include('partials.menu')

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    {{--<li><a href="--}}{{--{{route('login')}}--}}{{--">Login</a></li>--}}
                    {{--<li><a href="--}}{{--{{route('register')}}--}}{{--">Register</a></li>--}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            {{--<li><a href="{{ route('logout') }}">Logout</a></li>--}}
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        @include('partials.cabecera')

    </div>
</nav>

@yield('content')
        <!-- Scripts -->

@yield('scripts')
@include('footer')
</body>
</html>
