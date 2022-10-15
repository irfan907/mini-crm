@extends('layouts.admin')
@section('title','Companies')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Companies</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <div class="float-sm-right">
                <a href="{{ route('companies.create') }}" class="btn btn-primary">Add New Company</a>
            </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
        <div class="card card-body">
            <table class="table" id="company-table">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Logo</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->website }}</td>
                        <td>
                          @if(isset($company->logo) && !empty($company->logo) && file_exists(public_path($company->logo)))
                          <img src="{{ asset($company->logo) }}" class=" " width="30" height="30" alt=" " />
                          @endif
                        </td>
                        <td>
                            <div class="row">
                                <a href="{{ route('companies.show',$company->id) }}" class="btn btn-sm btn-info mr-1">Show</a>
                                <a href="{{ route('companies.edit',$company->id) }}" class="btn btn-sm btn-primary mr-1">Edit</a>
                                <form action="{{ route('companies.destroy',$company->id) }}" method="post">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                              </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-3">
                {{ $companies->links() }}
            </div>
        </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
@endsection