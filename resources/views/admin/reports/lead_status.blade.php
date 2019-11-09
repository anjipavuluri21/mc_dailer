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
              <li class="breadcrumb-item active">Reports</li>
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
          <div class="card-header"><h4><i class="fa fa-user"></i>&nbsp;Reports</h4></div>
          <div class="card-body">
            <a class="btn btn-primary float-right btn-sm" href="{{route('add_number',1)}}">Recycle</a>
            <a class="btn btn-primary float-right btn-sm" href="{{route('add_number',1)}}">Export</a>
              <table id="lead_listing" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>User Name</th>
                  <th>Mobile Number</th>
                  <th>Customer Name</th>
                  <th>Teleophone Number</th>
                  <th>Dispo</th>
                  <th>Dial Status</th>
                  <th>Assigned Status</th>
                  <th>Comments</th>
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
  var emp_table = $('#lead_listing').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{!! route('lead_listing') !!}',
      columns: [
          { Data: 'Date', name:'date'},
         { data: 'name', name: 'name' },
         { data: 'mobil_number', name: 'mobile_number'},
         { data: 'customer_name',name:'customer_name'},
         { data: 'telephone_number', name: 'telephone_number'},
         { data: 'dispo',name:'dispo'},
         { data: 'dial_status',name:'dial_status'},
         { data: 'assigned_status',name:'assigned_status'},
         { data: 'comments',name: 'comments'},
         
      ]
  });
});
</script>
@endsection