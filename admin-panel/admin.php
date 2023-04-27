<?php
    session_start();
    if($_SESSION['id'] == true){
        // echo $_SESSION['access'];
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive admin dashboard</title>

    <!-- Custom CSS --> 
    <link rel="stylesheet" href="../css/admin.css">
    
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
                    <a href="./admin.php">
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
                    <a href="./feedback/index.php">
                        <span class="icon"><i class='bx bx-message-rounded-dots' ></i></span>
                        <span class="title">Feedbacks</span>
                    </a>
                </li>
                <li>
                    <a href="./teams/index.php">
                        <span class="icon"><i class="fa-solid fa-people-group"></i></span>
                        <span class="title">Teams</span>
                    </a>
                </li>
                <li>
                    <a href="./services/index.php">
                        <span class="icon"><i class="fa-solid fa-briefcase"></i></span>
                        <span class="title">Services</span>
                    </a>
                </li>
                <li>
                    <a href="./projects/index.php">
                        <span class="icon"><i class="fa-solid fa-code"></i></span>
                        <span class="title">Projects</span>
                    </a>
                </li>
                <li>
                    <a href="./users/index.php">
                        <span class="icon"><i class="fa-regular fa-circle-user"></i></span>
                        <span class="title">Users</span>
                    </a>
                </li>
                <li>
                    <a href="../logout.php">
                        <span class="icon"><i class='bx bx-log-out'></i></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
                <li>
                    <a href="../index.php">
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
                <?php echo "<img src='./data_base-images/users/{$_SESSION['image']}'>"; ?>
            </div>
        </div>

        <!------------- COUNTING AREA ------------------->
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">1,504</div>
                    <div class="cardName">Daily Views</div>
                </div>
                <div class="iconBx">
                    <i class='bx bx-bullseye'></i>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">80</div>
                    <div class="cardName">Sales</div>
                </div>
                <div class="iconBx">
                    <i class='bx bx-cart' ></i>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">284</div>
                    <div class="cardName">Comments</div>
                </div>
                <div class="iconBx">
                    <i class='bx bx-chat'></i>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers">$7,842</div>
                    <div class="cardName">Earning</div>
                </div>
                <div class="iconBx">
                    <i class='bx bxs-wallet' ></i>
                </div>
            </div>
        </div>

        <!------------------------- ORDERS DETAILS------------------->
        <div class="details">
            <!------------ RECENT ORDERS ---------------->
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Recent Orders</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <thead>
                        <tbody>
                            <tr>
                                <td>Graphic Designing</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Poster</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Video</td>
                                <td>$620</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>Logo</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>Brochure</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Graphic Designing</td>
                                <td>$110</td>
                                <td>Paid</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Poster</td>
                                <td>$620</td>
                                <td>Paid</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Video</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>Logo</td>
                                <td>$575</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Wall Fan</td>
                                <td>$110</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Brochure</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            
                        </tbody>
                    </thead>
                </table>
            </div>

            <!-------------------- RECENT CUSTOMERS --------------------------->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recent Customers</h2>
                </div>
                <table>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="./images/zain.png"></div></td>
                        <td><h4>David<br><span>Italy</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="./images/p1.png"></div></td>
                        <td><h4>Parth<br><span>Italy</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="./images/p2.png"></div></td>
                        <td><h4>John<br><span>Italy</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="./images/p3.png"></div></td>
                        <td><h4>Harsha<br><span>Italy</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="./images/p4.png"></div></td>
                        <td><h4>Arman<br><span>Italy</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="./images/p5.png"></div></td>
                        <td><h4>Rishi<br><span>Italy</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="./images/p6.png"></div></td>
                        <td><h4>Darshan<br><span>Italy</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="./images/zain.png"></div></td>
                        <td><h4>Zain<br><span>Italy</span></h4></td>
                    </tr>
                </table>
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
        header('Location: ../index.php');
    }
?>