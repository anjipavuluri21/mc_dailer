@extends('admin.common.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h1><i class="fa fa-download" aria-hidden="true"></i> Voicefiles Downlaod</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"> Voicefiles Download</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->
     @include('admin.common.message')
     <section class="content">
      <div class="container-fluid">
      
              <div class="row">
                    <div class="col-md-3" style="background-color: red;">
                        <label for="exampleInputEmail1" style="float: right">From Date:</label>
                  </div>
                    <div class="col-md-3">
                    <input value="" type="date" name="name" class="form-control"  placeholder="Name">
                  </div>
<!--                  <div class="col-md-3">
                    <input value="" type="hidden" name="id">
                    <input value="" type="date" name="name" class="form-control"  placeholder="Name">
                  </div>-->
                </div><br>
                
             </div>
      </div>
          
            
          </section>
     @endsection

@section('js')
<script>

</script>
@endsection
