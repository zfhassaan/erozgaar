<?php 
if(isset($_POST['register']))
{
    $first_name = $_POST['input_first'];
    $last_name = $_POST['input_last'];
    $email = $_POST['input_email'];
    $password = md5($_POST['input_password']);

   $signup = "INSERT INTO `users`(`ID`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL,'$first_name','$last_name','$email','$password')";
    
    if($first_name !== '' && $last_name !== '' && $email !== '' && $password !== ''){
		if ($conn->query($signup) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $signup . "<br>" . $conn->error;
		}
	}

	else{
		echo 'Please fill out all the fields.';
	}

}
?>