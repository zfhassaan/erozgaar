<?php 

$url = $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


/*Title and Header*/
$title = "LahoreBook | Home";
require("config/layout/header.php");
/*require ('config/db.php');
require ('config/sections/includes/process.php');*/

include ('config/sections/section_one.php');
include ('config/sections/sec2.php');
include('config/sections/popular_listing.php');
include ('config/sections/parallax.php');
include ('config/sections/how_it_works.php');
include ('config/sections/parallax_second.php');
include ('config/sections/blog.php');
include ('config/sections/facts.php');

include ('config/sections/testimonials.php');
include ('config/sections/questions_ask.php');

require ('config/layout/footer.php');

/*if(strpos($url,'dashboard')){

	header("location: index.php");
}*/


 ?>
