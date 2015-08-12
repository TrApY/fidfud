@extends('app')

@section('menu')
    @include('partials.menu')
@endsection

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($restaurantes, ['route' => ['restaurantes.update', $restaurantes->id], 'method' => 'patch', 'accept-charset' => 'UTF-8', 'enctype' => 'multipart/form-data']) !!}

        @include('restaurantes.fields')

    {!! Form::close() !!}
</div>
@endsection
