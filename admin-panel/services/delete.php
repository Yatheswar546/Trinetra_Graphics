<?php
    session_start();
    
    if($_SESSION['id'] == true){
        if(isset($_GET["id"])){
            $id = $_GET["id"];

            // Database Connection
            require_once('../config.php');
            $sql = mysqli_query($db,"DELETE FROM `service` WHERE id=$id");
        }
        header("location: index.php");
        exit;
    }
    else{
        header('Location: ../../index.php');
    }
?>