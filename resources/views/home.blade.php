@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="jumbotron text-center">
                    <h2>
                        fidfud!
                    </h2>
                    <p>
                        Desde fidfud® te invitamos a pensar en <br>
                        positivo, en un nuevo estilo de vida, desde la <br>
                        libertad y con el aval de los mejores expertos y<br>
                        profesionales.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">

                                <button type="button" id="diabetes" class="btn btn-lg btn-info btn-block categoria">
                                    Diabetes
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">

                                <button type="button" id="celiaquia" class="btn btn-block btn-info btn-lg categoria">
                                    Celiaquía
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">

                                <button type="submit" id="intolerancia lactosa" class="btn btn-block btn-lg btn-info categoria">
                                    Intolerancia a la Lactosa
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.categoria').click(function () {
            {{--window.location.href = '{{url('categorias/1')}}';--}}
            $url = 'categorias/'+ $(this).attr('id');
            window.location.href = $url;
        });
        /*$('#celiaquia').click(function () {
            window.location.href = '{{url('categorias/2')}}';
        });
        $('#lactosa').click(function () {
            window.location.href = '{{url('categorias/3')}}';
        });*/
    </script>
@endsection