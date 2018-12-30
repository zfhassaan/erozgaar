<?php 

/*
	Defines the BASE URL for the website. $_SERVER['SERVER_NAME'] is the localhost and .'/erozgaar/week2/cms/' is the directory
	for the project which holds all the files of the project.
*/
define('BASE_URL', 'http://'.$_SERVER['SERVER_NAME'].'/erozgaar/week2/cms/' );


/*
	config/db.php #connection to the database.
	config/sections/includes/process.php #processes the signup process.

	if the url includes dash-index.php then it'll jump one directory and require the files specified.
*/


    if (strpos($url,'dash-index') !== false) {
        require ('../config/db.php');
        require ('../config/sections/includes/process.php');
    } else {
    	require ('config/db.php');
    	require ('config/sections/includes/process.php');
    }

