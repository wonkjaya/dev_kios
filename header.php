
<!DOCTYPE html>
<!-- saved from url=(0036) -->
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title><?= bloginfo('name').wp_title(); ?></title>
		<link href="<?php echo bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet">
		<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
		<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
	</head>
<div class="row" style="background:#4A3C7C">
		<!-- Logo -->
		<div class="col-md-3">
			<a href="">
				<h1 class="head-title">
				 <img src="<?=bloginfo('stylesheet_directory'); ?>/css/logo.png"/>KIOS<span class="title-pref">27</span>
				</h1>
			</a>
			<p style="color:#67ABA6">Kiosnya orang Indonesia</p>
		</div>
		<!--end logo-->
		<!--form search-->
		<div class="col-md-5" style="">
			  <div class="input-group" style='margin-top:25px;margin-right: 10px;'>
				<span class="input-group-addon">Cari Produk</span>
				<input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
			  </div>
		</div>
		<!--end of form-->
		<!--top menu-->
		<div class="col-md-4" style="padding-top: 10px;">
			<div class="row">
				<div class="col-md-4" id="menu-top"><a href="#"><i class="glyphicon glyphicon-th-large"></i> Daftar Toko</a></div>
				<div class="col-md-4" id="menu-top" style="text-indent:10px;background:url(<?=bloginfo('stylesheet_directory')?>/css/bg-free.png) no-repeat;">
					<a href="#"><i class="glyphicon glyphicon-new-window"></i> Register</a>
				</div>
				<div class="col-md-4" id="menu-top"><a href="#"><i class="glyphicon glyphicon-log-in"></i> Login</a></div>
			</div>
		</div>
		<!-- End topmenu -->
</div>

