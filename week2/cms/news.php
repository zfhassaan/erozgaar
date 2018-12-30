<?php 
/*Title and Header*/
$title = "LahoreBook | Latest News";
require("config/layout/header.php");
require ('config/db.php');
require ('config/sections/includes/process.php');

include ('config/sections/news/our-news-parallax.php');
include ('config/sections/news/news-section.php'); 
include ('config/sections/questions_ask.php');


require ('config/layout/footer.php'); ?>