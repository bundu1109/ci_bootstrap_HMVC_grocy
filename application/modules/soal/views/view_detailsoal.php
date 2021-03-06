<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Data Tables</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/datatables.net/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/dist/css/skins/_all-skins.min.css">

    <!-- Plugins jexcel -->

    <link rel="stylesheet" type="text/css" href=" <?php  echo BASE_URL." /plugins/jexcel/exsternal/css.css " ?>   ">

    <link rel="stylesheet" href="<?php  echo BASE_URL." /plugins/jexcel/exsternal/style.css " ?>" type="text/css" />


    <link rel="stylesheet" href="<?php echo  BASE_URL; ?>/plugins/jexcel/dist/css/jquery.jexcel.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo  BASE_URL; ?>/plugins/jexcel/dist/css/jquery.jcalendar.css" type="text/css" />

    <style>
        .my-input-class {
            padding: 3px 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .my-confirm-class {
            padding: 3px 6px;
            font-size: 12px;
            color: white;
            text-align: center;
            vertical-align: middle;
            border-radius: 4px;
            background-color: #337ab7;
            text-decoration: none;
        }

        .my-cancel-class {
            padding: 3px 6px;
            font-size: 12px;
            color: white;
            text-align: center;
            vertical-align: middle;
            border-radius: 4px;
            background-color: #a94442;
            text-decoration: none;
        }

        .error {
            border: solid 1px;
            border-color: #a94442;
        }

        .destroy-button {
            padding: 5px 10px 5px 10px;
            border: 1px blue solid;
            background-color: lightgray;
        }
    </style>

    <!-- /Plugins jexcel -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
                    <b>Admin</b>LTE</span>
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
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small>
                                                        <i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small>
                                                        <i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small>
                                                        <i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small>
                                                        <i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small>
                                                        <i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">See All Messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause
                                                design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar">
                                <i class="fa fa-gears"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce
                        </p>
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION
                    </li>
                    <li class="treeview">
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard
                            </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo BASE_URL() ?>dashboard">
                                    <i class="fa fa-circle-o"></i> Dashboard v1</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>dashboard">
                                    <i class="fa fa-circle-o"></i> Dashboard v2</a>
                            </li>
                        </ul>
                    </li>

                    <li class="active treeview">
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-th"></i>
                            <span>Master
                            </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo BASE_URL() ?>peserta">
                                    <i class="fa fa-circle-o"></i> Peserta Evalusasi level 3 dan 4</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/charts/morris.html">
                                    <i class="fa fa-circle-o"></i> Soal Evaluasi level 3</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/charts/flot.html">
                                    <i class="fa fa-circle-o"></i> Judul Pembelajaran</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/charts/inline.html">
                                    <i class="fa fa-circle-o"></i> Data Atasan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-files-o"></i>
                            <span>Layout Options
                            </span>
                            <span class="pull-right-container">
                                <span class="label label-primary pull-right">4
                                </span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/layout/top-nav.html">
                                    <i class="fa fa-circle-o"></i> Top Navigation</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/layout/boxed.html">
                                    <i class="fa fa-circle-o"></i> Boxed</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/layout/fixed.html">
                                    <i class="fa fa-circle-o"></i> Fixed</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/layout/collapsed-sidebar.html">
                                    <i class="fa fa-circle-o"></i> Collapsed Sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/widgets.html">
                            <i class="fa fa-th"></i>
                            <span>Widgets
                            </span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green">new</small>
                            </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-pie-chart"></i>
                            <span>Charts
                            </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/charts/chartjs.html">
                                    <i class="fa fa-circle-o"></i> ChartJS</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/charts/morris.html">
                                    <i class="fa fa-circle-o"></i> Morris</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/charts/flot.html">
                                    <i class="fa fa-circle-o"></i> Flot</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/charts/inline.html">
                                    <i class="fa fa-circle-o"></i> Inline charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-laptop"></i>
                            <span>UI Elements
                            </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/UI/general.html">
                                    <i class="fa fa-circle-o"></i> General</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/UI/icons.html">
                                    <i class="fa fa-circle-o"></i> Icons</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/UI/buttons.html">
                                    <i class="fa fa-circle-o"></i> Buttons</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/UI/sliders.html">
                                    <i class="fa fa-circle-o"></i> Sliders</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/UI/timeline.html">
                                    <i class="fa fa-circle-o"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/UI/modals.html">
                                    <i class="fa fa-circle-o"></i> Modals</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-edit"></i>
                            <span>Forms
                            </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/forms/general.html">
                                    <i class="fa fa-circle-o"></i> General Elements</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/forms/advanced.html">
                                    <i class="fa fa-circle-o"></i> Advanced Elements</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/forms/editors.html">
                                    <i class="fa fa-circle-o"></i> Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-table"></i>
                            <span>Tables
                            </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/tables/simple.html">
                                    <i class="fa fa-circle-o"></i> Simple tables</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/tables/data.html">
                                    <i class="fa fa-circle-o"></i> Data tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/calendar.html">
                            <i class="fa fa-calendar"></i>
                            <span>Calendar
                            </span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-red">3</small>
                                <small class="label pull-right bg-blue">17</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/mailbox/mailbox.html">
                            <i class="fa fa-envelope"></i>
                            <span>Mailbox
                            </span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-yellow">12</small>
                                <small class="label pull-right bg-green">16</small>
                                <small class="label pull-right bg-red">5</small>
                            </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-folder"></i>
                            <span>Examples
                            </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/examples/invoice.html">
                                    <i class="fa fa-circle-o"></i> Invoice</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/examples/profile.html">
                                    <i class="fa fa-circle-o"></i> Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/examples/login.html">
                                    <i class="fa fa-circle-o"></i> Login</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/examples/register.html">
                                    <i class="fa fa-circle-o"></i> Register</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/examples/lockscreen.html">
                                    <i class="fa fa-circle-o"></i> Lockscreen</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/examples/404.html">
                                    <i class="fa fa-circle-o"></i> 404 Error</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/examples/500.html">
                                    <i class="fa fa-circle-o"></i> 500 Error</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/examples/blank.html">
                                    <i class="fa fa-circle-o"></i> Blank Page</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/pages/examples/pace.html">
                                    <i class="fa fa-circle-o"></i> Pace Page</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-share"></i>
                            <span>Multilevel
                            </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                                    <i class="fa fa-circle-o"></i> Level One</a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                                    <i class="fa fa-circle-o"></i> Level One
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                                            <i class="fa fa-circle-o"></i> Level Two</a>
                                    </li>
                                    <li class="treeview">
                                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                                            <i class="fa fa-circle-o"></i> Level Two
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-left pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li>
                                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                                                    <i class="fa fa-circle-o"></i> Level Three</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                                                    <i class="fa fa-circle-o"></i> Level Three</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                                    <i class="fa fa-circle-o"></i> Level One</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/https://adminlte.io/docs">
                            <i class="fa fa-book"></i>
                            <span>Documentation
                            </span>
                        </a>
                    </li>
                    <li class="header">LABELS
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-circle-o text-red"></i>
                            <span>Important
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-circle-o text-yellow"></i>
                            <span>Warning
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/#">
                            <i class="fa fa-circle-o text-aqua"></i>
                            <span>Information
                            </span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Data Soal Evaluasi Level 3 dan Level 4
                    <small>advanced tables</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="#">Tables</a>
                    </li>
                    <li class="active">Data tables</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-xs-12">

                    </div>
                    <!-- box-header -->
                    <div class="box">
                        <div class="box-header">
                            <br>
                            <h3 class="box-title">Soal Evaluasi Level 3 :
                                <b>
                                    <?php echo $judul." (".$kode.")";?> </b>
                            </h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div>
                                <button type="button" data-toggle='modal' data-target='#modal-tambah' class="btn btn-info margin">Tambah Soal</button>
                            </div>

                            <table id="detail_soal" class="table table-bordered table-striped responsive" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th colspan="4">
                                            <center>Soal Peserta</center>
                                        </th>
                                        <th colspan="4">
                                            <center>Soal Atasan</center>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Id</th>
                                        <th>No Index</th>
                                        <th>
                                            <center>Soal</center>
                                        </th>
                                        <th></th>
                                        <th>Id</th>
                                        <th>No Index</th>
                                        <th>
                                            <center>Soal</center>
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=0;
                                            foreach($query as $row){
                                                $no++;
                                                echo "<tr>";
                                                    echo "<td>".$no."</td>";
                                                    echo "<td>".$row->id_peserta."</td>";
                                                    echo "<td>".$row->noIndex_peserta."</td>";
                                                    echo "<td>".$row->soal_peserta."</td>";
                                                    echo "<td>";
                                                        if ($row->id_peserta) {
                                                            echo "<button type='button' data-toggle='modal' data-target='#modal-default".$row->id_peserta."' class='btn btn-danger btn-xs'><i class='fa fa-window-close' aria-hidden='true'></i></button>";
                                                        }                                                        
                                                    echo "</td>";
                                                    echo "<td>".$row->id_atasan."</td>";
                                                    echo "<td>".$row->noIndex_atasan."</td>";
                                                    echo "<td>".$row->soal_atasan."</td>";
                                                    echo "<td>";
                                                        if ($row->id_atasan) {
                                                            echo "<button type='button' data-toggle='modal' data-target='#modal-default".$row->id_atasan."' class='btn btn-danger btn-xs'><i class='fa fa-window-close' aria-hidden='true'></i></button>";
                                                        }
                                                    echo "</td>";
                                                echo "</tr>";
                                            }

                                        ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>



        </div>

        </section>
        <!-- /.content -->
    </div>
    <!--  Modal untuk tambah Soal -->
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">                
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tambah Sola Evaluasi Level 3</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                                <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form">                             
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Masukkan Soal</label>
                                    <textarea class="form-control" rows="3" placeholder="Soal ..."></textarea>
                                </div>                            
                                <!-- radio -->
                                <div class="form-group">
                                <label>Soal Untuk</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> Peserta
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Atasan
                                        </label>
                                    </div>                                  
                                </div>
                                <div class="form-group">
                                    <label>Nomor Index</label>
                                    <input type="text" class="form-control" placeholder="Index ...">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" onclick="" class="btn btn-primary">Tambah Soal</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->




    <!-- MODAL HAPUS PESERTA dan ATASAN -->
    <?php
            foreach($query as $row){
        ?>


        <!-- Modal Peserta -->
        <div class="modal fade" id="modal-default<?php echo $row->id_peserta;?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Hapus Soal Untuk Peserta</h4>
                    </div>
                    <div class="modal-body">

                        <p>
                            <?php echo $row->soal_peserta;?>
                        </p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" onclick="hapusSoal('<?php echo $row->id_peserta;?>')" class="btn btn-primary">Hapus</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- Modal Atasan -->
        <div class="modal fade" id="modal-default<?php echo $row->id_atasan;?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Hapus Soal Untuk Atasan</h4>
                    </div>
                    <div class="modal-body">

                        <p>
                            <?php echo $row->soal_atasan;?>
                        </p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" onclick="hapusSoal('<?php echo $row->id_atasan;?>')" class="btn btn-primary">Hapus</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <?php
            }
        ?>

            <div class="modal modal-success fade" id="modal-success">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p>HAPUS SUKSES</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <div class="modal modal-success fade" id="modal-insert-success">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p>UPDATE DATA SUKSES</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->




            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                </div>
                <strong>Copyright &copy; 2014-2016
                    <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li>
                        <a href="#control-sidebar-home-tab" data-toggle="tab">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#control-sidebar-settings-tab" data-toggle="tab">
                            <i class="fa fa-gears"></i>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Other sets of options are available
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right">
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript:void(0)" class="text-red pull-right">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
            </div>
            <!-- ./wrapper -->

            <!-- jQuery 3 -->
            <script src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- DataTables -->
            <script src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
            <script src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/datatables.net/js/dataTables.responsive.min.js"></script>
            <!-- SlimScroll -->
            <script src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <!-- FastClick -->
            <script src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/fastclick/lib/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/dist/js/demo.js"></script>
            <!-- page script -->

            <!-- datatables Editor -->
            <script src="<?php echo BASE_URL() ?>templates/AdminLTE-2.4.3/bower_components/datatables.net/js/dataTables.cellEdit.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    var dataTable = $('#detail_soal').DataTable({
                        "paging": false,
                        "info": false,
                        "searching": false,
                        "columnDefs": [{
                            "targets": [0, 1, 2, 3, 4, 5, 6, 7, 8],
                            "orderable": false,
                            "className": "text-left",
                        }, ],
                        "columns": [{
                                "width": "4%"
                            },
                            {
                                "width": "2%"
                            },
                            {
                                "width": "4%"
                            },
                            {
                                "width": "39%"
                            },
                            {
                                "width": "3%"
                            },
                            {
                                "width": "2%"
                            },
                            {
                                "width": "4%"
                            },
                            {
                                "width": "39%"
                            },
                            {
                                "width": "3%"
                            }
                        ]
                    });

                    dataTable.MakeCellsEditable({
                        "onUpdate": myCallbackFunction,
                        "inputCss": 'my-input-class',
                        "columns": [2, 3, 6, 7],
                        "allowNulls": {
                            //"columns": [3],
                            //"errorClass": 'error'
                        },
                        "confirmationButton": { // could also be true
                            "confirmCss": 'my-confirm-class',
                            "cancelCss": 'my-cancel-class'
                        },
                        "inputTypes": [{
                                "column": 2,
                                "type": "text",
                                "options": null
                            },
                            {
                                "column": 3,
                                "type": "textarea",
                                "options": null
                            },
                            {
                                "column": 6,
                                "type": "text",
                                "options": null
                            },
                            {
                                "column": 7,
                                "type": "textarea",
                                "options": null
                            },
                            // Nothing specified for column 3 so it will default to text

                        ]
                    });
                });

                $('#modal-success').on('hidden.bs.modal', function (e) {
                    // do something...
                    location.reload();
                })

                function hapusSoal(idSoal) {

                    //alert(idSoal);
                    $.ajax({
                        url: "<?php echo BASE_URL;?>/soal/hapus",
                        type: "post",
                        data: {
                            id_soal: idSoal
                        },
                        success: function (response) {
                            // you will get response from your php page (what you echo or print)   
                            //alert(response);  

                            if (response == "1") {

                                $('.modal').modal('hide');
                                $('#modal-success').modal('show');
                                //location.reload();

                            } else {
                                alert("Hapus GAGAL");
                            }


                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert(textStatus, errorThrown);
                        }


                    });

                }

                $('#modal-insert-success').on('hidden.bs.modal', function (e) {
                    // do something...
                    location.reload();
                })

                function myCallbackFunction(updatedCell, updatedRow, oldValue) {
                    console.log("The new value for the cell is: " + updatedCell.data());
                    console.log("The old value for that cell was: " + oldValue);
                    console.log("The values for each cell in that row are: " + updatedRow.data());

                    console.log(updatedRow.data()[2]);

                    var newValue = updatedCell.data();
                    var oldValue = oldValue;

                    if (newValue != oldValue) {
                        console.log("Ajax Start...");


                        $.ajax({
                            url: "<?php echo BASE_URL;?>/soal/update",
                            type: "post",
                            data: {
                                judul_pembelajaran: "<?php echo $judul?>",
                                kode_pembelajaran: "<?php echo $kode?>",
                                id_peserta: updatedRow.data()[1],
                                no_indexPeserta: updatedRow.data()[2],
                                soalPeserta: updatedRow.data()[3],
                                id_atasan: updatedRow.data()[5],
                                no_indexAtasan: updatedRow.data()[6],
                                soalAtasan: updatedRow.data()[7]
                            },
                            success: function (response) {
                                // you will get response from your php page (what you echo or print)   
                                //alert(response);  

                                if (response == "trueTRUE") {
                                    //alert("Update SUKSES");
                                    $('#modal-insert-success').modal('show');

                                } else {
                                    alert("Update GAGAL");
                                }



                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                alert(textStatus, errorThrown);
                            }


                        });


                    }


                }

                function destroyTable() {
                    if ($.fn.DataTable.isDataTable('#myAdvancedTable')) {
                        table.destroy();
                        table.MakeCellsEditable("destroy");
                    }
                }
            </script>
</body>

</html>