@extends('admin.frontend.AdminLayout')

@section('pagename')
    User Information
@endsection

@section('content')
 <div class="row row-sm mg-t-20">
    <div class="col-xl-6">
      <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
        <h6 class="card-body-title">Create User</h6>

        <form action="{{ route('userRegister') }}" method="POST">
            @csrf
        <div class="row">
          <label class="col-sm-4 form-control-label">Name: </label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" class="form-control" name="name" placeholder="Enter name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div><!-- row -->
        
        <div class="row mg-t-20">
          <label class="col-sm-4 form-control-label">Email: </label>
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <input type="text" class="form-control" name="email" placeholder="Enter email address">
            
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
       
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Password: </label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="password" class="form-control" name="password" placeholder="Enter Password">
                
              @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        <div class="form-layout-footer mg-t-30">
          <button class="btn btn-success mg-r-5" type="submit">Create User</button>
          
        </div><!-- form-layout-footer -->
        </form>

        
      </div><!-- card -->
    </div><!-- col-6 -->

    



    <div class="col-lg-6">
      <div class="card">
        <div class="card-header bg-transparent pd-20 bd-b bd-gray-200">
          <h6 class="card-title tx-uppercase tx-12 mg-b-0">User Table</h6>
        </div><!-- card-header -->
        <table class="table table-white table-responsive mg-b-0 tx-12">
          <thead>
            <tr class="tx-10">
              <th class="pd-y-5">SL</th>
              <th class="pd-y-5">Name</th>
              <th class="pd-y-5">Email</th>

              <th class="pd-y-5">Role</th>
              <th class="pd-y-5">Created At</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $key => $data)
              <tr>
                
                <td  class="tx-12">
                  {{$key+1}}
                </td>

                
                <td class="tx-12">
                  {{ $data->name }}
                </td>
                
                <td  class="tx-12">
                  {{$data->email}}
                </td>
                
                <td class="tx-12">
                  {{ $data->role }}
                </td>

                <td class="tx-12">
                  {{ $data->created_at->format('d - m -Y') }}
                </td>

              </tr>
            @endforeach
            
            
           
          </tbody>
        </table>
        
      </div><!-- card -->
    </div><!-- col-6 -->
  </div><!-- row -->
@endsection