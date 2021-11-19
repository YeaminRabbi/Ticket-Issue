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
          <button class="btn btn-info mg-r-5" type="submit">Submit</button>
          
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
              <th class="pd-y-5">Username</th>
              <th class="pd-y-5">Type</th>
              <th class="pd-y-5">Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              
              <td>
                <a href="" class="tx-inverse tx-14 tx-medium d-block">Mark K. Peters</a>
                <span class="tx-11 d-block">TRANSID: 1234567890</span>
              </td>
              <td class="tx-12">
                <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Email verified
              </td>
              <td>Just Now</td>
            </tr>
           
          </tbody>
        </table>
        <div class="card-footer tx-12 pd-y-15 bg-transparent bd-t bd-gray-200">
          <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Transaction History</a>
        </div><!-- card-footer -->
      </div><!-- card -->
    </div><!-- col-6 -->
  </div><!-- row -->
@endsection