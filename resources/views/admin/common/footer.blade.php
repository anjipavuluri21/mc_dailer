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
function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}
function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}
</script>
@yield('js')
</body>
</html>
