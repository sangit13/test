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
            Master Um
            <small>Update Details</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Master Um</li>
          </ol>
        </section>
	<section class="content">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-8">
        <div class="box box-primary Custom-Box">
            <div class="box-header with-border" style="text-align: center;">
              <h2 class="box-title animated bounceInLeft PageTitle" style="font-weight: 800;color: #5696bb;">Update Um </h2>
              
              
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
            <form action="{{ url('form-mast-um-update') }}" method="POST" >
               @csrf
               <div class="row">
                
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>
                        Um Code : 
                        <span class="required-field"></span>
                      </label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
                          <input type="text" class="form-control" name="um_code" value="{{ $um_list->um_code }}" placeholder="Enter Um Code">
                          <input type="hidden" name="umId" value="{{ $um_list->id }}">
                        </div>
                          <small id="emailHelp" class="form-text text-muted">
                            {!! $errors->first('um_code', '<p class="help-block" style="color:red;">:message</p>') !!}
                          </small>

                    </div>
                    <!-- /.form-group -->
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>
                        Um Name : 
                        <span class="required-field"></span>
                      </label>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-arrow-right"></i></span>
                          <input type="text" class="form-control" name="um_name" value="{{ $um_list->um_name }}" placeholder="Enter Um Name">
                      </div>
                      <small id="emailHelp" class="form-text text-muted">
                        {!! $errors->first('um_name', '<p class="help-block" style="color:red;">:message</p>') !!}
                      </small>
                    </div>
                    <!-- /.form-group -->
                  </div>

                <!-- /.col -->
                
              </div>
              <!-- /.row -->

              
              <!-- /.row -->



              
              <div style="text-align: center;">
                 <button type="Submit" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp; Update 
                 </button>
              </div>
            </form>
          </div><!-- /.box-body -->
           
          </div>
      </div>
      <div class="col-sm-3">
        <div class="box-tools pull-right">
          <a href="{{ url('/view-mast-um') }}" class="btn btn-primary" style="margin-right: 10px;"><i class="fa fa-eye"></i>&nbsp;&nbsp;View Um</a>
        </div>
      </div>

    </div>
     
	</section>
</div>

@include('admin.include.footer')


@endsection