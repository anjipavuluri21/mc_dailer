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
              <li class="breadcrumb-item active">disposition Details</li>
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
          <div class="card-header"><h4><i class="fa fa-list"></i>&nbsp;Disposition List</h4></div>
          <div class="card-body">
            
              <a class="btn btn-primary float-right btn-sm" href="{{route('add_disposition')}}"><i class="fa fa-plus" style="font-size:14px;"></i>&nbsp;Add</a>
                         <table id="lead_listing" class="table table-bordered table-hover">
                <thead>
                <tr>
                    
                  <th>Main Dispo Name</th>
                  <th>User Name</th>
                  <th>Discription</th>
                  <th>Main Dispo Code</th>
                  <th>Status</th>
                  <th>Call Back</th>
             
                  <th>Action</th>
                </tr>
                </thead>
                
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
      ajax: '{!! route('dispositionList') !!}',
      columns: [
         { data: 'dispo_name', name: 'dispo_name'},
         { data: 'user_name', name: 'user_name'},
         { data: 'discription',name: 'discription'},
         { data: 'dispo_code',name: 'dispo_code'},
         { data: 'status',name: 'status'},
         { data: 'call_back',name:'call_back'},
         
         { data: 'action', name: 'action', orderable: false, searchable: false}
      ]
  });
});
</script>
@endsection