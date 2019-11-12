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
              <form method="post" action="{{route('updateCompaign')}}" >
                {{ csrf_field() }} 
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Compaign Name</label>
                  </div>
                  <div class="col-md-6">
                    <input value="{{$editRes->id}}" type="hidden" name="id">
                    <input type="text" name="compaign_name" class="form-control"  value="{{$editRes->compaign_name}}">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Discription</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="discription" value="{{$editRes->discription}}">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">status</label>
                  </div>
                  <div class="col-md-6">
                    <select class="form-control" name="status">
                      <option value="">Select Status</option>
                      <option value="1" @if($editRes->status == 1) selected @endif> Active</option>
                     <option value="2" @if($editRes->status == 2) selected @endif> In Active</option>
                    </select>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Max Leads</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="max_leads" value="{{$editRes->max_leads}}">
                  </div>
                </div><br>
                  
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">List</label>
                  </div>
                  <div class="col-md-6">
                    <select class="form-control" name="list">
                        <option value="">Select List</option>
                        @foreach($listRes as $list )
                        <option value="{{$list->id}}">{{$list->list_name}}</option>
                        @endforeach
                      
                      
                    </select>
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