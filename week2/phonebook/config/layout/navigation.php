		<header class="main-header dark-header fs-header sticky">
			<div class="header-inner">
				<div class="logo-holder">
                        <a href="<?php echo BASE_URL; ?>">
                         	<img src="<?php echo BASE_URL;?>public/images/logo.png" alt="">
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
                    <a href="<?php echo !empty($_SESSION['first_name']) ? BASE_URL.'dashboard/dash-index.php' :  BASE_URL;
                    ?>" class="add-list <?php !empty($_SESSION['first_name']) ? '' : 'modal-open' ?>">Add Listing <span><i class="fa fa-plus"></i></span></a>


                        <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                        if (!empty($_SESSION['first_name']) ) {
                                
                                $html = strpos($url,'dash-index') !== false ? '
                                <div class="header-user-menu">
                                    <div class="header-user-name">
                                        <span> <img src="../images/avatar/4.jpg" alt=""/> </span>
                                        Hello, '.$_SESSION['first_name']."                                    </div>
                                    <ul>
                                        <li>
                                            <a href='". BASE_URL.'dashboard/dash-index.php' ."'> Edit profile</a>
                                        </li>
                                        <li>
                                            <a href=''> Add Listing</a>
                                        </li> 
                                        <li>
                                            <a href='dashboard-bookings.html'>  Bookings  </a>
                                        </li>
                                        <li>
                                            <a href='dashboard-review.html'> Reviews </a>
                                        </li>
                                        <li>
                                            <a href='".BASE_URL.'logout.php'."'>Log Out</a>
                                        </li>
                                    </ul>
                                </div>" 

                                : 
                                '<div class="header-user-menu">
                                        <div class="header-user-name">
                                            <span> <img src="images/avatar/4.jpg" alt=""/></span>
                                            Hello, '.$_SESSION['first_name']." 
                                        </div>
                                         <ul>
                                        <li>
                                            <a href='". BASE_URL.'dashboard/dash-index.php' ."'> Edit profile</a>
                                        </li>
                                        <li>
                                            <a href=''> Add Listing</a>
                                        </li> 
                                        <li>
                                            <a href='dashboard-bookings.html'>  Bookings  </a>
                                        </li>
                                        <li>
                                            <a href='dashboard-review.html'> Reviews </a>
                                        </li>
                                        <li>
                                            <a href='".BASE_URL.'logout.php'."'>Log Out</a>
                                        </li>
                                    </ul>       
                                </div>";
                                echo $html;
                        }
                         else {
                            echo '<div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>Sign In</div>';
                            if(!empty($_SESSION['message'])){
                            echo $_SESSION['message'];
                            }
                            
                        } ?>

                    
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
                                    <a href="<?php echo BASE_URL.'listing.php' ?>" class="<?php $homepage = 'http://'.$_SERVER['PHP_SELF'];
                                    echo strpos($homepage,'listing.php') !== false ? 'act-link' : ''; ?>">Listings</a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL.'news.php';?>" class="<?php $homepage = 'http://'.$_SERVER['PHP_SELF'];
                                    echo strpos($homepage,'news.php') !== false ? 'act-link' : ''; ?>">News</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->
                </div>
        </header>