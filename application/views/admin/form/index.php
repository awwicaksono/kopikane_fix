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
	<link href="<?php echo base_url('assets/admin/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?php echo base_url('assets/admin/vendors/nprogress/nprogress.css');?>" rel="stylesheet">
	<!-- iCheck -->
	<link href="<?php echo base_url('assets/admin/vendors/iCheck/skins/flat/green.css');?>" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="<?php echo base_url('assets/admin/vendors/google-code-prettify/bin/prettify.min.css');?>" rel="stylesheet">
	<!-- Select2 -->
	<link href="<?php echo base_url('assets/admin/vendors/select2/dist/css/select2.min.css');?>" rel="stylesheet">
	<!-- Switchery -->
	<link href="<?php echo base_url('assets/admin/vendors/switchery/dist/switchery.min.css');?>" rel="stylesheet">
	<!-- starrr -->
	<link href="<?php echo base_url('assets/admin/vendors/starrr/dist/starrr.css');?>" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="<?php echo base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css');?>" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?php echo base_url('assets/admin/build/css/custom.min.css');?>" rel="stylesheet">
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
							<img src="images/img.jpg" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>John Doe</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home</a>
								
								</li>
								<li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="form.html">Data Cafe</a></li>
									
									</ul>
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
									<img src="images/img.jpg" alt="">John Doe
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="javascript:;"> Profile</a>
									<a class="dropdown-item" href="javascript:;">
										<span class="badge bg-red pull-right">50%</span>
										<span>Settings</span>
									</a>
									<a class="dropdown-item" href="javascript:;">Help</a>
									<a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</div>
							</li>

							<li role="presentation" class="nav-item dropdown open">
								<a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
									<span class="badge bg-green">6</span>
								</a>
								<ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<div class="text-center">
											<a class="dropdown-item">
												<strong>See All Alerts</strong>
												<i class="fa fa-angle-right"></i>
											</a>
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
					<div class="page-title">
						<div class="title_left">
							<h3>Form Elements</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Design <small>different form elements</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />


									<form action="TambahData" method="post" enctype="multipart/form-data">
										<?php echo $this->session->userdata('username_admin');?>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_cafe">Nama Cafe <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="nama_cafe" id="nama_cafe" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="alamat_cafe">Alamat Cafe <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="alamat_cafe" name="alamat_cafe" required="required" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label for="telp_cafe" class="col-form-label col-md-3 col-sm-3 label-align">No Telp Cafe</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="telp_cafe" class="form-control" type="text" name="telp_cafe">
											</div>
										</div>
										<div class="item form-group">
											<label for="deskripsi_cafe" class="col-form-label col-md-3 col-sm-3 label-align">Deskripsi Cafe</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea name="deskripsi_cafe" id="deskripsi_cafe" cols="30" rows="10"></textarea>
											</div>
										</div>
										<div class="item form-group">
											<label for="gambar_cafe" class="col-form-label col-md-3 col-sm-3 label-align">Gambar Cafe</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="gambar_cafe" id="gambar_cafe">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>

								<div class="x_content">
									<br />

									<table class="table table-bordered">
                <thead>
                    <tr>
                       
                        <th>Nama Cafe</th>
                        <th>Alamat Cafe</th>
                        <th>No Telp Cafe</th>
                        <th>Deskripsi Cafe</th>
                        <th>Gambar Cafe</th>
                      
                        <th>Action</th>
                    </tr>
                </thead>
				<tbody>

				
         <tr>
            <td><?php echo $show['nama_cafe']; ?></td>
            <td><?php echo $show['alamat_cafe']; ?></td>
            <td><?php echo $show['telp_cafe']; ?></td>
            <td><?php echo $show['deskripsi_cafe']; ?></td>
            <td><img src="<?php echo base_url() . '/uploads/cafe/' . $show['nama_cafe'] . '/' . $show['gambar_cafe']?>" alt="fotoCafe" width="100"></td>
            <td>
               <a href="Data?edit=<?php echo $show['id_cafe']; ?>"><i class="fa fa-edit"></i></a>
               <a href="#"><i class="fa fa-trash"></i></a>
            </td>
         </tr> 
		
</tbody>

            </table>
									
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
	<script src="<?php echo base_url('assets/admin/vendors/jquery/dist/jquery.min.js');?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js');?>"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url('assets/admin/vendors/fastclick/lib/fastclick.js');?>"></script>
	<!-- NProgress -->
	<script src="<?php echo base_url('assets/admin/vendors/nprogress/nprogress.js');?>"></script>
	<!-- bootstrap-progressbar -->
	<script src="<?php echo base_url('assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js');?>"></script>
	<!-- iCheck -->
	<script src="<?php echo base_url('assets/admin/vendors/iCheck/icheck.min.js');?>"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="<?php echo base_url('assets/admin/vendors/moment/min/moment.min.js');?>"></script>
	<script src="<?php echo base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="<?php echo base_url('assets/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js');?>"></script>
	<script src="<?php echo base_url('assets/admin/vendors/jquery.hotkeys/jquery.hotkeys.js');?>"></script>
	<script src="<?php echo base_url('assets/admin/vendors/google-code-prettify/src/prettify.js');?>"></script>
	<!-- jQuery Tags Input -->
	<script src="<?php echo base_url('assets/admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js');?>"></script>
	<!-- Switchery -->
	<script src="<?php echo base_url('assets/admin/vendors/switchery/dist/switchery.min.js');?>"></script>
	<!-- Select2 -->
	<script src="<?php echo base_url('assets/admin/vendors/select2/dist/js/select2.full.min.js');?>"></script>
	<!-- Parsley -->
	<script src="<?php echo base_url('assets/admin/vendors/parsleyjs/dist/parsley.min.js');?>"></script>
	<!-- Autosize -->
	<script src="<?php echo base_url('assets/admin/vendors/autosize/dist/autosize.min.js');?>"></script>
	<!-- jQuery autocomplete -->
	<script src="<?php echo base_url('assets/admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js');?>"></script>
	<!-- starrr -->
	<script src="<?php echo base_url('assets/admin/vendors/starrr/dist/starrr.js');?>"></script>
	<!-- Custom Theme Scripts -->
	<script src="<?php echo base_url('assets/admin/build/js/custom.min.js');?>"></script>

</body></html>
