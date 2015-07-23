@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Noticias</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('noticias.create') !!}">Add New</a>
        </div>

        <div class="row">
            <div class='notifications bottom-right'></div>
            @if($noticias->isEmpty())
                <div class="well text-center">No Noticias found.</div>
            @else
                @include('noticias.table')
                @include('common.paginate', ['records' => $noticias])
            @endif
        </div>

    </div>
    {!! Form::open(['route' => ['noticias.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}

    {!! Form::close() !!}
    @include('partials.deleteAjax')
@endsection