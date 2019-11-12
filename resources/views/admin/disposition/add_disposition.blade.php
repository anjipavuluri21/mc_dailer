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
              <li class="breadcrumb-item active">Add Disposition</li>
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
              <form method="post" action="{{route('saveDisposition')}}">
                {{ csrf_field() }} 
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Disposition Name</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="dispo_name" class="form-control"  placeholder="dispo Name">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">User</label>
                  </div>
                  <div class="col-md-6">
                    <select class="form-control" name="user_id">
                        <option value="">Select User</option>
                        @foreach($userRes as $list )
                        <option value="{{$list->id}}">{{$list->name}}</option>
                        @endforeach
                      
                      
                    </select>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Discription</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="discription" placeholder="Discription">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Dispo Code</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="dispo_code" placeholder="Dispo Code">
                  </div>
                </div><br>
                
               
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Call Back</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="call_back" placeholder="callback">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Status</label>
                  </div>
                  <div class="col-md-6">
                    <select class="form-control" name="status">
                      <option value="">Select Status</option>
                      <option value="1">Connected</option>
                      <option value="2">Not Connected</option>
                    </select>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Assigned Status</label>
                  </div>
                  <div class="col-md-6">
                    <select class="form-control" name="assign_status">
                      <option value="">Select Status</option>
                      <option value="1">Assigned</option>
                      <option value="2">Not Assigned</option>
                    </select>
                  </div>
                </div><br>
                 <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Comments</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="comments" placeholder="comments">
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