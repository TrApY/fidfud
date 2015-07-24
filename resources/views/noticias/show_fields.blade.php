<div class="panel panel-group">
    <div class="row">
    <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>{{ $noticias->titulo }}</h2></div>
                    <div class="panel-body">

                        <!-- Descripción -->
                        <div class="form-group">
{{--                            {!! Form::label('descripcion', 'Descripción:') !!}--}}
                            <h3>{!! $noticias->descripcion !!} </h3>
                        </div>

                        <!-- Noticia -->
                        <div class="form-group">
                            <p>{!! $noticias->noticia  !!} </p>
                        </div>

                        {{--<!-- Telefono Field -->--}}
                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('telefono', 'Telefono:') !!}--}}
                            {{--<p>{{ $restaurantes->telefono }}</p>--}}
                        {{--</div>--}}

                        {{--<!-- Información Field -->--}}
                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('informacion', 'Información:') !!}--}}
                            {{--<p>{!! $restaurantes->informacion !!}</p>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



{{--<!-- Titulo Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('titulo', 'Titulo:') !!}--}}
    {{--<p>{!! $noticias->titulo !!}</p>--}}
{{--</div>--}}

{{--<!-- Noticia Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('noticia', 'Noticia:') !!}--}}
    {{--<p>{!! $noticias->noticia !!}</p>--}}
{{--</div>--}}

{{--<!-- Url Video Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('url_video', 'Url Video:') !!}--}}
    {{--<p>{!! $noticias->url_video !!}</p>--}}
{{--</div>--}}

{{--<!-- Imagen Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('imagen', 'Imagen:') !!}--}}
    {{--<p>{!! $noticias->imagen !!}</p>--}}
{{--</div>--}}

{{--<!-- Diabetes Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('diabetes', 'Diabetes:') !!}--}}
    {{--<p>{!! $noticias->diabetes !!}</p>--}}
{{--</div>--}}

{{--<!-- Celiaquia Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('celiaquia', 'Celiaquia:') !!}--}}
    {{--<p>{!! $noticias->celiaquia !!}</p>--}}
{{--</div>--}}

{{--<!-- Lactosa Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('lactosa', 'Lactosa:') !!}--}}
    {{--<p>{!! $noticias->lactosa !!}</p>--}}
{{--</div>--}}

