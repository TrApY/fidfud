<div class="form-group">
    {!! Form::label('email', 'Correo Electrónico') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Introduzca su email']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Introduzca su contraseña']) !!}
</div>
<div class="form-group">
    {!! Form::label('first_name', 'Primer Nombre') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('last_name', 'Apellidos') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('type', 'Tipo de usuario') !!}
    {!! Form::select('type', config('options.types'), null, ['class' => 'form-control']) !!}
</div>
