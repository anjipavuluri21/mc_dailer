@include('admin.common.header')
@include('admin.common.sidebar')

<!-- BEGIN CONTENT -->
<div class="page-wrapper">
    <!-- BEGIN CONTENT BODY -->

    <!--div class="container-fluid"-->

    	
   @yield('content')
      
          
@include('admin.common.footer')
   
    <!-- END CONTENT BODY -->

<!-- END CONTENT -->

@yield('modelpopup')