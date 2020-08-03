@extends('backend.master')

@section('window_title')
    Leads
@endsection

@section('head')
    @parent
    <link rel="stylesheet" href="{!! get_stylesheet('app') !!}">
@endsection|

@section('modal_buttons')
    @if(!$is_excel_export)
        <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal" title="Filter Records">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
        @if($rows->total())
            <a href="{!! route('BE_LEADS_EXPORT_INDEX') !!}" class="btn btn-primary"><i class="fa fa-file-excel" aria-hidden="true"></i></a>
        @endif
    @endif
@endsection

@section('page_content')
    @if(!$is_excel_export)
        @component('backend._leads_query_form')
        @endcomponent
        @if($rows->count())
            <div class="d-flex flex-column">
                <div class="result-count">
                    <strong>{!! $rows->total() !!} Leads </strong> between {!!Session::get('start_date')!!} and {!!Session::get('end_date')!!}
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
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Created</th>
                    <th>Email</th>
                    <th>Url</th>
                    <th>Api Response</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rows as $row)
                    <tr>
                        <td>{!! $row->id !!}</td>
                        <td>{!! $row->created_at !!}</td>
                        <td>{!! $row->email !!}</td>
                        <td>{!! $row->url !!}</td>
                        <td>{!! $row->api_response !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        0 matches yet
    @endif
@endsection

@section('page_js')
    <script src="{!! get_javascript_file('leads.index') !!}"></script>
@endsection