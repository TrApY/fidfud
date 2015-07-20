{{--<div class="alert alert-danger" role="alert">
    @if($errors->any())
        <p>Por favor corrige los errores</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>--}}


@if($errors->any())

    <div class="panel-body">
        <div class="alert alert-warning" role="alert">
            <ul>
                <strong>Por favor, corrige los errores : </strong>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
