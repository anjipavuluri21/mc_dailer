@extends('admin.common.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add List</li>
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
          <div class="col-md-6">
            <div class="card card-primary">
              <form method="post" action="{{route('add_list')}}">
                {{ csrf_field() }} 
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Name</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="list_name" class="form-control"  placeholder="List Name">
                  </div>
                </div><br>

                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Type</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="list_type" placeholder="List Type">
                  </div>
                </div><br>

                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-primary" type="reset">Cancel</button>
              </div>
              </form>


          </div>

        </div>

      </div>
    </section>


  </div>
@endsection

@section('js')

<script>

</script>
@endsection