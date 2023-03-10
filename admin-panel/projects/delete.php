<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $db = mysqli_connect('localhost','root','','graphic');
        $sql = mysqli_query($db,"DELETE FROM `projects` WHERE id=$id");
    }
    header("location: index.php");
    exit; 
?>