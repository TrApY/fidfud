@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Recetas</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('recetas.create') !!}">Add New</a>
        </div>

        <div class="row">
            <div class='notifications bottom-right'></div>
            @if($recetas->isEmpty())
                <div class="well text-center">No Recetas found.</div>
            @else
                @include('recetas.table')
            @endif
            @include('common.paginate', ['records' => $recetas])
        </div>
    </div>
    {!! Form::open(['route' => ['recetas.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}

    {!! Form::close() !!}
    @include('partials.deleteAjax')
@endsection