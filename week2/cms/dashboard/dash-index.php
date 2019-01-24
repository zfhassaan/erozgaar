<?php
$url = htmlspecialchars('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);

if(isset($_SESSION['first_name']) && strpos($url,'dashboard') && strpos($url,'dash-index')){
/*Title and Header*/
$title = "LahoreBook | Home";
require("../config/layout/header.php");

include ('../config/sections/dashboard/sec1.php');

require ("../config/layout/footer.php");
}

else{
	header("location: ../index.php");
}