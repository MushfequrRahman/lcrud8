@extends('admin.main-layout')
@section('content-header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>User List</h1>
                    <form action="/admin/useredit/<?php echo $users[0]->id; ?>" method="post" class="form-group">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type='text' class="form-control" name='name' value='<?php echo $users[0]->name; ?>' />
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type='text' class="form-control" name='email' value='<?php echo $users[0]->email; ?>' />
                                </td>
                            </tr>
                            <tr>
                                <td>User type</td>
                                <td>
                                    <input type='text' class="form-control" name='user_type' value='<?php echo $users[0]->user_type; ?>' />
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan='2'>
                                    <input type='submit' value="Update User" />
                                </td>
                            </tr>
                        </table>
                    </form>
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