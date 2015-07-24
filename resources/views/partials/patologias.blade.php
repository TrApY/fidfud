<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">Patologías</div>
        <div class="panel-body">
            <!--- Diabetes Field --->
            <div class="form-group col-sm-6 col-lg-4 col-md-2">
                <div class="checkbox">
                    <label>{!! Form::checkbox('diabetes', 1) !!}Diabetes</label>
                </div>
            </div>

            <!--- Celiaquia Field --->
            <div class="form-group col-sm-6 col-lg-4 col-md-2">
                <div class="checkbox">
                    <label>{!! Form::checkbox('celiaquia', 1) !!}Celiaquia</label>
                </div>
            </div>

            <!--- Lactosa Field --->
            <div class="form-group col-sm-6 col-lg-4 col-md-2">
                <div class="checkbox">
                    <label>{!! Form::checkbox('lactosa', 1) !!}Lactosa</label>
                </div>
            </div>
        </div>
    </div>
</div>