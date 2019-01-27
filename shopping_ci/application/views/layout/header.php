<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
	<meta name="author" content="">
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title><?php if ($title)
        { 
            echo $title; 
        }
    else
        { 
            echo 'Default Title'; 
        } ?>   </title>
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

    <!-- All Plugins -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/all.plugins.css" />
    <!-- style -->
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/style.css" />
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/custom.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/flaticon.css">
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


   
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">

    <!-- Loader -->
    <!-- <div id="loader">
        <div id='bars'>
            <div class='bar'></div>
            <div class='bar'></div>
            <div class='bar'></div>
            <div class='bar'></div>
            <div class='bar'></div>
            <div class='bar'></div>
            <div class='bar'></div>
            <div class='bar'></div>
            <div class='bar'></div>
            <div class='bar'></div>
        </div>
    </div> -->

     <div class="wrapper">
        <?php @include('navbar.php'); ?>