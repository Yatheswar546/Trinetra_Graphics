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

        <!-------------- Admin Content ------------------------------>
        <div class="admin-content">
            <div class="button-group">
                <a href="./create.php" class="admin-btn btn-blg">Add Teams</a>
                <a href="./index.php" class="admin-btn btn-blg">Manage Teams</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage Teams</h2>

                <table>
                    <thead>
                        <th>S. No.</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Pic</th>
                        <th>Phone No.</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php 
                            // Database Connection
                            $db = mysqli_connect('localhost','root','','graphic');

                            // Check Connetion
                            if(!$db){
                                die("Connection Failed!!!".mysqli_connect_error());
                            }
                            else{
                                // echo "Connected Successfully";
                            }

                            // read the data from users table
                            $result = mysqli_query($db,"SELECT * FROM `users`");

                            if(!$result){
                                die("Invalid Query !!!".mysqli_connect_error());
                            }
                            else{
                                // read data of each row ; 
                                // $row = $result->fetch_assoc()
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "
                                    <tr>
                                        <td>$row[id]</td>
                                        <td>$row[name]</td>
                                        <td>$row[role]</td>
                                        <td><img src='../data_base-images/$row[image]'></td>
                                        <td>$row[phoneno]</td>
                                        <td><a href='./edit.php?id=$row[id]' class='edit'>Edit</a></td>
                                        <td><a href='./delete.php?id=$row[id]' class='delete'>Delete</a></td>
                                    </tr>
                                    ";
                                }
                            }
                        ?>
                    </tbody>
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