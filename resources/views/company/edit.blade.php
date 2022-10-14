@extends('layouts.admin')
@section('title','Companies')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Company</h1>
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
            <form action="{{ route('companies.update',$company->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group col-md-12">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ old('name') ?? $company->name }}" class="form-control @error('name') border border-danger @enderror">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group col-md-12">
                    <label>Email</label>
                    <input type="text" name="email" value="{{ old('email') ?? $company->email }}" class="form-control @error('email') border border-danger @enderror">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group col-md-12">
                    <label>Logo</label>
                    <input type="text" name="logo" value="{{ old('logo') ?? $company->logo }}" class="form-control @error('logo') border border-danger @enderror">
                    @error('logo')
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