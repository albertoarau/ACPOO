<?php
//creamos la sesion
/*session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['identificador']))
{
  header('Location: UILogin/');
  exit();
}
*/
  require_once('includes/basepage.class.php');
  $page = empty($_REQUEST['page']) ? 'home' : preg_replace('/[^a-zA-Z0-9\-_]/', '', $_REQUEST['page']);
  $pagepath = "includes/$page.class.php";
  if (file_exists($pagepath)) {
    require_once($pagepath);
    $pageclass = $page . 'Class';
  }
  else {
    $pageclass = 'BasePage';
  }
  $mainframe = new $pageclass($page);
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AC Condominios | ERP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Favicon and apple touch icons-->
  <link rel="shortcut icon" href="dist/img/logo/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="dist/img/logo/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="dist/img/logo/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="dist/img/logo/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="dist/img/logo/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="dist/img/logo/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="dist/img/logo/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="dist/img/logo/apple-touch-icon-152x152.png" />
  <!-- owl carousel css -->
</head>
<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
  <?php include("UIView/header.view.php"); ?>
  <?php include("UIView/menu.view.php");?>
  <?php $mainframe->render();?>
  <?php include("UIView/foot.view.php"); ?>
  </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
  <!--  <script src="plugins/chartjs/Chart.min.js"></script>-->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!--  <script src="dist/js/pages/dashboard2.js"></script>-->
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
</body>
</html>
