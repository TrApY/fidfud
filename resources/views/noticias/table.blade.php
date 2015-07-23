<table class="table">
    <thead>
            <th>#</th>
            <th>Titulo</th>
			<th>Noticia</th>
			<th>Url Video</th>
			<th>Imagen</th>
			<th>Diabetes</th>
			<th>Celiaquia</th>
			<th>Lactosa</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>

    @foreach($noticias as $noticia)
        <tr data-id="{{ $noticia->id }}">
            <td>{{ $noticia->id }}</td>
            <td>{{ $noticia->titulo }}</td>
			<td>{{ $noticia->noticia }}</td>
            <td>{!! $noticia->url_video !!}</td>
            @if(\Storage::disk('noticias')->exists($noticia->imagen))
                <td><img class="thumbnail" src="{{asset(session()->get('ruta').$noticia->imagen)}}"></td>
            @else
                <td></td>
            @endif
			<td>{{ $noticia->diabetes }}</td>
			<td>{{ $noticia->celiaquia }}</td>
			<td>{{ $noticia->lactosa }}</td>
            <td>
                <a href="{{ route('noticias.edit', [$noticia->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="#!" class="btn-delete"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
