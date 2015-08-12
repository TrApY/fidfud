@extends('app')

@section('menu')
    @include('partials.menu')
@endsection

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'noticias.store', 'method' => 'POST', 'accept-charset' => 'UTF-8', 'enctype' => 'multipart/form-data']) !!}

        @include('noticias.fields')

    {!! Form::close() !!}
</div>
@endsection
