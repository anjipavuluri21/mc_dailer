@extends('admin.common.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit campaign list</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->
     
    <section class="content">
      <div class="container-fluid">
        @include('admin.common.message')
        <div class="row">
          
          <!-- left column -->
          <div class="col-md-6">
            <div class="card card-primary">
              <!-- <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div> -->
              <form method="post" action="{{route('updateUser')}}" >
                {{ csrf_field() }} 
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Name</label>
                  </div>
                  <div class="col-md-6">
                    <input value="{{$getuser->id}}" type="hidden" name="id">
                    <input value="{{$getuser->name}}" type="text" name="name" class="form-control"  placeholder="Name">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Mobile Number</label>
                  </div>
                  <div class="col-md-6">
                    <input value="{{$getuser->mobile_no}}" type="text" class="form-control" name="mobile_no" placeholder="Mobile Number">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Designation</label>
                  </div>
                  <div class="col-md-6">
                    <input value="{{$getuser->designation}}" type="text" class="form-control" name="designation" placeholder="Designation">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Department</label>
                  </div>
                  <div class="col-md-6">
                    <input value="{{$getuser->department}}"  type="text" class="form-control" name="department" placeholder="Department">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Gender</label>
                  </div>
                  <div class="col-md-6">
                    <input @if($getuser->gender == 1) checked="checked" @endif type="radio"  name="gender" value="1" />&nbsp;Male
                    <input @if($getuser->gender == 2) checked="checked" @endif type="radio"  name="gender" value="2" />&nbsp;Female
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">User Type</label>
                  </div>
                  <div class="col-md-6">
                    <select class="form-control" name="user_type">
                      <option value="">Select User type</option>
                      <option value="1" @if($getuser->type == 1) selected @endif>Admin</option>
                      <option value="2" @if($getuser->type == 2) selected @endif>User</option>
                    </select>
                  </div>
                </div><br>
                <button class="btn btn-primary" type="submit">Update</button>
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