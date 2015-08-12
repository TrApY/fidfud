<div class="row">
    <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h2>Datos Restaurante {{ $restaurantes->nombre }}</h2></div>
                    <div class="panel-body">

                        <!-- Imagen Field -->
                        <div class="form-group">
                            @if(\Storage::disk('restaurantes')->exists($restaurantes->imagen))
                                <img class="thumbnail img-responsive" src="{{asset(session()->get('ruta').$restaurantes->imagen)}}">
                            @endif
                        </div>

                        <!-- Tipo Cocina Field -->
                        <div class="form-group">
                            {!! Form::label('tipo_cocina', 'Tipo Cocina:') !!}
                            <p>{{ $restaurantes->tipo_cocina }}</p>
                        </div>

                        <!-- Direccion Field -->
                        <div class="form-group">
                            {!! Form::label('direccion', 'Direccion:') !!}
                            <p>{{ $restaurantes->direccion }}</p>
                        </div>

                        <!-- Telefono Field -->
                        <div class="form-group">
                            {!! Form::label('telefono', 'Telefono:') !!}
                            <p>{{ $restaurantes->telefono }}</p>
                        </div>

                        <!-- Información Field -->
                        <div class="form-group">
                            {!! Form::label('informacion', 'Información:') !!}
                            <p>{!! $restaurantes->informacion !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>