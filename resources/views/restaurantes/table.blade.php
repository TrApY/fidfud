<table class="table">
    <thead>
            {{--<th>#</th>--}}
            <th>Nombre</th>
			<th>Tipo Cocina</th>
			{{--<th>Direccion</th>--}}
			{{--<th>Telefono</th>--}}
			<th>Imagen</th>
			{{--<th>Diabetes</th>--}}
			{{--<th>Celiaquia</th>--}}
			{{--<th>Lactosa</th>--}}
    <th width="80px"></th>
    </thead>
    <tbody>
    @foreach($restaurantes as $restaurante)
        <tr data-id = "{{ $restaurante->id }}" class="text-justify">
            {{--<td>{{ $restaurante->id }}</td>--}}
            <td><h4>{{ $restaurante->nombre }}</h4></td>
			<td><h4>{{ $restaurante->tipo_cocina }}</h4></td>
{{--			<td>{{ $restaurante->direccion }}</td>--}}
{{--			<td>{{ $restaurante->telefono }}</td>--}}
			{{--<td>{{ $restaurante->imagen }}</td>--}}
            @if(\Storage::disk('restaurantes')->exists($restaurante->imagen))
                <td><img class="img-thumbnail img-responsive" style="width:120px;height:120px;" src="{{asset(session()->get('ruta').$restaurante->imagen)}}"></td>
            @else
                <td></td>
            @endif
{{--			<td>{{ $restaurante->diabetes }}</td>--}}
{{--			<td>{{ $restaurante->celiaquia }}</td>--}}
			{{--<td>{{ $restaurante->lactosa }}</td>--}}
            <td>
                <a href="{{ route('restaurantes.show', $restaurante->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
                <a href="{{ route('restaurantes.edit', $restaurante->id) }}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="#!" class="btn-delete"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
