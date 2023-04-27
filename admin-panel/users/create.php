<?php
    session_start();
    if($_SESSION['access'] == 1){

    // Database Connection
    require_once('../config.php');
    
    $username = "";
    $email = "";
    $phone = "";
    $file = "";
    $role = "";

    $errormsg = "";
    $successmsg = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
	    $email = $_POST['email'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $password = $_POST["password"];
        
        $target = "../data_base-images/users/";
        $filename = $_FILES['image']['name'];
        $filetype = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION)); // filetype
        $target_file = $target.basename(md5("userid".$_FILES['image']['name']).".".$filetype); //target path
        $file = md5("userid".$_FILES['image']['name']).".".$filetype; // file created

        $duplicate = mysqli_query($db,"SELECT * FROM users WHERE username = '$username' OR email = '$email'");

        do{
            if(mysqli_num_rows($duplicate) > 0){
                // echo "<script> alert('Username or Email Has Already Taken'); </script>";
                $errormsg = "Username or Email Has Already Exists";
            }
            elseif( empty($username) || empty($email) || empty($phone) || empty($role) || empty($password) || empty($file)){
                $errormsg = "All Fields are required !!!";
                break;
            }
            else{
                if($filetype == "png" || $filetype == "jpg" || $filetype == "jpeg"){
                    if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
                        $sql = mysqli_query($db,"INSERT INTO `users`(`username`, `email`, `password`, `phoneno`, `image`, `role`) VALUES ('$username','$email', '$password', '$phone','$file','$role')");
                        if($sql){
                            $successmsg = "You have successfully Added a User";
                            header("Location: index.php");
                            exit;
                        } 
                        else{
                            $errormsg = "Something went wrong!!!";
                        }
                    }
                    else{
                        $errormsg = "Image not moved!!";
                    }
                }
                else{
                    $errormsg = "Image not accepted";
                }
            }
        }while(false);
    }
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive admin dashboard</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/admin.css">
    
    <!-- Box Icons Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>

    <!----------------------- SideBar ---------------------->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="title heading">Trinetra Graphics</span>
                    </a>
                </li>
                <li>
                    <a href="../admin.php">
                        <span class="icon"><i class='bx bx-home' ></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class='bx bx-user' ></i></span>
                        <span class="title">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="../feedback/index.php">
                        <span class="icon"><i class='bx bx-message-rounded-dots' ></i></span>
                        <span class="title">Feedbacks</span>
                    </a>
                </li>
                <li>
                    <a href="../teams/index.php">
                        <span class="icon"><i class="fa-solid fa-people-group"></i></span>
                        <span class="title">Teams</span>
                    </a>
                </li>
                <li>
                    <a href="../services/index.php">
                        <span class="icon"><i class="fa-solid fa-briefcase"></i></span>
                        <span class="title">Services</span>
                    </a>
                </li>
                <li>
                    <a href="../projects/index.php">
                        <span class="icon"><i class="fa-solid fa-code"></i></span>
                        <span class="title">Projects</span>
                    </a>
                </li>
                <li>
                    <a href="../users/index.php">
                        <span class="icon"><i class="fa-regular fa-circle-user"></i></span>
                        <span class="title">Users</span>
                    </a>
                </li>
                <li>
                    <a href="../../logout.php">
                        <span class="icon"><i class='bx bx-log-out'></i></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
                <li>
                    <a href="../../index.php">
                        <span class="icon"><i class="fa-sharp fa-solid fa-house"></i></span>
                        <span class="title">Back to Home</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!----------------MAIN SECTION ----------------------------->
    <div class="main">
        <!------------- Top Search Bar ---------------------->
        <div class="topbar">
            <div class="toggle" style="display:none;">
                <i class='bx bx-menu'></i>
            </div>
            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    <i class='bx bx-search' ></i>
                </label>
            </div>
            <div class="user">
                <?php echo "<img src='../data_base-images/users/{$_SESSION['image']}'>"; ?>
            </div>
        </div>

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="./create.php" class="admin-btn btn-blg">Add User</a>
                <a href="./index.php" class="admin-btn btn-blg">Manage Users</a>
            </div> 

            <div class="content"> 
                <h2 class="page-title">Add User</h2>

                <?php 
                    if(!empty($errormsg)){
                        echo "
                            <div class='error_msg'>
                                <strong>$errormsg</strong>
                            </div>
                        ";
                    }
                ?>

                <form action="#" method="post" enctype="multipart/form-data">
                    <div>
                        <label>Name</label>
                        <input type="text" name="username" class="text-input" value="<?php echo $username; ?>">
                    </div>
                    <div>  
                        <label>Email</label>
                        <input type="email" name="email" class="text-input" value="<?php echo $email; ?>">
                    </div>
                    <div>
                        <label>Phone No.</label>
                        <input type="text" name="phone" class="text-input" value="<?php echo $phone; ?>">
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input" value="<?php echo $file; ?>">
                    </div>
                    <div>
                        <label>Role</label>
                        <select name="role" class="text-input" value="<?php echo $role; ?>">
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password">
                    </div>

                    <?php 
                        if(!empty($successmsg)){
                            echo "
                                <div class='success_msg'>
                                    <strong>$successmsg</strong>
                                </div>
                            ";
                        } 
                    ?>

                    <div>
                        <button type="submit" class="admin-btn btn-blg">Add User</button>
                        <a href="./index.php" class="admin-btn btn-blg">Cancel</a>
                    </div>
                </form>

            </div>

        </div>
    </div>


    <script>
        //MenuToggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');
        
        toggle.onlick =  function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }
        // add hovered class in selected list item
        let list = document.querySelectorAll('.navigation li');
        function activelink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered')
        }
        list.forEach((item) =>
        item.addEventListener('mouseover',activelink));
    </script>
</body>
</html>

<?php
    }
    else{
        header("Location: ./index.php");
    }
?>