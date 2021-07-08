
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin WadeeCase</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?PHP echo base_url('assets/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?PHP echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?PHP echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?PHP echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- jQuery 3 -->
  <script src="<?PHP echo base_url('assets/jquery/dist/jquery.min.js'); ?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?PHP echo base_url('assets/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <!-- SlimScroll -->
  <!-- <script src="<?PHP echo base_url('assets/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script> -->
  <!-- AdminLTE App -->
  <script src="<?PHP echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="<?PHP echo base_url('assets/dist/js/demo.js'); ?>"></script> -->
  <!-- CK Editor -->
  <script src="<?PHP echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
  <script>
    $(document).ready(function () {
      $('.sidebar-menu').tree()
    })
  </script>

    <!-- DataTables -->
  <script src="<?PHP echo base_url('assets/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?PHP echo base_url('assets/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?PHP echo base_url('assets/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">



</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <!-- <a href="<?PHP echo site_url(''); ?>" class="logo"> -->
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>LNS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>WadeeCase</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
<!--           <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li> -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?PHP echo base_url('assets/images/gambar_user.png'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?PHP echo $nama; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?PHP echo base_url('assets/images/gambar_user.png'); ?>" class="img-circle" alt="User Image">

                <p>
                  <?PHP echo $nama; ?>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
<!--                 <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> -->
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
<!--                 <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="<?PHP echo base_url('main/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
<!--           <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>

 