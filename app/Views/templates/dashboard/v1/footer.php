   <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php
    $dashboard = [
    "plugins/jquery/jquery.min.js",
    "plugins/jquery-ui/jquery-ui.min.js",
    "viewjs/resolvejquery.js",
    "plugins/bootstrap/js/bootstrap.bundle.min.js",
    "plugins/chart.js/Chart.min.js",
    "plugins/sparklines/sparkline.js",
    "plugins/jqvmap/jquery.vmap.min.js",
    "plugins/jqvmap/maps/jquery.vmap.usa.js",
    "plugins/jquery-knob/jquery.knob.min.js",
    "plugins/moment/moment.min.js",
    "plugins/daterangepicker/daterangepicker.js",
    "plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
    "plugins/summernote/summernote-bs4.min.js",
    "plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
    "dist/js/adminlte.js",
    "dist/js/demo.js",
    "dist/js/pages/dashboard.js"
    ];
    $chartjs = [
    "plugins/jquery/jquery.min.js",
    "plugins/bootstrap/js/bootstrap.bundle.min.js",
    "plugins/chart.js/Chart.min.js",
    "dist/js/adminlte.min.js",
    "dist/js/demo.js",
    "viewjs/charjs.js"
    ];
    $flot = [
    "plugins/jquery/jquery.min.js",
    "plugins/bootstrap/js/bootstrap.bundle.min.js",
    "dist/js/adminlte.min.js",
    "plugins/flot/jquery.flot.js",
    "plugins/flot/plugins/jquery.flot.resize.js",
    "plugins/flot/plugins/jquery.flot.pie.js",
    "dist/js/demo.js",
    "viewjs/flot.js"
    ];
    
    $inline = [
    "plugins/jquery/jquery.min.js",
    "plugins/bootstrap/js/bootstrap.bundle.min.js",
    "dist/js/adminlte.min.js",
    "plugins/jquery-knob/jquery.knob.min.js",
    "plugins/sparklines/sparkline.js",
    "dist/js/demo.js",
    "viewjs/inline.js"
    ];
    
    $uplot = [
    "plugins/jquery/jquery.min.js",
    "plugins/bootstrap/js/bootstrap.bundle.min.js",
    "plugins/uplot/uPlot.iife.min.js",
    "dist/js/adminlte.min.js",
    "dist/js/demo.js",
    "viewjs/uplot.js"
    ];
    
    $view = [
      'Dashboard' => $dashboard,
      'Chartjs' => $chartjs,
      'Flot' => $flot,
      'Inline' => $inline,
      'uPlot' => $uplot
    ];
    
    $scripts= $view[$title];
    foreach($scripts as $script){
      echo "<script src=\"".$script."\"></script>\n";
    }
    ?>
<script src="viewjs/dynamic-menu.js"></script>
</body>
</html>
