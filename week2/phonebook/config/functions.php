<?php 

/*
	Defines the BASE URL for the website. $_SERVER['SERVER_NAME'] is the localhost and .'/erozgaar/week2/cms/' is the directory
	for the project which holds all the files of the project.
*/
define('BASE_URL', 'http://'.$_SERVER['SERVER_NAME'].'/erozgaar/week2/phonebook/' );
/*definiing the layout links*/

define('error_not_found','config/Error/error_404_not_found.php');
define('index_section','config/sections/index');
define('about_section','config/sections/about');
define('listing_section','config/sections/listing');

define('current_page', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

/*
    required files for the website. This will include these files in all the pages of the website.
*/
require('config/db.php');
require ('config/validation.php');
require ('config/verification.php');


