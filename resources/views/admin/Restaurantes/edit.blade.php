@extends('admin.adminPanel')

{{--@section('menu')
    @include('partials.menu')
@endsection--}}

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($restaurantes, ['route' => ['admin.restaurantes.update', $restaurantes->id], 'method' => 'patch', 'accept-charset' => 'UTF-8', 'enctype' => 'multipart/form-data']) !!}

        @include('admin.restaurantes.fields')

    {!! Form::close() !!}
</div>
@endsection
