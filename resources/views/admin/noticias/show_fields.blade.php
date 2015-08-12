<div class="panel panel-group">
    <div class="row">
    <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h2>{{ $noticias->titulo }}</h2></div>
                    <div class="panel-body">

                        <!-- Descripción -->
                        <div class="form-group">
                            <h3>{!! $noticias->descripcion !!} </h3>
                        </div>

                        <!-- Noticia -->
                        <div class="form-group">
                            <p>{!! $noticias->noticia  !!} </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
