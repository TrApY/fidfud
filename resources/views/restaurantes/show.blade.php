@extends('app')

@section('menu')
	@include('partials.menu')
@endsection

@section('content')
<div class="container">
	 @include('restaurantes.show_fields')
</div>
@endsection
