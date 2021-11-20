@extends('admin.frontend.AdminLayout')

@section('pagename')
    Issue Ticket
@endsection

@section('content')
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Passport Information</h6>

    <div class="form-layout">
      <div class="row mg-b-25">
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Firstname: </label>
            <input class="form-control" type="text" name="firstname"  placeholder="Enter firstname">
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Lastname: </label>
            <input class="form-control" type="text" name="lastname"  placeholder="Enter lastname">
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Passport Number: </label>
            <input class="form-control" type="text" name="passport_number"  placeholder="Enter passport no.">
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group mg-b-10-force">
            <label class="form-control-label">Expire Date (passport): </label>
            <input class="form-control" type="date" name="expire_date"  >
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
              <input class="form-control" type="text" name="pnr"  placeholder="Enter PNR">
            </div>
          </div><!-- col-6 -->
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label">Destination: </label>
              <input class="form-control" type="text" name="destination"  placeholder="Enter destination">
            </div>
          </div><!-- col-6 -->
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label">Travel Date: </label>
              <input class="form-control" type="date" name="travel_date" >
            </div>
          </div><!-- col-4 -->
          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Issue Date (passport): </label>
              <input class="form-control" type="date" name="issue_date"  >
            </div>
          </div><!-- col-4 -->
        

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Issue From</label>
              <select class="form-control select2" name="issue_from" data-placeholder="Choose country">
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
              <input class="form-control" type="text" name="purchase_amount"  >
            </div>
          </div><!-- col-4 -->

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Sale Amount: </label>
              <input class="form-control" type="text" name="sale_amount"  >
            </div>
          </div><!-- col-4 -->

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Ticket No.: </label>
              <input class="form-control" type="text" name="ticket_number"  >
            </div>
          </div><!-- col-4 -->




         </div><!-- row -->
       
      </div><!-- form-layout -->
  </div>
@endsection