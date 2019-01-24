<?php 
	session_start();
    require ('config/functions.php');
 ?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="robots" content="index, follow">
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<!-- ========== css ========== -->
		<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/reset.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/css/plugins.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/css/color.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- ========== favicon icon ========== -->
		<link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/images/favicon.ico">
	</head>
	<body>
		<div class="loader-wrap">
			<div class="pin"></div>
			<div class="pulse"></div>
		</div>
        <!-- Navigation here -->
        <?php include ('navigation.php'); ?>
        <!--  wrapper  -->
            <div id="wrapper">
				<!-- Content-->
                <div class="content">
