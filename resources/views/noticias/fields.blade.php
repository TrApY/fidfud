<!--- Titulo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('titulo', 'Titulo:') !!}
	{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!--- Noticia Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('noticia', 'Noticia:') !!}
{{--	{!! Form::textarea('noticia', null, ['class' => 'form-control']) !!}--}}
	{{--<textarea class="ckeditor form-control" name="url_video" id="editor1" rows="10" cols="80"></textarea>--}}
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

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Formulario con ckeditor</div>

				<div class="panel-body">
					<form>
                            <textarea class="ckeditor" name="noticia" id="editor1" rows="10" cols="80">
                                Este es el textarea que es modificado por la clase ckeditor
                            </textarea>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>