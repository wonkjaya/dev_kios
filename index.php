
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
		<link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet">
		<link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/tambahan.css" rel="stylesheet">
		<link href="<?= bloginfo('stylesheet_url')?>" rel="stylesheet">
	</head>
<body>
<div class="container-fluid">

	<?php get_header(); ?>
	
	<?php get_template_part( 'menu' ); ?>
	
	<?php get_template_part( 'container_artikel' ); ?>
</div>
<script>
//$(".hide").hide();
</script>	