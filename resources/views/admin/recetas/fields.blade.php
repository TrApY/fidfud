<div class="panel panel-group">
    <div class="row">
	<div class="container-fluid">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">Información Receta</div>
					<div class="panel-body">
						<div class="form-group col-sm-6 col-lg-4 col-md-2">
							{!! Form::label('nombre', 'Nombre:') !!}
							{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
						</div>

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
                <div class="panel panel-default">
						<div class="panel-heading">Información Restaurante</div>

						<div class="panel-body">
							{!! Form::textarea('elaboracion', null, ['class' => 'form-control ckeditor'])  !!}
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
