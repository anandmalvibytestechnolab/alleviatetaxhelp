@extends('backend._backend_master')

@section('window_title')
    Leads
@endsection

@section('head')
    @parent
    <link rel="stylesheet" href="{!! get_stylesheet('app') !!}">
@endsection

@section('modal_buttons')
    @if(empty($is_excel_export))
        <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal" title="Filter Records">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
        @if($rows->total())
            <a href="{!! route('BE_LEADS_EXPORT_INDEX', 'page='.get_last_url_segment()) !!}" class="btn btn-primary"><i class="fa fa-file-excel" aria-hidden="true"></i></a>
        @endif
    @endif
@endsection

@section('content')
    @if(!$is_excel_export)
        @component('backend._leads_query_form')
        @endcomponent
        @if($rows->count())
            <div class="d-flex flex-column">
                <div class="result-count">
                    <strong>{!! $rows->total() !!} {!! $readable_lead_model !!} </strong> between {!!Session::get('start_date')!!} and {!!Session::get('end_date')!!}
                </div>
                <div>
                    @if(!$is_excel_export)
                        {!! $rows->render() !!}
                    @endif
                </div>
            </div>
        @endif
    @endif
    @if(count($rows))
        <div class="w-100">
            <table class="table table-striped">
                @include($lead_loop_view)
            </table>
        </div>
    @else
        0 matches yet
    @endif
@endsection

@section('page_js')
    <script src="{!! get_javascript_file('leads.index') !!}"></script>
@endsection