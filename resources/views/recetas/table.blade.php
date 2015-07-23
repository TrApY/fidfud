<table class="table table-striped">
    <thead>
    		<th>#</th>
    		<th>Nombre</th>
			<th>Elaboracion</th>
			<th>Ingredientes</th>
			<th>Tiempo Elaboracion</th>
			<th>Url Video</th>
			<th>Imagen</th>
			<th>Diabetes</th>
			<th>Celiaquia</th>
			<th>Lactosa</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($recetas as $receta)
        <tr data-id="{{$receta->id}}">
            <td>{{ $receta->id }}</td>
            <td>{{ $receta->nombre }}</td>
			<td>{{ $receta->elaboracion }}</td>
			<td>{{ $receta->ingredientes }}</td>
			<td>{{ $receta->tiempo_elaboracion }}</td>
			<td>{{ $receta->url_video }}</td>
			{{--<td>{{ $receta->imagen }}</td>--}}
			@if(\Storage::disk('recetas')->exists($receta->imagen))
				<td><img class="thumbnail" src="{{asset(session()->get('ruta').$receta->imagen)}}"></td>
			@else
				<td></td>
			@endif
			<td>{{ $receta->diabetes }}</td>
			<td>{{ $receta->celiaquia }}</td>
			<td>{{ $receta->lactosa }}</td>
            <td>
                <a href="{{ route('recetas.edit', [$receta->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
				<a href="#!" class="btn-delete"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
