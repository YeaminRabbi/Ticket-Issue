@extends('admin.frontend.AdminLayout')

@section('pagename')
    Issued Ticket Details
@endsection

@section('content')
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Passport Information</h6>
    <div class="form-layout">
      <div class="row mg-b-25">
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Firstname: </label>
            <input class="form-control" type="text" value="{{ $user_passport->first_name }}" name="firstname"  placeholder="Enter firstname" disabled>
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Lastname: </label>
            <input class="form-control" type="text" value="{{ $user_passport->last_name }}" name="lastname"  placeholder="Enter lastname" disabled>
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Passport Number: </label>
            <input class="form-control" type="text" value="{{ $user_passport->passport_number }}" name="passport_number"  placeholder="Enter passport no." disabled>
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group mg-b-10-force">
            <label class="form-control-label">Expire Date (passport): </label>
            <input class="form-control" type="date" value="{{ $user_passport->expire_date }}" name="expire_date"  disabled>
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group mg-b-10-force">
            <label class="form-control-label">DOB: </label>
            <input class="form-control" type="date" value="{{ $user_passport->dob }}" name="dob" disabled >
          </div>
        </div><!-- col-4 -->

        <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Issued By: </label>
              <input class="form-control" type="text" value="{{ $ticket->issue_by }}" name="issued_by" disabled >
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
              <input class="form-control" type="text" value="{{ $ticket->pnr }}" name="pnr"  placeholder="Enter PNR" disabled>
            </div>
          </div><!-- col-6 -->
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label">Destination: </label>
              <input class="form-control" type="text" value="{{ $ticket->destination }}" name="destination"  placeholder="Enter destination" disabled>
            </div>
          </div><!-- col-6 -->
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label">Travel Date: </label>
              <input class="form-control" type="date" value="{{ $ticket->travel_date }}" name="travel_date" disabled>
            </div>
          </div><!-- col-4 -->
          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Issue Date: </label>
              <input class="form-control" type="date" value="{{ $ticket->issue_date }}" name="issue_date" disabled >
            </div>
          </div><!-- col-4 -->
          
         
          

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Issue From</label>
              <input class="form-control" type="text" value="{{ $ticket->issue_from }}" name="issue_from" disabled >
            </div>
          </div><!-- col-4 -->

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Purchase Amount: </label>
              <input class="form-control" type="text" value="{{ $ticket->purchase_amount }}" name="purchase_amount" disabled >
            </div>
          </div><!-- col-4 -->

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Sale Amount: </label>
              <input class="form-control" type="text" value="{{ $ticket->sale_amount }}" name="sale_amount" disabled >
            </div>
          </div><!-- col-4 -->

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Ticket No.: </label>
              <input class="form-control" type="text" value="{{ $ticket->ticket_number }}" name="ticket_number" disabled >
            </div>
          </div><!-- col-4 -->




         </div><!-- row -->
       
      </div><!-- form-layout -->
      <div class="form-layout-footer mg-t-30">
        <a href="{{ route('ticketRecords') }}" class="btn btn-dark mg-r-5" >Back</a>
        
      </div><!-- form-layout-footer -->

  </div>
@endsection