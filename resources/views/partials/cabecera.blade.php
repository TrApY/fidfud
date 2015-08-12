@if(session()->get('cabecera'))
<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="page-header">
                <h1>
                    {{ session()->get('cabecera') }}
                </h1>
            </div>
        </div>
    </div>
</div>
@endif