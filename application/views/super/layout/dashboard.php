<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href=" <?php echo base_url('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" <?php echo base_url('assets/admin/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- NProgress -->
    <link href=" <?php echo base_url('assets/admin/vendors/nprogress/nprogress.css');?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href=" <?php echo base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css');?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=" <?php echo base_url('assets/admin/build/css/custom.min.css');?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src=" <?php echo base_url('assets/admin/production/images/img.jpg');?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>ito</h2>
        
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home </span></a>
                    
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= site_url('Data_super');?>">Data Cafe</a></li>
                    </ul>
                  </li>
                
                 
                  </li>
                  
                  
                </ul>
              </div>
              <div class="menu_section">
                
               
                 
                 
                  
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="<?php echo base_url('assets/admin/production/images/img.jpg');?>" alt="">ito
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="Logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                 
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row" style="display: inline-block;">
            <div class="top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                  
                  
                  <h3>Kopi Kane</h3>
                  
                </div>
             
            </div>
          </div>

           



            



            <div class="row">
              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                   
                  </div>
                  <div class="x_content">
                   
                    
                   
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                   
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <article class="media event">
                     
                     
                    </article>
                    
                 
                  
                   
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                   
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src=" <?php echo base_url('assets/admin/vendors/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap -->
   <script src=" <?php echo base_url('assets/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js');?>"></script>
    <!-- FastClick -->
    <script src=" <?php echo base_url('assets/admin/vendors/fastclick/lib/fastclick.js');?>"></script>
    <!-- NProgress -->
    <script src=" <?php echo base_url('assets/admin/vendors/nprogress/nprogress.js');?>"></script>
    <!-- Chart.js -->
    <script src=" <?php echo base_url('assets/admin/vendors/Chart.js/dist/Chart.min.js');?>"></script>
    <!-- jQuery Sparklines -->
    <script src=" <?php echo base_url('assets/admin/vendors/jquery-sparkline/dist/jquery.sparkline.min.js');?>"></script>
    <!-- Flot -->
    <script src=" <?php echo base_url('assets/admin/vendors/Flot/jquery.flot.js');?>"></script>
    <script src=" <?php echo base_url('assets/admin/vendors/Flot/jquery.flot.pie.js');?>"></script>
    <script src=" <?php echo base_url('assets/admin/vendors/Flot/jquery.flot.time.js');?>"></script>
    <script src=" <?php echo base_url('assets/admin/vendors/Flot/jquery.flot.stack.js');?>"></script>
    <script src=" <?php echo base_url('assets/admin/vendors/Flot/jquery.flot.resize.js');?>"></script>
    <!-- Flot plugins -->
    <script src=" <?php echo base_url('assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js');?>"></script>
    <script src=" <?php echo base_url('assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js');?>"></script>
    <script src=" <?php echo base_url('assets/admin/vendors/flot.curvedlines/curvedLines.js');?>"></script>
    <!-- DateJS -->
    <script src=" <?php echo base_url('assets/admin/vendors/DateJS/build/date.js');?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=" <?php echo base_url('assets/admin/vendors/moment/min/moment.min.js');?>"></script>
    <script src=" <?php echo base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
    
    <!-- Custom Theme Scripts -->
    <script src=" <?php echo base_url('assets/admin/build/js/custom.min.js');?>"></script>
  </body>
</html>