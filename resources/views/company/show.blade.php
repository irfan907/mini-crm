@extends('layouts.admin')
@section('title','Company Detail')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Company Details</h1>
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
                    <label>Name</label>
                    <input type="text" name="name" value="{{ $company->name }}" class="form-control " readonly>
                </div>

                <div class="form-group col-md-12">
                    <label>Email</label>
                    <input type="text" name="email" value="{{ $company->email }}" class="form-control " readonly>
                </div>

                <div class="form-group col-md-12">
                    <label>Logo</label>
                    <input type="text" name="logo" value="{{ $company->logo }}" class="form-control " readonly>
                </div>

                <div class="form-group col-md-12">
                    <a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
                </div>
        </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
@endsection