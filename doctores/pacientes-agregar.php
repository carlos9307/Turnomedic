<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Agregar Pacinte</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.min.js"></script>
		

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<?php include('personas-funciones.php'); ?>
	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-calendar"></i>
							TurnoMedic
						</small>
					</a>
				</div>
				
				<!--NOMBRE DE USUARIO-->
				<div class="navbar-header pull-right" role="navigation">
					<img class="nav-user-photo" src="../assets/images/avatars/doctor.png"/>
					<span class="white">Bienvenido, </span>
					<span class="white">NOMBRE USUARIO</span>
				</div>

			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<!--ACCESOS DIRECTOS-->
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon glyphicon glyphicon-user"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon glyphicon glyphicon-remove"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon glyphicon glyphicon-ok"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon glyphicon glyphicon-log-out"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				
				<!--MENU PRINCIPAL-->
				<ul class="nav nav-list">

					<!--MENU TURNOS DEL DIA-->
					<li class="">
						<a href="index.html">
							<i class="menu-icon glyphicon glyphicon-time"></i>
							<span class="menu-text"> Turnos del Dia </span>
						</a>

						<b class="arrow"></b>
					</li>

					<!-- MENU TURNOS-->
					<li class="">
						<a href="turnos-disponibles.html">
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text"> Turnos Disponibles </span>

							<b class="arrow"></b>
						</a>
					</li>

					<!--MENU PACIENTES-->

					<li class="active">
						<a href="pacientes.php">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Pacientes </span>
						</a>

						<b class="arrow"></b>
					</li>

					<!--<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Pacientes </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="active">
								<a href="pacientes.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Agregar Paciente
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="pacientes-buscar.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Buscar Paciente
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>-->
					
					<!--MENU REPORTES-->
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon glyphicon glyphicon-print "></i>
							<span class="menu-text"> Reportes </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Reporte 1
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Reporte 2
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>
					
					<!--MENU ADMINISTRACION-->
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa  fa-cogs"></i>
							<span class="menu-text">
								Configuracion
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Parametros
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="#">
											<i class="menu-icon fa fa-caret-right"></i>
											Feriados
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="#">
											<i class="menu-icon fa fa-caret-right"></i>
											Horarios
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="#">
											<i class="menu-icon fa fa-caret-right"></i>
											Turnos Fijos
										</a>

										<b class="arrow"></b>
									</li>

								</ul>
							</li>


							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Seguridad
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="#">
											<i class="menu-icon fa fa-caret-right"></i>
											Usuarios
										</a>

										<b class="arrow"></b>
									</li>

									<!--<li class="">
										<a href="#" class="dropdown-toggle">
											Backups
											<b class="arrow fa fa-angle-down"></b>
										</a>

										<b class="arrow"></b>

										<ul class="submenu">
											<li class="">
												<a href="#">
													<i class="menu-icon fa fa-caret-right"></i>
													Realizar Backup
												</a>

												<b class="arrow"></b>
											</li>

											<li class="">
												<a href="#">
													<i class="menu-icon fa fa-caret-right"></i>
													Restaurar BD
												</a>

												<b class="arrow"></b>
											</li>
										</ul>
									</li>-->

								</ul>
							</li>
						</ul>
					</li>
					
					<!--MENU AYUDA-->
					<li class="">
						<a href="#">
							<i class="menu-icon fa fa-info-circle"></i>
							<span class="menu-text"> Ayuda </span>
						</a>

						<b class="arrow"></b>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.html">Inicio</a>

							</li>

							<li>
								<a href="pacientes.php">Pacientes</a>
							</li>

							<li class="active">Agregar Paciente</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Elegir Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Compactar Vista
										</label>
									</div>
								</div><!-- /.pull-left -->
						
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->
					
						<div class="page-header">
							<h1>
								Agregar Paciente
							</h1>
						</div><!-- /.page-header -->


						<div class="row">
							<div class="col-xs-12">

									<!-- PAGE CONTENT BEGINS -->
									<div class="widget-box">
											<div class="widget-header">
												<h4 class="widget-title">Datos del Paciente</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">


													<form class="form-horizontal" id="validation-form" method="get" role="form" >
														<!-- <legend>Form</legend> -->
														
														<fieldset>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="apellido">Apellido:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" id="apellido" name="apellido" class="col-xs-12 col-sm-6" />
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nombre">Nombre:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" id="nombre" name="nombre" class="col-xs-12 col-sm-6" />
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="fecha_nac">Fecha Nac.:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="input-group">																		
																		<input type="date" id="fecha_nac" name="fecha_nac" />
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="dni">DNI:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" id="dni" name="dni" />
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="direccion">Direccion:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" id="direccion" name="direccion" class="col-xs-12 col-sm-6" />
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="localidad">Localidad:</label>

																<div class="col-xs-12 col-sm-9">	
																	<div class="input-group">																			
																		<select class="form-control" id="localidad" name="localidad" >
																			<option value="">Seleccionar Localidad</option>
																			<option value="1">Localidad 1</option>
																			<option value="2">Localidad 2</option>
																			<option value="3">Localidad 3</option>
																			<option value="4">Localidad 4</option>
																		</select>	
																	</div>															
																</div>
															</div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-phone">Telefono:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="input-group">																		
																		<input class="input-medium input-mask-phone" type="text" id="form-field-phone" />
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="email" name="email" id="email" class="col-xs-12 col-sm-6" />
																	</div>
																</div>
															</div>


															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="obra_social">Obra Social:</label>

																<div class="col-xs-12 col-sm-9">	
																	<div class="input-group">																			
																		<select class="form-control" id="obra_social" name="obra_social" >
																			<option value="">Seleccionar Obra Social</option>
																			<option value="1">Obra Social 1</option>
																			<option value="2">Obra Social 2</option>
																			<option value="3">Obra Social 3</option>
																			<option value="4">Obra Social 4</option>
																		</select>	
																	</div>															
																</div>
															</div>

															
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nro_afiliado">Nro Afiliado:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" id="nro_afiliado" name="nro_afiliado" />
																	</div>
																</div>
															</div>



														</fieldset>

	

														<div class="form-actions center">

															<a href="#" class="btn btn-sm btn-success"> <i class="ace-icon glyphicon glyphicon-ok "></i>Agregar</a>

															<a href="pacientes.php" class="btn btn-sm btn-danger"> <i class="ace-icon glyphicon glyphicon-remove "></i>Cancelar</a>	

														</div>
													</form>

												</div>
											</div>
										</div>




									


								
									<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->

							
						</div><!-- /.row -->

					</div><!-- /.page-content -->


			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Nombre Aplicacion</span>
							V.1.0 &copy; 2018 
						</span>

						
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="../assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>		
		<script src="../assets/js/jquery.maskedinput.min.js"></script>
		
		<!-- inline scripts related to this page -->
		<script type="text/javascript">

			$('.input-mask-phone').mask('(999) 999-9999');

		</script>

	</body>

</html>
