{!! Form::model(Request::only('name', 'type'), ['route' => 'admin.users.index', 'method' => 'GET',
                                'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
    <div class="form-group">
        <button class="btn btn-default btn-group-vertical" type="Buscar">Buscar</button>
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario..']) !!}
        {!! Form::select('type', config('options.types'), null, ['class' => 'form-control']) !!}
    </div><!-- /input-group -->
{!! Form::close() !!}