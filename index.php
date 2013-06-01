<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta charset="utf-8">
	<title>Dashboard - Ace Admin</title>
	<meta name="description" content="overview &amp; stats">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- basic styles -->
	
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />

	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	
	<!--[if IE 7]>
	  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
	<![endif]-->


	<!-- page specific plugin styles -->
	

	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" />
	<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
	
	<!--[if lt IE 9]>
	  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
	<![endif]-->

	
	<link rel="stylesheet" type="text/css" href="assets/css/index.css" media="all">
	<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
</head>
<body>
	<?php include("barraUsurio.php") ?>

	<div class="container-fluid" id="main-container">
		<a href="#" id="menu-toggler"><span></span></a><!-- menu toggler -->
		
		<?php include("barraSecciones.php") ?>			

		<?php include("home.php") ?>

	</div><!--/.fluid-container#main-container-->

	<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
		<i class="icon-double-angle-up icon-only"></i>
	</a>


	<!-- basic scripts -->
	<script src="js/jquery/jquery.min.js"></script>
	<script type="text/javascript">
	window.jQuery || document.write("<script src='assets/js/jquery/jquery-1.9.1.min.js'>\x3C/script>");
	</script>
	
	<script src="js/bootstrap.min.js"></script>

	<!-- page specific plugin scripts -->
	
	<!--[if lt IE 9]>
	<script type="text/javascript" src="assets/js/excanvas.min.js"></script>
	<![endif]-->

	<script type="text/javascript" src="js/jquery/jquery-ui-1.10.2.custom.min.js"></script>

	<script type="text/javascript" src="js/jquery/jquery.ui.touch-punch.min.js"></script>

	<script type="text/javascript" src="js/jquery/jquery.slimscroll.min.js"></script>

	<script type="text/javascript" src="js/jquery/jquery.easy-pie-chart.min.js"></script>

	<script type="text/javascript" src="js/jquery/jquery.sparkline.min.js"></script>

	<script type="text/javascript" src="js/jquery/jquery.flot.min.js"></script>

	<script type="text/javascript" src="js/jquery/jquery.flot.pie.min.js"></script>

	<script type="text/javascript" src="js/jquery/jquery.flot.resize.min.js"></script>


	<!-- ace scripts -->
	<script src="js/ace-elements.min.js"></script>
	<script src="js/ace.min.js"></script>


	<!-- inline scripts related to this page -->
	<script src="js/home.js"></script>

	<div class="tooltip top in" style="display: none;">
		<div class="tooltip-inner"></div>
	</div>

</body>

</html>
