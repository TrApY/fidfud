<!--- Nombre Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!--- Tipo Cocina Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tipo_cocina', 'Tipo Cocina:') !!}
	{!! Form::text('tipo_cocina', null, ['class' => 'form-control']) !!}
</div>

<!--- Direccion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('direccion', 'Direccion:') !!}
	{!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!--- Telefono Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('telefono', 'Telefono:') !!}
	{!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!--- Imagen Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('imagen', 'Imagen:') !!}
	{!! Form::file('imagen') !!}
</div>

<!--- Diabetes Field --->
<div class="form-group col-sm-6 col-lg-4">
    <div class="checkbox">
		<label>{!! Form::checkbox('diabetes', 1, true) !!}Diabetes</label>
	</div>
</div>

<!--- Celiaquia Field --->
<div class="form-group col-sm-6 col-lg-4">
    <div class="checkbox">
		<label>{!! Form::checkbox('celiaquia', 1, true) !!}Celiaquia</label>
	</div>
</div>

<!--- Lactosa Field --->
<div class="form-group col-sm-6 col-lg-4">
    <div class="checkbox">
		<label>{!! Form::checkbox('lactosa', 1, true) !!}Lactosa</label>
	</div>
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
