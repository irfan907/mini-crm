@extends('layouts.admin')
@section('title','Employee Detail')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Employee Details</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
        <div class="card card-body">
          <div class="form-group col-md-12">
            <label>First Name</label>
            <input type="text" name="first_name" value="{{  $employee->first_name }}" class="form-control" readonly>
            
          </div>

          <div class="form-group col-md-12">
            <label>Last Name</label>
            <input type="text" name="last_name" value="{{ $employee->last_name }}" class="form-control" readonly>
            
          </div>

          <div class="form-group col-md-12">
            <label>Company</label>
            <input type="text" class="form-control" value="{{ $employee->company->name }}" id="" readonly>
            
          </div>

          <div class="form-group col-md-12">
            <label>Email</label>
            <input type="email" name="email" value="{{  $employee->email }}" class="form-control" readonly>
            
          </div>

          <div class="form-group col-md-12">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ $employee->phone }}" class="form-control" readonly>
            
          </div>

                <div class="form-group col-md-12">
                    <a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
                </div>
        </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
@endsection