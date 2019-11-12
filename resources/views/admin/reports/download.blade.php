@extends('admin.common.main')
  <style>

   .row{

       margin-bottom:4px;
   }   
  .side1
  {
    background-color:purple;
    text-align: end;
    color:white;

  }
  div input{
    width:100%;
    border-radius: 5px 5px;
    height:38px;
    
    display: block;
    margin-bottom: 5px;
    margin-left:-12px;

  }
  </style>
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
<!--      <div class="container-fluid">
      
              <div class="row">
                    <div class="col-md-3" style="background-color: red;">
                        <label for="exampleInputEmail1" style="float: right">From Date:</label>
                  </div>
                    <div class="col-md-3">
                    <input value="" type="date" name="name" class="form-control"  placeholder="Name">
                  </div>
                  <div class="col-md-3">
                    <input value="" type="hidden" name="id">
                    <input value="" type="date" name="name" class="form-control"  placeholder="Name">
                  </div>
                </div><br>
                
             </div>
      </div>-->
<div class="container">
    <div class="container-fluid">
    <div class="row">

        
            
        </div>
    <div class="row">

        <div class="col-md-4 sm-4 side1">
                <p>From Date:</p>
                <p>End Date:</p>
                <p>User(MobileNo)</p>
        </div>
        &nbsp;&nbsp;
        <div class="col-md-4 sm-4">
            <input type="text"/>
            <input type="text"/>
            <input type="text"/>
            
        </div>
       
    </div>
    </div>
    


    <div class="row">

            <button class="btn btn-primary">Compress</button>
    
        </div>

</div>
      <div class="card-footer">Footer</div>      
          </section>
     @endsection

@section('js')
<script>

</script>
@endsection
