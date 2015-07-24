<div class="row">
    <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Receta {{ $recetas->nombre }}</h1></div>
                    <div class="panel-body">

                        <!-- Imagen Field -->
                        <div class="form-group">
                            @if(\Storage::disk('restaurantes')->exists($recetas->imagen))
                                <img class="thumbnail img-responsive" src="{{asset(session()->get('ruta').$recetas->imagen)}}">
                            @endif
                        </div>

                        <!-- Descripción receta-->
                        <div class="form-group">
                            <h3>{{ $recetas->descripcion }}</h3>
                        </div>

                        <!-- Elaboración receta -->
                        <div class="form-group">
                            {!! Form::label('elaboracion', 'Elaboración receta:') !!}
                            <p> {!! $recetas->elaboracion  !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

