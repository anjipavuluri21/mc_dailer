@extends('admin.common.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Disposition</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Disposition List</li>
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
              <form method="post" action="{{route('list_disposition')}}">
                {{ csrf_field() }} 
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Name</label>
                  </div>
                  <div class="col-md-6">
                    <input value="{{$discription->id}}" type="hidden" name="id">
                    <input value="{{$discription->name}}" type="text" name="name" class="form-control"  placeholder="Name">
                  </div>
                </div><br>

                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">discription</label>
                  </div>
                  <div class="col-md-6">
                    <input value="{{$discription->discription}}" type="text" class="form-control" name="discription" placeholder="discription">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Dispo Code</label>
                  </div>
                  <div class="col-md-6">
                    <input value="{{$discription->dispo_code}}" type="text" class="form-control" name="comments" placeholder="Dispo Code">
                  </div>
                      <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Status</label>
                  </div>
                  <div class="col-md-6">
                    <input type="radio"  name="status" value="1" />&nbsp;Connected
                    <input type="radio"  name="status" value="2" />&nbsp;Not Connected
                  </div>
                </div><br>
                  <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Callback</label>
                  </div>
                  <div class="col-md-6">
                    <input type="radio"  name="callback" value="1" />&nbsp;Yes
                    <input type="radio"  name="callback" value="2" />&nbsp;No
                  </div>
                </div><br>
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