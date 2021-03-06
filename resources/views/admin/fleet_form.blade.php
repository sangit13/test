@extends('admin.main')

@section('AdminMainContent')

@include('admin.include.header')

@include('admin.include.navbar')

@include('admin.include.sidebar')

<style type="text/css">
  .PageTitle{
    margin-right: 1px !important;
  }
 .required-field::before {
    content: "*";
    color: red;
  }
  .Custom-Box {
    /*border: 1px solid #e0dcdc;
    border-radius: 10px;
*/    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.12), 0 1px 2px 4px rgba(0,0,0,0.08);
  }
</style>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Master Fleet
            <small>Add Details</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Master Fleet</li>
          </ol>
        </section>
	<section class="content">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="box box-primary Custom-Box">
            <div class="box-header with-border" style="text-align: center;">
              <h2 class="box-title animated bounceInLeft PageTitle" style="font-weight: 800;color: #5696bb;">Add Master Fleet</h2>
              
              
            </div><!-- /.box-header -->
            @if(Session::has('alert-success'))

              <div class="alert alert-success alert-dismissible" style="width: 96%;margin-left: 2%;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>
                  <i class="icon fa fa-check"></i>
                  Success...!
                </h4>
                 {!! session('alert-success') !!}
              </div>


            @endif


            @if(Session::has('alert-error'))

              <div class="alert alert-danger alert-dismissible" style="width: 96%;margin-left: 2%;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>
                  <i class="icon fa fa-ban"></i>
                  Error...!
                </h4>
                {!! session('alert-error') !!}
              </div>

            @endif

          <div class="box-body">
            <form action="{{ url('form-mast-fleet-save') }}" method="POST" >
               @csrf
               <div class="row">
                
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>
                        Truck No : 
                        <span class="required-field"></span>
                      </label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                          <input type="text" class="form-control" name="truck_no" value="{{ old('truck_no') }}" placeholder="Enter Truck No">
                        </div>
                          <small id="emailHelp" class="form-text text-muted">
                            {!! $errors->first('truck_no', '<p class="help-block" style="color:red;">:message</p>') !!}
                          </small>

                    </div>
                    <!-- /.form-group -->
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>
                        Regd Date : 
                        <span class="required-field"></span>
                      </label>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                          <input type="text" class="form-control datepicker" name="regd_date"  value="{{ old('regd_date') }}" placeholder="Enter Regd Date">
                      </div>
                      <small id="emailHelp" class="form-text text-muted">
                        {!! $errors->first('regd_date', '<p class="help-block" style="color:red;">:message</p>') !!}
                      </small>
                    </div>
                    <!-- /.form-group -->
                  </div>

                  
                <!-- /.col -->
                
              </div>
              <!-- /.row -->

              <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>
                        Make Model: 
                        <span class="required-field"></span>
                      </label>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          <input type="text" class="form-control" name="make_model"  value="{{ old('make_model') }}" placeholder="Enter Make Model">
                      </div> 
                      <small id="emailHelp" class="form-text text-muted">
                        {!! $errors->first('make_model', '<p class="help-block" style="color:red;">:message</p>') !!}
                      </small>
                    </div>
                    <!-- /.form-group -->
                  </div>
                
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>
                        Base Location :
                        <span class="required-field"></span>
                      </label>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                          <input type="text" class="form-control" name="base_location" value="{{ old('base_location') }}" placeholder="Enter Base Location">
                      </div>
                          <small id="emailHelp" class="form-text text-muted">
                            {!! $errors->first('base_location', '<p class="help-block" style="color:red;">:message</p>') !!}
                          </small>
                    </div>
                    <!-- /.form-group -->
                  </div>
                <!-- /.col -->
                
              </div>
              <!-- /.row -->



              <div class="row">
                 

                 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>
                        Wheels Type : 
                        <span class="required-field"></span>
                      </label>
                      <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                          </span>
                       <input name="wheel_type" class="form-control" value="{{ old('wheel_type') }}" placeholder="Enter Wheels Type">
                      </div>
                      <small id="emailHelp" class="form-text text-muted">
                        {!! $errors->first('wheel_type', '<p class="help-block" style="color:red;">:message</p>') !!}
                      </small>
                      
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>
                        Load Capacity : 
                        <span class="required-field"></span>
                      </label>
                      <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-caret-right"></i>
                          </span>
                        <input type="text" name="load_capacity" class="form-control" value="{{ old('load_capacity') }}" placeholder="Enter Load Capacity">
                      </div>
                      <small id="emailHelp" class="form-text text-muted">
                        {!! $errors->first('load_capacity', '<p class="help-block" style="color:red;">:message</p>') !!}
                      </small>
                    </div>
                    <!-- /.form-group -->
                  </div>
              </div>
              <div style="text-align: center;">
                 <button type="Submit" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp; Save 
                 </button>
              </div>
            </form>
          </div><!-- /.box-body -->
           
          </div>
      </div>
      <div class="col-sm-2">
        <div class="box-tools pull-right">
          <a href="{{ url('/view-mast-fleet') }}" class="btn btn-primary" style="margin-right: 10px;"><i class="fa fa-eye"></i>&nbsp;&nbsp;View Fleet</a>
        </div>
      </div>

    </div>
     
	</section>
</div>

@include('admin.include.footer')

<script type="text/javascript">
  
  $(document).ready(function() {
    $('.datepicker').datepicker({
      format: 'yyyy/mm/dd',
      orientation: 'bottom',
      todayHighlight: 'true',
     // startDate: 'today',
    });
});
</script>
@endsection