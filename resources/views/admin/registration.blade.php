@extends('admin.main-layout')
@section('content-header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1>Registration</h1>
          <div class="container">
            <h2 class="text-center">User | Add</h2>
            @if(session('success'))
              <div class="text-success text-center">{{session('success')}}</div>
            @endif
            <br>
            <form action="/create" method="post" class="form-group" style="width:70%; margin-left:15%;">
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"><input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              <label class="form-group">Name:</label>
              <input type="text" class="form-control" placeholder="Name" name="name">
              <label>Email:</label>
              <input type="text" class="form-control" placeholder="Enter Email" name="email"><br>
              <label>Password:</label>
              <input type="text" class="form-control" placeholder="password" name="password">
              <label>User Type:</label>
              <input type="text" class="form-control" placeholder="User Type" name="user_type">
              <button type="submit" value="Add student" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection