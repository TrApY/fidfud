<table class="table">
    <thead>
            <th>Titulo</th>
			<th>Descripción</th>
    <th width="80px">Action</th>
    </thead>
    <tbody>

    @foreach($noticias as $noticia)
        <tr data-id="{{ $noticia->id }}">
            {{--<td>{{ $noticia->id }}</td>--}}
            <td><h4>{{ $noticia->titulo }}</h4></td>
			<td><h4>{!! $noticia->descripcion  !!} </h4></td>
            <td>
                <a href="{{ route('noticias.show', [$noticia->id]) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
                <a href="{{ route('noticias.edit', [$noticia->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="#!" class="btn-delete"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
