@extends('admin.adminPanel')

{{--@section('menu')
	@include('partials.menu')
@endsection--}}

@section('content')
<div class="container">
	 @include('admin.restaurantes.show_fields')
</div>
@endsection
