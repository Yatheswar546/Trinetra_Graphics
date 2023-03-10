<?php
    $db = mysqli_connect('localhost','root','','graphic');

    if(!$db){
        die("Connection Failed!!!".mysqli_connect_error());
    }
    else{
        // echo "Hurray Connection Successful";
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];   
    

    $sql = mysqli_query($db,"INSERT INTO `feedbacks`(`name`, `email`, `message`) VALUES ('$name','$email','$message ')");

    if(!$sql){
        $errormsg = "Invalid Query".mysqli_connect_error();
    }
    else{
        header("Location: ../../index.php");
        exit;
    }
?>