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
              <li class="breadcrumb-item active">Dial Status</li>
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
          <div class="card-header"><h4><i class="fa fa-user"></i>&nbsp;Dial Status Report</h4></div>
          <div class="card-body">
            <button class="btn btn-primary float-right btn-sm" onclick="exportTableToCSV('DialStatus.csv')">Export</button>
              <table id="lead_listing" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Attempts</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>User Name</th>
                  <th>Mobile Number</th>
                  <th>Customer Name</th>
                  <th>telephone Number</th>
                  <th>Status</th>
                  <th>Dispo</th>
                  <th>Play</th>
                  <th>Download</th>
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
      ajax: '{!! route('dail_status_list') !!}',
      columns: [
         { data: 'attempts', name:'attempts'},
         { data: 'date', name: 'date' },
         { data: 'date', name: 'date'},
         { data: 'name',name:'name'},
         { data: 'mobile_no', name: 'moile_no'},
         { data: 'name', name:'name'},
         { data: 'mobile_no', name:'mobile_no'},
         { data: 'status', name:'status'},
         { data: 'dispo_name', name: 'dispo_name'},
         { data: 'audio', name: 'audio'},
         { data: 'download', name: 'download'}
         
      ]
  });
});
</script>
@endsection