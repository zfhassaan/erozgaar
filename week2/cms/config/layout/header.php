<?php 
	require ('config/functions.php');
	require ('config/db.php');
	require('config/sections/includes/process.php');

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
		<link type="text/css" rel="stylesheet" href="../cms/public/css/reset.css">
		<link rel="stylesheet" type="text/css" href="../cms/public/css/plugins.css">
		<link rel="stylesheet" type="text/css" href="../cms/public/css/style.css">
		<link rel="stylesheet" type="text/css" href="../cms/public/css/color.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- ========== favicon icon ========== -->
		<link rel="shortcut icon" href="../cms/public/images/favicon.ico">


	</head>
	<body>
		<div class="loader-wrap">
			<div class="pin"></div>
			<div class="pulse"></div>
		</div>

		<header class="main-header dark-header fs-header sticky">
			<div class="header-inner">
				<div class="logo-holder">
                        <a href="<?php echo BASE_URL; ?>">
                         	<img src="<?php echo BASE_URL;?>public/images/logo.png" alt="">
<!--                         	<img src="../cms/public/images/logo.png" alt=""> -->
                        </a>
                    </div>
                    <div class="header-search vis-header-search">
                        <div class="header-search-input-item">
                            <input type="text" placeholder="Keywords" value=""/>
                        </div>
                       <div class="header-search-select-item">
                            <select data-placeholder="All Categories" class="chosen-select" style="display: none;">
                                <option>All Categories</option>
                                <option>Shops</option>
                                <option>Hotels</option>
                                <option>Restaurants</option>
                                <option>Fitness</option>
                                <option>Events</option>
                            </select>
                        </div>

                        <button class="header-search-button" onclick="window.location.href='#'">Search</button>
                    </div>
                    <div class="show-search-button"><i class="fa fa-search"></i> <span>Search</span></div>
                    <a href="dashboard-add-listing.html" class="add-list">Add Listing <span><i class="fa fa-plus"></i></span></a>
                    <div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>Sign In</div>
                    <!-- nav-button-wrap-->
                    <div class="nav-button-wrap color-bg">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->
                    <!--  navigation -->
                    <div class="nav-holder main-menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="<?php echo BASE_URL; ?> " class = "<?php $homepage = 'http://'.$_SERVER['PHP_SELF'];
                                    echo strpos($homepage,'index.php') !== false ? 'act-link' : ''; ?>">Home</a>
                                </li>
                                <li>

                                	<a href="<?php echo BASE_URL.'about.php' ?>" class="<?php $homepage = 'http://'.$_SERVER['PHP_SELF'];
                                    echo strpos($homepage,'about.php') !== false ? 'act-link' : ''; ?>">About us</a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL.'news.php';?>" class="<?php $homepage = 'http://'.$_SERVER['PHP_SELF'];
                                    echo strpos($homepage,'news.php') !== false ? 'act-link' : ''; ?>">News</a>
                                </li>
                                <li>
                                    <a href="#">Pages <i class="fa fa-caret-down"></i></a>
                                    
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li><a href="author-single.html">User single</a></li>
                                        <li><a href="how-itworks.html">How it Works</a></li>
                                        <li><a href="pricing-tables.html">Pricing</a></li>
                                        <li><a href="dashboard-myprofile.html">User Dasboard</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="dashboard-add-listing.html">Add Listing</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="header2.html">Header 2</a></li>
                                        <li><a href="footer-fixed.html">Footer Fixed</a></li>
                                    </ul>
                                    
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->
                </div>
        </header>

        <!--  wrapper  -->
            <div id="wrapper">
				<!-- Content-->
                <div class="content">
