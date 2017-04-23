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
  <style>
  a.logo-item {
    margin: 0 15px;
    max-width: 250px;
    display: inline-block;
    vertical-align: top;
  }
  </style>

</head>
<body <?php body_class(); ?>>
