@extends('admin.frontend.AdminLayout')

@section('pagename')
    Extract Records
@endsection

@section('content')
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Extract all Records</h6>
    <form action="{{ route('ExportExcelDateFromTo') }}" method="POST">
      @csrf
    <div class="form-layout">
      <div class="row mg-b-25">
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Start Date: </label>
            <input class="form-control" type="date" name="start" required>
          </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">End Date: </label>
            <input class="form-control" type="date" name="end" required>
          </div>
        </div><!-- col-4 -->

        <div class="form-layout-footer mg-t-30">
            <button class="btn btn-success mg-r-5" type="submit">Download</button>            
        </div><!-- form-layout-footer -->
    </form>
        <div class="form-layout-footer mg-t-30">
            <a href="{{ route('ExportExcel') }}" class="btn btn-primary mg-r-5">
                Download All Records      
            </a>
        </div><!-- form-layout-footer -->
        
       </div><!-- row -->
     
    </div><!-- form-layout -->

    
  </div>
@endsection