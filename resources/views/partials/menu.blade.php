<ul class="nav navbar-nav">
    {{--<li><a href="{{ route('home') }}">{{ trans('layout.home') }}</a></li>--}}
    <li><a href="{{ url('restaurantes') }}">{{ trans('categorias.restaurantes') }}</a></li>
    <li><a href="{{ url('recetas') }}">{{ trans('categorias.recetas') }}</a></li>
    <li><a href="{{ url('noticias') }}">{{ trans('categorias.noticias') }}</a></li>
</ul>