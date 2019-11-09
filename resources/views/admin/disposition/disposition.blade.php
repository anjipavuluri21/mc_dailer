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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Disposition Details</li>
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
          <div class="card-header"><h4><i class="fa fa-list"></i>&nbsp;Disposition Details</h4></div>
          <div class="card-body">
            <a class="btn btn-primary float-right btn-sm" href="{{route('add_list')}}"><i class="fa fa-plus" style="font-size:14px;"></i>&nbsp;Add</a>
                         <table id="lead_listing" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>List Name</th>
                  <th>List Type</th>
                  <th>Total Leads</th>
                  <th>Good Leads</th>
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
  var emp_table = $('#lead_listing').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{!! route('log_list') !!}',
      columns: [
         { data: 'list_name', name: 'list_name'},
         { data: 'list_type',name: 'list_type'},
         { data: 'total_leads',name: 'total_leads'},
         { data: 'good_leads',name: 'good_leads'},
         { data: 'action', name: 'action', orderable: false, searchable: false}
      ]
  });
});
</script>
@endsection