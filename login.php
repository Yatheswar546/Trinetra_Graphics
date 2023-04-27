<?php  
	require 'config.php';

    session_start();

    $errormsg = "";
    $successmsg = ""; 

	if(isset($_POST["submit2"])){ 
		$username_email = $_POST["username_email"];
		$password = $_POST["password"];
		$result  = mysqli_query($db,"SELECT * FROM users WHERE username = '$username_email' OR email = '$username_email'");
		$row = mysqli_fetch_assoc($result);
        // print_r($row);
		if(mysqli_num_rows($result) > 0){
			if($password == $row["password"]){
				// $_SESSION["login"] = true;
				$_SESSION['id'] = $row["id"];
                $_SESSION['image'] = $row["image"];
                $_SESSION['role'] = $row["role"];
                if($_SESSION['role'] == 'Admin'){
                    $_SESSION['access'] = true;
                }
                else{
                    $_SESSION['access'] = false;
                }
				header("location: ./admin-panel/admin.php");
			}
			else{
                $errormsg = "Wrong Password";
            }
		} 
		else{
            $errormsg = "User Not Resgister";
        }
	}
?>


<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/forms.css">

    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Box Icons Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    
    <title>Login Page</title>
</head>
<body>
    <!------------ NAVBAR SECTION ------------->
    <nav>
        <div class="logo"><span>T</span>rinetra &nbsp;<span>G</span>raphics</div>
        <ul class="nav-items" id="items-nav">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./index.php#about">About</a></li>
            <li><a href="./index.php#services">Services</a></li>
            <li><a href="./index.php#projects">Projects</a></li>
            <li><a href="./index.php#team">Team</a></li>
            <div class="links">
                <a href="./index.php#contact"><h4>Contact Us: 9704573187</h4></a>
                <div class="social"> <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a></div>
            </div>
        </ul>
      
        <input type="checkbox" id="check" onclick="checkbox()">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
    </nav>

    <!------------- HEADING ---------------->
    <div class="heading">
        <h6>Hello, This page is only for Admins... If you want to know more about Trinetra Graphics. Go Back to Home Page</h6>
    </div>

    <!-------------- FORM --------------->
    <div class="wrapper">
        <h1>Login Form</h1>
        
        <?php 
            if(!empty($errormsg)){
                echo "
                    <div class='error_msg'>
                        <strong>$errormsg</strong>
                    </div>
                ";
            }
        ?>

        <form class="form" method="post">
            <div class="input">
                <input type="text" name="username_email" id="username_email" placeholder="Enter Email">
            </div>
            <div class="input">
                <input type="password" name="password" id="password" placeholder="Enter Password">
            </div>
            <div class="input" >
                <button type="submit" name="submit2">Login Now</button>
            </div>
        </form>
    </div>

</body>

</html>