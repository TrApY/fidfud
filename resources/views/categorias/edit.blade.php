@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($categorias, ['route' => ['categorias.update', $categorias->id], 'method' => 'patch']) !!}

        @include('categorias.fields')

    {!! Form::close() !!}
</div>
@endsection
