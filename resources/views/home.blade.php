@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>
                    <div class="panel-body">
                        @include('partials/success')
                        <p>Welcome to our site!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection