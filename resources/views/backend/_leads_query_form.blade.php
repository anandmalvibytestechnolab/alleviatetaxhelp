<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filtrar Registros</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!!Form::Open(['route' => 'BE_LEADS_QUERY_INDEX', 'id' => 'query-leads-form' , 'class' => 'the_form'])!!}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="start_date">Start Date *</label>
                            {!!Form::text('start_date' , session('start_date') ? remove_time_from_date(session('start_date')) : null , ['id' => 'start_date' , 'title' => 'Formato Año Mes Día', 'data-date-picker', 'class' => 'form-control'])!!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="end_date">End Date *</label>
                            {!!Form::text('end_date' , session('end_date') ? remove_time_from_date(session('end_date')) : null , ['id' => 'end_date' , 'title' => 'Formato Año Mes Día', 'data-date-picker', 'class' => 'form-control'])!!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            {!!Form::email('email' , session('email') ? remove_time_from_date(session('email')) : null , ['id' => 'email' , 'title' => 'Email', 'class' => 'form-control'])!!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="url">Url *</label>
                            {!!Form::text('url' , session('url') ? remove_time_from_date(session('url')) : null , ['id' => 'url' , 'title' => 'url', 'class' => 'form-control'])!!}
                        </div>
                    </div>
                </div>
                {!! $additional_filters ?? null!!}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Filter Records</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>