@extends('admin.common.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         @include('admin.common.message')
        <div class="card">
          <div class="card-header"><h4><i class="fa fa-user"></i>&nbsp;Users List</h4></div>
          <div class="card-body">
            <a class="btn btn-primary float-right btn-sm" href="{{route('add_user')}}"><i class="fa fa-plus" style="font-size:14px;"></i>&nbsp;Add</a>
                         <table id="user_listing" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Mobile Number</th>
                  <th>Designation</th>
                  <th>Department</th>
                  <th>Gender</th>
                  <th>User Type</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
              </tbody>
            </table>
          </div>
          <div class="card-footer">Footer</div>
        </div>

      </div>
    </section>
  </div>
@endsection

@section('js')

<script>
$(document).ready(function(){ 
  var emp_table = $('#user_listing').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{!! route('listing_alluser') !!}',
      columns: [
         { data: 'name', name: 'name' },
         { data: 'mobile_no', name: 'mobile_no'},
         { data: 'designation',name: 'designation'},
         { data: 'department',name: 'department'},
         { data: 'gender', name: 'gender'},
         { data: 'user_type', name: 'user_type'},
         { data: 'action', name: 'action', orderable: false, searchable: false}
      ]
  });
});

</script>
@endsection