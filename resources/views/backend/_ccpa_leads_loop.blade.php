<thead>
<tr>
    <th>ID</th>
    <th>Created</th>
    <th>Requestor</th>
    <th>Requestor Options</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Email</th>
    <th>Phone</th>
    {{--<th>Api Response</th>--}}
</tr>
</thead>
<tbody>
@foreach($rows as $row)
    <tr>
        <td>{!! $row->id !!}</td>
        <td>{!! $row->created_at !!}</td>
        <td>{!! $row->requestor !!}</td>
        <td>{!! $row->requestoptions !!}</td>
        <td>{!! $row->first_name !!}</td>
        <td>{!! $row->last_name !!}</td>
        <td>{!! $row->street !!} {!! $row->apt !!} {!! $row->city !!} {!! $row->state !!} {!! $row->zip_code !!}</td>
{{--        <td>{!! $row->street !!} </td>--}}
        {{--<td>{!! $row->apt !!}</td>--}}
        {{--<td>{!! $row->city !!}</td>--}}
        {{--<td>{!! $row->state !!}</td>--}}
        {{--<td>{!! $row->zip_code !!}</td>--}}
        <td>{!! $row->email_address !!}</td>
        <td>{!! $row->primary_phone !!}</td>
    </tr>
@endforeach
</tbody>