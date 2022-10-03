@extends('admin.main-layout')
@section('content-header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1>User List</h1>
          @if(session('success'))
            <div class="text-success text-center">{{session('success')}}</div>
          @endif
          <table class="table table-bordered">
            <tr>
              <td>Id</td>
              <td>Name</td>
              <td>Email</td>
              <td>User Type</td>
              <td>Edit</td>
              <td>Delete</td>
            </tr>
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->user_type }}</td>
              <!-- <td><a href = 'usereditshow/{{ $user->id }}'>Edit</a></td> -->
              <td><a href="{{ url('admin/usereditshow/'.$user->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
              <td><a href="{{ url('admin/userdelete/'.$user->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            @endforeach
          </table>
        </div>
        <!-- /.card -->
      </div>
    </div>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection