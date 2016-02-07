<?php namespace Views;

$template = new App();
class App {

    public function __construct(){
      //creamos la sesion
  /*    session_start();
      //validamos si se ha hecho o no el inicio de sesion correctamente
      //si no se ha hecho la sesion nos regresará a login.php
      if(!isset($_SESSION['identificador']))
      {
         header("Location: " . URL . "login");
        exit();
      }
*/
      ?>
      <!DOCTYPE html>
      <html lang="es">
          <head>
              <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <title>AC Condominios | ERP</title>
              <!-- Tell the browser to be responsive to screen width -->
              <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
              <!-- Bootstrap 3.3.5 -->
              <link rel="stylesheet" href="<?php echo URL; ?>Views/app/AdminLTE/bootstrap/css/bootstrap.min.css">
              <!-- Font Awesome -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
              <!-- Ionicons -->
              <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
              <!-- Theme style -->
              <link rel="stylesheet" href="<?php echo URL; ?>Views/app/AdminLTE/dist/css/AdminLTE.min.css">
              <!-- AdminLTE Skins. Choose a skin from the css/skins
                   folder instead of downloading all of them to reduce the load. -->
              <link rel="stylesheet" href="<?php echo URL; ?>Views/app/AdminLTE/dist/css/skins/_all-skins.min.css">
              <!-- iCheck -->
              <link rel="stylesheet" href="<?php echo URL; ?>Views/app/AdminLTE/plugins/iCheck/flat/blue.css">
              <!-- Morris chart -->
              <link rel="stylesheet" href="<?php echo URL; ?>Views/app/AdminLTE/plugins/morris/morris.css">
              <!-- jvectormap -->
              <link rel="stylesheet" href="<?php echo URL; ?>Views/app/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
              <!-- Date Picker -->
              <link rel="stylesheet" href="<?php echo URL; ?>Views/app/AdminLTE/plugins/datepicker/datepicker3.css">
              <!-- Daterange picker -->
              <link rel="stylesheet" href="<?php echo URL; ?>Views/app/AdminLTE/plugins/daterangepicker/daterangepicker-bs3.css">
              <!-- bootstrap wysihtml5 - text editor -->
              <link rel="stylesheet" href="<?php echo URL; ?>Views/app/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
              <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
              <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
              <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
              <![endif]-->
          </head>
          <body class="hold-transition skin-green-light sidebar-mini">
          <div class="wrapper">
            <?php

                  require_once "includes/headers.php";
                  require_once "includes/sidebars.php"
                  ?>
                  <!-- Content Wrapper. Contains page content -->

                <!-- /.content-wrapper -->

         <?php
    }

    public function __destruct(){
        require_once "includes/foots.php";
      ?>
    </div><!-- ./wrapper -->
<?
require_once "includes/controls.php";

?>
  <!-- jQuery 2.1.4 -->
  <script src="<?php echo URL; ?>Views/app/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.5 -->
  <script src="<?php echo URL; ?>Views/app/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="<?php echo URL; ?>Views/app/AdminLTE/plugins/morris/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo URL; ?>Views/app/AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?php echo URL; ?>Views/app/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo URL; ?>Views/app/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo URL; ?>Views/app/AdminLTE/plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="<?php echo URL; ?>Views/app/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?php echo URL; ?>Views/app/AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo URL; ?>Views/app/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?php echo URL; ?>Views/app/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo URL; ?>Views/app/AdminLTE/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo URL; ?>Views/app/AdminLTE/dist/js/app.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo URL; ?>Views/app/AdminLTE/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo URL; ?>Views/app/AdminLTE/dist/js/demo.js"></script>



</body>
</html>

      <?php
    }
}

 ?>
