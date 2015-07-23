<!--- Nombre Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!--- Elaboracion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('elaboracion', 'Elaboracion:') !!}
	{!! Form::textarea('elaboracion', null, ['class' => 'form-control']) !!}
</div>

<!--- Ingredientes Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ingredientes', 'Ingredientes:') !!}
	{!! Form::textarea('ingredientes', null, ['class' => 'form-control']) !!}
</div>

<!--- Tiempo Elaboracion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tiempo_elaboracion', 'Tiempo Elaboracion:') !!}
	{!! Form::text('tiempo_elaboracion', null, ['class' => 'form-control']) !!}
</div>

<!--- Url Video Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('url_video', 'Url Video:') !!}
	{!! Form::text('url_video', null, ['class' => 'form-control']) !!}
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
