@extends('admin.frontend.AdminLayout')

@section('pagename')
    Ticket History
@endsection

@section('content')
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Issued Ticket List</h6>
    
    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th >SL</th>

            <th >PNR</th>
            <th >Destination</th>
            <th >Travel Date</th>
            <th >Issue Date</th>
            <th >Sale Amount</th>
            <th >Ticket no.</th>
            <th >Issue By</th>
            <th >Action</th>


          </tr>
        </thead>
        <tbody>
            @foreach ($ticket_list as $key=> $data)
                <tr>
                    <td>{{ $key+1 }}</td>

                    <td>{{ $data->pnr }}</td>
                    <td>{{ $data->destination }}</td>
                    <td>{{ $data->travel_date }}</td>
                    <td>{{ $data->issue_date }}</td>
                    <td>{{ $data->sale_amount }}</td>
                    <td>{{ $data->ticket_number }}</td>
                    <td>{{ $data->issue_by}}</td>
                    <td>
                        <a href="{{ route('ticket_details' , $data->id) }}" class="btn btn-success">Details</a>
                    </td>
                    
                </tr>
            @endforeach
          

        </tbody>
      </table>
    </div><!-- table-wrapper -->
  </div>
@endsection


@section('footer_js')
<script>
    $('#datatable1').DataTable({
    bLengthChange: true,
    searching: true,
    responsive: true
  });
</script>
@endsection
