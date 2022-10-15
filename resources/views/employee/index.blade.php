@extends('layouts.admin')
@section('title','Employees')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Employees</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <div class="float-sm-right">
                <a href="{{ route('employees.create') }}" class="btn btn-primary">Add New Employee</a>
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
            <table class="table" id="employee-table">
                <thead>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td><span class="badge badge-info">{{ $employee->company->name }}</span></td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('employees.show',$employee->id) }}" class="btn btn-sm btn-info mr-1">Show</a>
                                <a href="{{ route('employees.edit',$employee->id) }}" class="btn btn-sm btn-primary mr-1">Edit</a>
                                <form action="{{ route('employees.destroy',$employee->id) }}" method="post">
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
                {{ $employees->links() }}
            </div>
        </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
@endsection
@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@endpush
@push('scripts')  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<script>
  $(document).ready( function () {
    $('#employee-table').DataTable({
    });
  });
</script>
@endpush