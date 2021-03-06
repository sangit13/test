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
            Master Account Type
            <small>Add Details</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Master Account Type</li>
          </ol>
        </section>
	<section class="content">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-8">
        <div class="box box-primary Custom-Box">
            <div class="box-header with-border" style="text-align: center;">
              <h2 class="box-title animated bounceInLeft PageTitle" style="font-weight: 800;color: #5696bb;">Add Account Type </h2>
              
              
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
            <form action="{{ url('form-mast-account-type-update') }}" method="POST" >
               @csrf
               <div class="row">
                
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>
                        Account Type Code : 
                        <span class="required-field"></span>
                      </label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                          <input type="text" class="form-control" name="acc_type_code" value="{{ $acctype_list->acctype_code }}">
                          <input type="hidden" name="acctypeId" value="{{ $acctype_list->id }}" placeholder="Enter Account Type Code">
                        </div>
                          <small id="emailHelp" class="form-text text-muted">
                            {!! $errors->first('acc_type_code', '<p class="help-block" style="color:red;">:message</p>') !!}
                          </small>

                    </div>
                    <!-- /.form-group -->
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>
                        Account Type Name : 
                        <span class="required-field"></span>
                      </label>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                          <input type="text" class="form-control" name="acc_type_name"  value="{{ $acctype_list->acctype_name }}" placeholder="Enter Account Type Name">
                      </div>
                      <small id="emailHelp" class="form-text text-muted">
                        {!! $errors->first('acc_type_name', '<p class="help-block" style="color:red;">:message</p>') !!}
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
          <a href="{{ url('/view-mast-account-type') }}" class="btn btn-primary" style="margin-right: 10px;"><i class="fa fa-eye"></i>&nbsp;&nbsp;View Account Type</a>
        </div>
      </div>

    </div>
     
	</section>
</div>

@include('admin.include.footer')


@endsection