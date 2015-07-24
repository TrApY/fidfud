<table class="table table-striped">
    <thead>
    		{{--<th>#</th>--}}
    		<th>Nombre</th>
			<th>Descripcion</th>
			<th>Imagen</th>
			{{--<th>Diabetes</th>--}}
			{{--<th>Celiaquia</th>--}}
			{{--<th>Lactosa</th>--}}
    <th width="80px"></th>
    </thead>
    <tbody>
    @foreach($recetas as $receta)
        <tr data-id="{{$receta->id}}">
{{--            <td>{{ $receta->id }}</td>--}}
            <td><h4>{{ $receta->nombre }}</h4></td>
			<td><h4>{{ $receta->descripcion }}</h4></td>
			@if(\Storage::disk('recetas')->exists($receta->imagen))
				<td><img class="thumbnail" style="width:120px;height:120px;" src="{{asset(session()->get('ruta').$receta->imagen)}}"></td>
			@else
				<td></td>
			@endif
			{{--<td>{{ $receta->diabetes }}</td>--}}
			{{--<td>{{ $receta->celiaquia }}</td>--}}
			{{--<td>{{ $receta->lactosa }}</td>--}}
            <td>
				<a href="{{ route('recetas.show', $receta->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
                <a href="{{ route('recetas.edit', [$receta->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
				<a href="#!" class="btn-delete"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
