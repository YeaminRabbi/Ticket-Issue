@extends('admin.frontend.AdminLayout')

@section('pagename')
    Airlines Information
@endsection

@section('content')
 <div class="row row-sm mg-t-20">
    <div class="col-xl-6">
      <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
        <h6 class="card-body-title">Insert Airlines</h6>

        <form action="{{ route('createAirlines') }}" method="POST">
            @csrf
        <div class="row">
          <label class="col-sm-4 form-control-label">Airlines Name: </label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" class="form-control" name="airlines_name" placeholder="Enter airlines name">
           
          </div>
        </div><!-- row -->
        
        
        <div class="form-layout-footer mg-t-30">
          <button class="btn btn-info mg-r-5" type="submit">Submit</button>
          
        </div><!-- form-layout-footer -->
        </form>

        
      </div><!-- card -->
    </div><!-- col-6 -->

    



    <div class="col-lg-6">
      <div class="card">
        <div class="card-header bg-transparent pd-20 bd-b bd-gray-200">
          <h6 class="card-title tx-uppercase tx-12 mg-b-0">Airlines Table</h6>
        </div><!-- card-header -->
        <table class="table table-white table-responsive mg-b-0 tx-12">
          <thead>
            <tr class="tx-10">
              <th class="pd-y-5">SL</th>
              <th class="pd-y-5">Name</th>  
              <th class="pd-y-5">Action</th>             

            </tr>
          </thead>
          <tbody>
            @foreach ($airlines as $key => $data)
              <tr>                
                <td  class="tx-12">
                  {{$key+1}}
                </td>                
                <td class="tx-12">
                  {{ $data->airlines_name }}
                </td>

                <td class="tx-12">
                <a href="{{ route('airline_delete', $data->id) }}" class="btn btn-danger" >Delete</a>
                </td>
              </tr>
            @endforeach
            
            
           
          </tbody>
        </table>
        
      </div><!-- card -->
    </div><!-- col-6 -->
  </div><!-- row -->
@endsection