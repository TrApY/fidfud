@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($noticias, ['route' => ['noticias.update', $noticias->id], 'method' => 'patch', 'accept-charset' => 'UTF-8', 'enctype' => 'multipart/form-data']) !!}

        @include('noticias.fields')

    {!! Form::close() !!}
</div>
@endsection
