<?php 

    $db = mysqli_connect('localhost','root','','graphic');

    $id = "";
    $title = "";
    $body = "";
    $developer = "";
    $topic = "";
    $file = "";
    
    $errormsg = "";
    $successmsg = "";

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        // GET Method : Show the Data
        if(!isset($_GET["id"])){
            header("location: index.php");
            exit;
        }

        $id = $_GET["id"];
        // Read the Data
        $result = mysqli_query($db,"SELECT * FROM `projects` WHERE id=$id");
        $row = $result->fetch_assoc();

        if(!$row){
            header("Location: index.php");
            exit;
        }
        $title = $row['title'];
        $body = $row['description'];
        $file = $row['image'];
        $developer = $row['developer'];
        $topic = $row['topic'];
    }
    else{
        // POST Method : Update the data
        $id = $_POST['id'];
        $title = $_POST['title'];  
	    $body = $_POST['body'];
        $developer = $_POST['developer'];
        $topic = $_POST['topic'];
        $target = "../data_base-images/"; 
        $filename = $_FILES['image']['name'];
        $filetype = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $target_file = $target.basename(md5("userid".$_FILES['image']['name']).".".$filetype);
        $file = md5("userid".$_FILES['image']['name']).".".$filetype;
        $projectid = md5(substr($title,0,3).substr($developer,0,3).random_int(10000,99999));

        do{
            if(empty($id) || empty($title) || empty($body) || empty($developer) || empty($file)){
                $errormsg = "All Fields are required !!!";
                break;
            }
            else{
                $result = mysqli_query($db,"UPDATE `projects` SET `title`='$title',`description`='$body',`image`='$file',`developer`='$developer',`topic`='$topic',`projectid`='$projectid' WHERE id=$id");

                if(!$result){
                    $errormsg = "Invalid Query...".mysqli_connect_error();
                    break;
                }
                else{
                    $successmsg = "Project Updated Succesfully";

                    header("Location: index.php");
                    exit;
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
                <a href="./create.php" class="admin-btn btn-blg">Edit Project</a>
                <a href="./index.php" class="admin-btn btn-blg">Manage Projects</a>
            </div>

            <div class="content">
                <h2 class="page-title">Edit Projects</h2>

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
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label>Title</label> 
                        <input type="text" name="title" id="title" class="text-input" value="<?php echo $title; ?>">
                    </div>
                    <div>
                        <label>Body</label>
                        <input type="text" name="body" id="body" class="text-input" value="<?php echo $body; ?>">
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" id="image" class="text-input" value="<?php echo $file; ?>">
                    </div>
                    <div>
                        <label>Developer</label>
                        <input type="text" name="developer" id="developer" class="text-input" value="<?php echo $developer; ?>">
                    </div>
                    <div>
                        <label>Topic</label>
                        <select name="topic" class="text-input" value="<?php echo $topic; ?>">
                            <option value="Graphic Designing">Graphic Designing</option>
                            <option value="Video Editing">Video Editing</option>
                            <option value="Logo">Logo</option>
                            <option value="Poster Making">Poster Making</option>
                            <option value="Brochure">Brochure</option>
                        </select>
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
                        <button type="submit" class="admin-btn btn-blg">Add Project</button>
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