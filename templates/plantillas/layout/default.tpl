<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>.:: {$PAGE.nombreAplicacion} ::.</title>
		<link rel="stylesheet" href="{$PAGE.ruta}bootstrap/css/bootstrap.min.css">
		
		{if $PAGE.debug}
		<link rel="stylesheet/less" type="text/css" href="{$PAGE.ruta}build/less/AdminLTE.less" />
		<link rel="stylesheet/less" type="text/css" href="{$PAGE.ruta}build/less/skins/_all-skins.less" />
		{else}
		<link rel="stylesheet" href="{$PAGE.ruta}dist/css/AdminLTE.css">
		<link rel="stylesheet" type="text/css" href="{$PAGE.ruta}dist/css/skins/_all-skins.css" />
		{/if}
		
		<link rel="stylesheet" href="{$PAGE.ruta}dist/css/font-awesome.min.css">
		<link rel="stylesheet" href="{$PAGE.ruta}dist/css/ionicons.min.css">
		<link rel="stylesheet" href="{$PAGE.ruta}plugins/iCheck/flat/blue.css">
		<link rel="stylesheet" href="{$PAGE.ruta}plugins/morris/morris.css">
		<link rel="stylesheet" href="{$PAGE.ruta}plugins/jvectormap/jquery-jvectormap-1.2.2.css">
		<link rel="stylesheet" href="{$PAGE.ruta}plugins/datepicker/datepicker3.css">
		<link rel="stylesheet" href="{$PAGE.ruta}plugins/daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="{$PAGE.ruta}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		<link rel="stylesheet" href="{$PAGE.ruta}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		<link rel="stylesheet" href="{$PAGE.ruta}plugins/upload/css/jquery.fileupload.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
	<body class="hold-transition skin-green-light sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="#" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>SAMAP</b></span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>.:: SAMAP ::.</b></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				{if $PAGE.tipoUsuario neq ''}
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown messages-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-gears"></i> {$PAGE.nombreUsuario}
								</a>
								<ul class="dropdown-menu">
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<li><a href="?mod=usuarioDatosPersonales"><i class="fa fa-edit text-green"></i> <span style="color: black">Cambiar datos personales</span></a></li>
											<li><a href="#" action="changePass"><i class="fa fa-warning text-orange"></i> <span style="color: black">Cambiar contraseña</span></a></li>
											<li><a href="?mod=logout"><i class="fa fa-sign-out text-green"></i> <span style="color: black">Salir del sistema</span></a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				{/if}
			</nav>
		</header>
		
		{if $PAGE.tipoUsuario neq ""}
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
				<!-- Sidebar user panel -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">MENÚ PRINCIPAL</li>
						{if $PAGE.tipoUsuario eq 1}
						<li {if $PAGE.modulo eq 'configuracion'}class="active"{/if}><a href="?mod=configuracion"><i class="fa fa-edit"></i> Configuración</a></li>
						<li {if $PAGE.modulo eq 'admonUsuarios'}class="active"{/if}><a href="?mod=admonUsuarios"><i class="fa fa-user"></i> Usuarios</a></li>
						{/if}
						
						<li {if $PAGE.modulo eq 'ubicacion'}class="active"{/if}><a href="?mod=ubicacion"><i class="fa fa-map"></i> Envio de ubicaciones</a></li>
						<li {if $PAGE.modulo eq 'reporte'}class="active"{/if}><a href="?mod=reporte"><i class="fa fa-paper-plane"></i> Reporte</a></li>
					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>
		{/if}
		
		
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
					{if $PAGE.vista neq ''}
						{include file=$PAGE.vista}
					{/if}
					</div>
				</div>
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Versión</b> {$PAGE.version}
			</div>
			<strong>Copyright &copy; {date("Y")}.</strong> Todos los derechos reservados
		</footer>
	</div>
    
    
    <!-- jQuery 2.1.4 -->
    <script src="{$PAGE.ruta}plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{$PAGE.ruta}plugins/jQueryUI/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="{$PAGE.ruta}plugins/jQueryUI/jquery-ui.css">
    <!-- Bootstrap 3.3.5 -->
    <script src="{$PAGE.ruta}bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{$PAGE.ruta}plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="{$PAGE.ruta}plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="{$PAGE.ruta}plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{$PAGE.ruta}plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{$PAGE.ruta}plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="{$PAGE.ruta}plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="{$PAGE.ruta}plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{$PAGE.ruta}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="{$PAGE.ruta}plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="{$PAGE.ruta}plugins/fastclick/fastclick.min.js"></script>
    <script type="text/javascript" src="{$PAGE.ruta}plugins/validate/validate.js"></script>
    
    <link rel="stylesheet" href="{$PAGE.ruta}plugins/datatables/dataTables.bootstrap.css">
    <script src="{$PAGE.ruta}plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{$PAGE.ruta}plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{$PAGE.ruta}plugins/datatables/lenguaje/ES-mx.js"></script>
    
    <script src="{$PAGE.ruta}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="{$PAGE.ruta}plugins/upload/js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="{$PAGE.ruta}plugins/upload/js/jquery.fileupload.js"></script>
    
    <script type="text/javascript" src="{$PAGE.ruta}plugins/datepicker/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="{$PAGE.ruta}plugins/datepicker/locales/bootstrap-datepicker.es.js"></script>
    <link rel="stylesheet" href="{$PAGE.ruta}plugins/datepicker/datepicker3.css" />
     
    <script src="{$PAGE.ruta}plugins/input-mask/jquery.inputmask.js"></script>
    <script src="{$PAGE.ruta}plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="{$PAGE.ruta}plugins/input-mask/jquery.inputmask.extensions.js"></script>
    
    <script src="{$PAGE.ruta}dist/js/app.js" type="text/javascript"></script>
    
    {foreach from=$PAGE.scriptsJS item=script}
		<script type="text/javascript" src="{$script}?{rand()}"></script>
	{/foreach}
	
	<script src="javascript/usuario.class.js"></script>
	<script src="{$PAGE.ruta}javascript/cambiarPass.js"></script>
	<!-- Maps -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&language=es"></script>

    
    {if $PAGE.debug}
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
    {else}
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    {/if}
  </body>
</html>
