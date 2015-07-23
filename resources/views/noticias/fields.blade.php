<!--- Titulo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('titulo', 'Titulo:') !!}
	{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!--- Noticia Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('noticia', 'Noticia:') !!}
	{!! Form::text('noticia', null, ['class' => 'form-control']) !!}
</div>

<!--- Url Video Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('url_video', 'Url Video:') !!}
	{!! Form::text('url_video', null, ['class' => 'form-control']) !!}
</div>

<!--- Imagen Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('imagen', 'Imagen:') !!}
	{!! Form::file('imagen', ['class' => 'form-control']) !!}
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
