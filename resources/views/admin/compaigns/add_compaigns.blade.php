@extends('admin.common.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Disposition</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Compaign</li>
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
          
          <!-- left column -->
          <div class="col-md-6">
            <div class="card card-primary">
              <!-- <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div> -->
              <form method="post" action="{{route('list_compaigns')}}">
                {{ csrf_field() }} 
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Compaign Name</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control"  placeholder="Compaign Name">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Discription</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="email" placeholder="Discription">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">status</label>
                  </div>
                  <div class="col-md-6">
                    <select class="form-control" name="status">s
                      <option value="">Select Status</option>
                      <option value="1">Active</option>
                      <option value="2">InActive</option>
                    </select>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Max Leads</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="maxleads" placeholder="Max Leads">
                  </div>
                </div><br>
                 <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Details</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="details" placeholder="Details">
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