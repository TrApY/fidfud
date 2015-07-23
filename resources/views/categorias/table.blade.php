<table class="table">
    <thead>
    <th>Nombre</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($categorias as $categorias)
        <tr>
            <td>{!! $categorias->nombre !!}</td>
            <td>
                <a href="{!! route('categorias.edit', [$categorias->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('categorias.delete', [$categorias->id]) !!}" onclick="return confirm('Are you sure wants to delete this Categorias?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
