<thead>
<tr>
    <th>ID</th>
    <th>Created</th>
    <th>Current Situation</th>
    <th>Other Situation</th>
    <th>Tax Debt</th>
    <th>Enrolled IRS</th>
    <th>Employment Status</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>State</th>
    <th>Zip Code</th>
</tr>
</thead>
<tbody>
@foreach($rows as $row)
    <tr>
        <td>{!! $row->id !!}</td>
        <td>{!! $row->created_at !!}</td>
        <td>{!! $row->current_sit !!}</td>
        <td>{!! $row->other_current_situation !!}</td>
        <td>{!! $row->tax_debt !!}</td>
        <td>{!! $row->enrolled_irs !!}</td>
        <td>{!! $row->Employment_status !!}</td>
        <td>{!! $row->first_name !!}</td>
        <td>{!! $row->last_name !!}</td>
        <td>{!! $row->email_address !!}</td>
        <td>{!! $row->primary_phone !!}</td>
        <td>{!! $row->state !!}</td>
        <td>{!! $row->zip_code !!}</td>
    </tr>
@endforeach
</tbody>