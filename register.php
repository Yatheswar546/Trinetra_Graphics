<?php
	require 'config.php';
	if(isset($_POST["submit1"])){
		$name = $_POST["name"];
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$duplicate = mysqli_query($conn,"SELECT * FROM forms WHERE username = '$username' OR email = '$email'");
		if(mysqli_num_rows($duplicate) > 0){
			echo "<script> alert('Username or Email Has Already Taken'); </script>";
		} 
		else{
			if($password){
                $query = "INSERT INTO `forms`(`name`, `email`, `username`, `password`) VALUES ('$name','$email','$username','$password')";
				mysqli_query($conn,$query);
                header('Location: login.php');
				echo "<script> alert('Registration Successful'); </script>";
			} 
			else{
				echo "<script> alert('Username or Email Has Already Taken'); </script>";
			}
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

    
    <title>Register</title>
</head>
<body>
    <!------------ NAVBAR SECTION ------------->
    <nav>
        <div class="logo"><span>T</span>rinetra &nbsp;<span>G</span>raphics</div>
        <ul class="nav-items" id="items-nav">
            <li><a href="./index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#team">Team</a></li>
            <div class="links">
                <a href="#contact"><h4>Contact Us: 9704573187</h4></a>
                <div class="social"> <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a></div>
                        <!-- <a href="./forms.html" class="user"><i class="fa-solid fa-user"></i></a> -->
                        <!-- <a href="./logout.php"><p style="color:red;">Logout</p></a> -->
            </div>
        </ul>
          
        <input type="checkbox" id="check" onclick="checkbox()">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
    </nav>  

    <!------------- HEADING ---------------->
    <div class="register-heading">
        <h1>Hello, This page is only for Admins... If you want to know more about Trinetra Graphics. Go Back to Home Page</h1>
    </div>

    <!----------- FORM ------------>
    <div class="wrapper register">
        <h1>Registration Form</h1>
        <form class="form" method="post" autocomplete="off">
            <div class="msg">
                <!-- Hii ra Ravi mama  -->
            </div>
            <div class="input">
                <input type="text" name="username" id="username" placeholder="Enter Username">
            </div>
            <div class="input">
                <input type="text" name="name" id="name" placeholder="Enter Name">
            </div>
            <div class="input">
                <input type="email" name="email" id="email" placeholder="Enter Email">
            </div>
            <div class="input">
                <input type="password" name="password" id="password" placeholder="Enter Password">
            </div>
            <div class="input">
                <!-- <input type="submit" name="" id="" value="Register Now"> -->
                <button type="submit" name="submit1">Register Now</button>
            </div>
            <div class="link">
                <a href="./login.php">Already a user ? Login</a>
            </div>
        </form>
    </div>
</body>
</html>
