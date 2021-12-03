<table>
    <thead>
    <tr>
        <th>SL</th>
        <th>First Name</th>
        <th>Last Name</th>

        <th>Pnr</th>
        <th>Issue Date</th>

    </tr>
    </thead>
    <tbody>
    @foreach($Tickets as $key => $data)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $data->passport_info->first_name }}</td>
            <td>{{ $data->passport_info->last_name }}</td>
            <td>{{ $data->pnr }}</td>
            <td>{{ $data->issue_date }}</td>

        </tr>
    @endforeach
    </tbody>
</table>