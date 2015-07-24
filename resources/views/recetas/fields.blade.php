<div class="row">
	<div class="container-fluid">
		<div class="col-md-10">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">Información Receta</div>
					<div class="panel-body">
						<div class="form-group col-sm-6 col-lg-4 col-md-2">
							{!! Form::label('nombre', 'Nombre:') !!}
							{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
						</div>

						{{--<!--- Tipo Cocina Field --->--}}
						{{--<div class="form-group col-sm-6 col-lg-4 col-md-2">--}}
							{{--{!! Form::label('descripcion', 'Descripción:') !!}--}}
							{{--{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}--}}
						{{--</div>--}}

						<!--- Imagen Field --->
						<div class="form-group col-sm-6 col-lg-4 col-md-2">
							{!! Form::label('imagen', 'Imagen:') !!}
							{!! Form::file('imagen') !!}
						</div>
                        
                        <div class="row">
                            <div class="form-group col-md-10 col-md-offset-1">
                                {!! Form::label('descripcion', 'Breve descripción: ') !!}
                                {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'size' => '30x5']) !!}
                            </div>
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
							{!! Form::textarea('elaboracion', null, ['class' => 'form-control ckeditor'])  !!}
							{{--<textarea class="ckeditor form-control" name="informacion" id="informacion">

                            </textarea>--}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


{{--<!--- Elaboracion Field --->--}}
{{--<div class="form-group col-sm-6 col-lg-4">--}}
    {{--{!! Form::label('elaboracion', 'Elaboracion:') !!}--}}
	{{--{!! Form::textarea('elaboracion', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!--- Ingredientes Field --->
{{--<div class="form-group col-sm-6 col-lg-4">--}}
    {{--{!! Form::label('ingredientes', 'Ingredientes:') !!}--}}
	{{--{!! Form::textarea('ingredientes', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!--- Tiempo Elaboracion Field --->
{{--<div class="form-group col-sm-6 col-lg-4">--}}
    {{--{!! Form::label('tiempo_elaboracion', 'Tiempo Elaboracion:') !!}--}}
	{{--{!! Form::text('tiempo_elaboracion', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}


<!--- Diabetes Field --->
{{--<div class="form-group col-sm-6 col-lg-4">--}}
    {{--<div class="checkbox">--}}
		{{--<label>{!! Form::checkbox('diabetes', 1, true) !!}Diabetes</label>--}}
	{{--</div>--}}
{{--</div>--}}

<!--- Celiaquia Field --->
{{--<div class="form-group col-sm-6 col-lg-4">--}}
    {{--<div class="checkbox">--}}
		{{--<label>{!! Form::checkbox('celiaquia', 1, true) !!}Celiaquia</label>--}}
	{{--</div>--}}
{{--</div>--}}

<!--- Lactosa Field --->
{{--<div class="form-group col-sm-6 col-lg-4">--}}
    {{--<div class="checkbox">--}}
		{{--<label>{!! Form::checkbox('lactosa', 1, true) !!}Lactosa</label>--}}
	{{--</div>--}}
{{--</div>--}}


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
