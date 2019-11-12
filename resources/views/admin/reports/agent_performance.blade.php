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
              <li class="breadcrumb-item active">Agent Performance Report</li>
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
              <a class="btn btn-primary float-right btn-sm" href="{{route('add_number',1)}}">Export</a>
              <table id="lead_listing" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Total Login Time</th>
                  <th>Total Pause Time</th>
                  <th>Total Break time</th>
                  <th>Total talk time</th>
                  <th>Success Calls</th>
                  <th>Failed Calls</th>
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
         { Data: 'attempts', name:'attempts'},
         { data: 'date', name: 'date' },
         { data: 'time', name: 'time'},
         { data: 'user_name',name:'User_name'},
         { data: 'mobile_no', name: 'moile_no'},
         { data: 'customer_name', name:'customer_name'},
         { data: 'telephone_no', name:'telephone_no'},
         { data: 'status', name:'status'},
         { data: 'dispo', name: 'dispo'},
         { data: 'play', name: 'play'},
         { data: 'download', name: 'download'}
         
      ]
  });
});
</script>
@endsection