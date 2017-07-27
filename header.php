<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,600,400italic,700" rel="stylesheet" type="text/css">

		<?php wp_head(); ?>
		<?php if( is_page('tijuana')){
			?>
				<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/vendors/magnific-popup.css">
			<?php
		}?>
	</head>
	<body <?php body_class(); ?>>

		<!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- Loader -->
		<div class="fh5co-loader"></div>
		<div id="fh5co-page">
			<section id="fh5co-header">
				<div class="container">
					<nav role="navigation">
						<ul class="pull-left left-menu">
							<li>
								<a href="#acerca">Acerca de</a>
							</li>
							<?php if( is_front_page() ){ ?>
							<li>
								<a href="#sedes">Sedes</a>
							</li>
							<?php } else {
								?>
								<li>
									<a href="#sedes">Edificios</a>
								</li>
								<?php
							} ?>
							<li>
								<a href="#suscribete">Forma Parte</a>
							</li>
						</ul>
						<h1 id="fh5co-logo">
							<a href="<?php echo site_url()?>">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/logo_s.png" alt="logo">
							</a>
						</h1>
						<!-- <ul class="pull-right right-menu">
						<li class="fh5co-cta-btn"><a target="_blank" href="#">Cuenta tu historia <small>(Proximamente)</small></a></li>
					</ul> -->
				</nav>
			</div>
		</section>
		<!-- #fh5co-header -->
