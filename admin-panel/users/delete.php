<?php
    session_start();

    if($_SESSION['access'] == 1){
        if(isset($_GET["id"])){
            $id = $_GET["id"];

            // Database Connection
            require_once('../config.php');
            $sql = mysqli_query($db,"DELETE FROM `users` WHERE id=$id");
        }
        header("location: index.php");
        exit;
    } 
    else{
        header('Location: index.php');
    }
?>