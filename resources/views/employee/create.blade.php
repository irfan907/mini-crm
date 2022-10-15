@extends('layouts.admin')
@section('title','Add Employee')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add New Employee</h1>
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
            <form action="{{ route('employees.store') }}" method="post">
                @csrf
                <div class="form-group col-md-12">
                  <label>First Name</label>
                  <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control @error('first_name') border border-danger @enderror">
                  @error('first_name')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="form-group col-md-12">
                  <label>Last Name</label>
                  <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control @error('last_name') border border-danger @enderror">
                  @error('last_name')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="form-group col-md-12">
                  <label>Company</label>
                  <select name="company_id" class="form-control @error('company_id') border border-danger @enderror">
                    <option value="">Select Company</option>
                    @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ old('company_id')=='$company->id' ? 'selected':'' }}>{{ $company->name }}</option>
                    @endforeach
                  </select>
                  @error('company_id')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="form-group col-md-12">
                  <label>Email</label>
                  <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') border border-danger @enderror">
                  @error('email')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="form-group col-md-12">
                  <label>Phone</label>
                  <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') border border-danger @enderror">
                  @error('phone')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="form-group col-md-12">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
        </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
@endsection