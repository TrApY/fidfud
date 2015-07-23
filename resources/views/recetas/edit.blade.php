@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($recetas, ['route' => ['recetas.update', $recetas->id], 'method' => 'patch', 'accept-charset' => 'UTF-8', 'enctype' => 'multipart/form-data']) !!}

        @include('recetas.fields')

    {!! Form::close() !!}
</div>
@endsection
