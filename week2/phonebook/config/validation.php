<?php


if(isset($_POST['register']) )
{
    $first_name = trim($_POST['input_first']);
    $last_name = trim($_POST['input_last']);
    $email = trim($_POST['input_email']);
    $password = md5($_POST['input_password']);
    
    if($first_name !== '' && $last_name !== '' && $email !== '' && $password !== '' ){
        $check = mysqli_query($con,"SELECT * FROM users WHERE email='$email' ");
        if(!$conn ||mysqli_num_rows($check)==1){
            $_SESSION['message'] = "<p style='color: #D8000C;font-weight: bold;'>Email is already taken. Try Different One.</p>";
        }else{
            $signup = "INSERT INTO `users`(`ID`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL,'$first_name','$last_name','$email','$password')";
            mysqli_query($conn,$signup);
            
            if(mysqli_error($conn)==""){
                /*if the user is connected and there's no error save the id of the user and first name of the user in session. */

                $_SESSION['ID'] = $ID;
                $_SESSION['first_name'] = $first_name;
                
                /*if the user is registered then redirect the user to dashboard */
                header("location: dashboard/dash-index.php");
            }
            else{
                $_SESSION['message'] = '<p style="color: #D8000C;font-weight: bold;">Something Went Wrong, Try Again.</p>';
            }
        }
        $_SESSION['message'] = "<p style='color: #D8000C; font-weight: bold;'> Success </p>";
    }
    else{
        $_SESSION['message'] = "<p style='color: #D8000C; font-weight: bold;'> Please fill all the required fields. </p>";
    }
  
}
?>