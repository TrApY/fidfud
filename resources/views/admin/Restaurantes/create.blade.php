@extends('admin.adminPanel')

@section('menu')
    @include('partials.menu')
@endsection

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'restaurantes.store', 'method' => 'POST', 'accept-charset' => 'UTF-8', 'enctype' => 'multipart/form-data']) !!}

        @include('restaurantes.fields')

    {!! Form::close() !!}
</div>
@endsection
