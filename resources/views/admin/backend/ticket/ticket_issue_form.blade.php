@extends('admin.frontend.AdminLayout')

@section('pagename')
    Issue Ticket
@endsection

@section('content')
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Passport Information</h6>
    <form action="{{ route('ticket_info') }}" method="POST">
      @csrf
    <div class="form-layout">
      <div class="row mg-b-25">
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Firstname: </label>
            <input class="form-control" type="text" name="firstname"  placeholder="Enter firstname" required>
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Lastname: </label>
            <input class="form-control" type="text" name="lastname"  placeholder="Enter lastname" required>
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Passport Number: </label>
            <input class="form-control" type="text" name="passport_number"  placeholder="Enter passport no." required>
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group mg-b-10-force">
            <label class="form-control-label">Expire Date (passport): </label>
            <input class="form-control" type="date" name="expire_date"  required>
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group mg-b-10-force">
            <label class="form-control-label">DOB: </label>
            <input class="form-control" type="date" name="dob" required >
          </div>
        </div><!-- col-4 -->
       </div><!-- row -->
     
    </div><!-- form-layout -->


    <h6 class="card-body-title">Ticket Information</h6>
   
    <div class="form-layout">
        <div class="row mg-b-25">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label">PNR: </label>
              <input class="form-control" type="text" name="pnr"  placeholder="Enter PNR" required>
            </div>
          </div><!-- col-6 -->
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label">Destination: </label>
              <input class="form-control" type="text" name="destination"  placeholder="Enter destination" required>
            </div>
          </div><!-- col-6 -->
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label">Travel Date: </label>
              <input class="form-control" type="date" name="travel_date" required>
            </div>
          </div><!-- col-4 -->
          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Issue Date: </label>
              <input class="form-control" type="date" name="issue_date" required >
            </div>
          </div><!-- col-4 -->
          
         
        

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Issue From</label>
              <select class="form-control select2" name="issue_from" >
                <option >-- Select One--</option>
                @foreach ($airlines as $data)
                 <option value="{{ $data->airlines_name }}">{{ $data->airlines_name }}</option>
                @endforeach
              </select>
            </div>
          </div><!-- col-4 -->

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Purchase Amount: </label>
              <input class="form-control" type="text" name="purchase_amount" required >
            </div>
          </div><!-- col-4 -->

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Sale Amount: </label>
              <input class="form-control" type="text" name="sale_amount" required >
            </div>
          </div><!-- col-4 -->

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Ticket No.: </label>
              <input class="form-control" type="text" name="ticket_number" required >
            </div>
          </div><!-- col-4 -->




         </div><!-- row -->
       
      </div><!-- form-layout -->
      <div class="form-layout-footer mg-t-30">
        <button class="btn btn-success mg-r-5" type="submit">Issue Ticket</button>
        
      </div><!-- form-layout-footer -->
    </form>
  </div>
@endsection