<?php
	include('../../../include/db.php');
	$email = $_POST['email'];
	$res = mysqli_query($con,"SELECT * FROM persons WHERE Email='$email' ");
	$array = mysql_fetch_row($res);
	echo json_encode($array);
?>