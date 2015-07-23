@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')
        {{--@if(Session::has('message'))--}}
            {{--<p class="alert alert-success">{{ Session::get('message') }}</p>--}}
        {{--@endif--}}
        <div class="row">
            <h1 class="pull-left">Restaurantes</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('restaurantes.create') !!}">Add New</a>
        </div>

        <div class="row">
            <div class='notifications bottom-right'></div>
            @if($restaurantes->isEmpty())
                <div class="well text-center">No Restaurantes found.</div>
            @else
                @include('restaurantes.table')
                @include('common.paginate', ['records' => $restaurantes])
            @endif
        </div>
{{--        {!! $restaurantes->appends(Request::only(['name', 'type']))->render() !!}--}}
        {{--@include('common.paginate', ['records' => $restaurantes])--}}
    </div>

    {!! Form::open(['route' => ['restaurantes.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}

    {!! Form::close() !!}

    @include('partials.deleteAjax')
@endsection