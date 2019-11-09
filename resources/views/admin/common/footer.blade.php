<!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-rc.5
    </div>
  </footer> -->

  <!-- Control Sidebar -->
 <!--  <aside class="control-sidebar control-sidebar-dark">
  </aside> -->
  <!-- /.control-sidebar -->
</div>
</body>



<script src="{{url('/')}}/public/plugins/jquery/jquery.min.js"></script>
<script src="{{url('/')}}/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{{url('/')}}/public/dist/js/adminlte.js"></script>
<script src="{{url('/')}}/public/dist/js/demo.js"></script>
<script src="{{url('/')}}/public/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{url('/')}}/public/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)

</script>
@yield('js')
</body>
</html>
