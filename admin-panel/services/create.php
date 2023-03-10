<?php

    $db = mysqli_connect('localhost','root','','graphic');

    $title = ""; 
    $body = ""; 
    $price = "";
    $symbol = "";

    $errormsg = "";
    $successmsg = "";

    if( $_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
	    $body = $_POST['body'];
        $price = $_POST['price'];   
        $symbol = $db->real_escape_string($_POST['symbol']); 
        $serviceid = md5(substr($title,0,3).substr($body,0,3).random_int(10000,99999));

        do{
            if( empty($title) || empty($body) || empty($price) || empty($symbol)){
                $errormsg = "All Fields are required !!!";
                break;
            }
            else{
                // Insert new Service into table
                $sql = mysqli_query($db,"INSERT INTO `service`(`name`, `description`, `price`, `symbol`,`serviceid`) VALUES ('$title','$body','$price','$symbol','$serviceid')");

                if(!$sql){
                    $errormsg = "Invalid Query".mysqli_connect_error();
                    break;
                }
                $title = "";
                $body = "";
                $price = "";
                $symbol = "";

                $successmsg = "Service Added Successfully";
                header("Location: index.php");
                exit;
            }
        }while(false);
    }                           
?> 

<!-- Grpahic Designing -->
<!-- 0123456 -->
<!-- abc + vcy + 56748 = md5(abcvcy56748) => vcuv6718  -->


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
                    <a href="../admin.html">
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
                <!-- <li>
                    <a href="../../../index.php">
                        <span class="icon"><i class='bx bx-log-out'></i></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li> -->
                <li>
                    <a href="../../index1.php">
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
                <img src="../images/p1.png">
            </div>
        </div>

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group"> 
                <a href="./create.php" class="admin-btn btn-blg">Add Services</a>
                <a href="./index.php" class="admin-btn btn-blg">Manage Services</a>
            </div> 

            <div class="content">
                <h2 class="page-title">Manage Services</h2>

                <?php 
                    if(!empty($errormsg)){
                        echo "
                            <div class='error_msg'>
                                <strong>$errormsg</strong>
                            </div>
                        ";
                    }
                ?>

                <form action="#" method="post"  enctype="multipart/form-data">
                    <div> 
                        <label>Title</label>
                        <input type="text" name="title" id="title" class="text-input" value="<?php echo $title; ?>">
                    </div>
                    <div>
                        <label>Description</label>
                        <input type="text" name="body" id="body" class="text-input" value="<?php echo $body; ?>">
                    </div>
                    <div>
                        <label>Price</label>
                        <input type="text" name="price" id="price" class="text-input" value="<?php echo $price; ?>">
                    </div>
                    <div>
                        <label>Symbol</label>
                        <input type="text" name="symbol" id="symbol" class="text-input" value="<?php echo $symbol; ?>">
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
                        <button type="submit" class="admin-btn btn-blg">Add Service</button>
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