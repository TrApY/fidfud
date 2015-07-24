
<div class="row">
    <div class="container-fluid">
        <div class="col-md-10">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Datos Restaurante</div>
                    <div class="panel-body">
                        <div class="form-group col-sm-6 col-lg-4 col-md-2">
                            {!! Form::label('nombre', 'Nombre:') !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                        </div>

                        <!--- Tipo Cocina Field --->
                        <div class="form-group col-sm-6 col-lg-4 col-md-2">
                            {!! Form::label('tipo_cocina', 'Tipo Cocina:') !!}
                            {!! Form::text('tipo_cocina', null, ['class' => 'form-control']) !!}
                        </div>

                        <!--- Direccion Field --->
                        <div class="form-group col-sm-6 col-lg-4 col-md-2">
                            {!! Form::label('direccion', 'Direccion:') !!}
                            {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
                        </div>

                        <!--- Telefono Field --->
                        <div class="form-group col-sm-6 col-lg-4 col-md-2">
                            {!! Form::label('telefono', 'Telefono:') !!}
                            {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                        </div>

                        <!--- Imagen Field --->
                        <div class="form-group col-sm-6 col-lg-4 col-md-2">
                            {!! Form::label('imagen', 'Imagen:') !!}
                            {!! Form::file('imagen') !!}
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.patologias')
            <div class="row">
                <div class="container-fluid">
                        <div class="panel panel-default">
                            <div class="panel-heading">Información Restaurante</div>

                            <div class="panel-body">
                            {!! Form::textarea('informacion', null, ['class' => 'form-control ckeditor'])  !!}
                                {{--<textarea class="ckeditor form-control" name="informacion" id="informacion">

                                </textarea>--}}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--- Nombre Field --->


{{--<div class="form-group col-sm-6 col-lg-4 col-md-2">
	{!! Form::label('informacion', 'Información:') !!}
	{!! Form::textarea('informacion', null, ['class' => 'form-control ckeditor']) !!}
</div>--}}

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Añadir Restaurante', ['class' => 'btn btn-primary']) !!}
</div>
