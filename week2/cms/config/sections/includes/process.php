<?php 


if(isset($_POST['register']))
{
    $first_name = trim($_POST['input_first']);
    $last_name = trim($_POST['input_last']);
    $email = trim($_POST['input_email']);
    $password = md5($_POST['input_password']);
    
    if($first_name !== '' && $last_name !== '' && $email !== '' && $password !== ''){
        $check = mysqli_query($con,"SELECT * FROM users WHERE email='$email' ");
        if(!$conn ||mysqli_num_rows($check)==1){
            $message = "<p style='color: #D8000C;font-weight: bold;'>Email is already taken. Try Different One.</p>";
        }else{
            $signup = "INSERT INTO `users`(`ID`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL,'$first_name','$last_name','$email','$password')";
            mysqli_query($conn,$signup);
            if(mysqli_error($conn)==""){
                $message = "<p style='color: #4F8A10;font-weight:bold;'>Registeration Successful!</p>";
                sleep(5);
                echo '<p style="color: #4F8A10;font-weight:bold;">Redirecting! Please wait. </p>';
                header("location: dashboard/dash-index.php");
            }
            else{
                $message = '<p style="color: #D8000C;font-weight: bold;">Something Went Wrong, Try Again.</p>';
            }
        }
    }
    else{
        $message = "<p style='color: #D8000C; font-weight: bold;'> OOPS! Something Went Wrong! Please Try again Later. </p>";
    }
  
}
?>