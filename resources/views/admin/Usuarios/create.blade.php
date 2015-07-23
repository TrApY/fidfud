@extends('layoutHome')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Usuario</div>

                    @include('users.partials.messages')

                    <div class="panel-body">
                        {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
                        @include('users.partials.fields')
                        {!! Form::submit('Añadir Usuario', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection