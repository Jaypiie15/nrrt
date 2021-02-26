<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="build/images/company_logo.png" type="image/ico" />

    <title>NMIS | RRT </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
        .fc-event {
            background-color : #99dacb;
        }

        .fc-unthemed td.fc-today {
          background: #e4d376;
      }

        .wrapper {
            margin: 30px;
            padding: 30px;
            background: #fff;
            width: 360px;
            height: 640px;
            display: flex;
            flex-direction: column;
          }

          .wrapper-cell {
            display: flex;
            margin-bottom: 30px;
          }

          @-webkit-keyframes placeHolderShimmer {
            0% {
              background-position: -468px 0;
            }
            100% {
              background-position: 468px 0;
            }
          }

          @keyframes placeHolderShimmer {
            0% {
              background-position: -468px 0;
            }
            100% {
              background-position: 468px 0;
            }
          }
          .animated-background, .text-line {
            -webkit-animation-duration: 1.25s;
                    animation-duration: 1.25s;
            -webkit-animation-fill-mode: forwards;
                    animation-fill-mode: forwards;
            -webkit-animation-iteration-count: infinite;
                    animation-iteration-count: infinite;
            -webkit-animation-name: placeHolderShimmer;
                    animation-name: placeHolderShimmer;
            -webkit-animation-timing-function: linear;
                    animation-timing-function: linear;
            background: #f6f6f6;
            background: linear-gradient(to right, #f6f6f6 8%, #f0f0f0 18%, #f6f6f6 33%);
            background-size: 800px 104px;
            height: 96px;
            position: relative;
          }

          .text {
            margin-left: 20px;
          }

          .text-line {
            height: 25px;
            width: 556px;
            margin: 10px 0;
        }
    </style>
  </head>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index" class="site_title"><i class="fa fa-users"></i> <span>NRRT</span></a>
            </div>

            <div class="clearfix"></div>



            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="index"><i class="fa fa-calendar"></i> Meeting Reservation </span></a></li>
                  <li><a href="tracking"><i class="fa fa-search"></i> Track my Reservation </span></a></li>
  
                </ul>
              </div>
          

            </div>
            <!-- /sidebar menu -->


          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
            
            </nav>
          </div>
        </div>
        <!-- /top navigation -->