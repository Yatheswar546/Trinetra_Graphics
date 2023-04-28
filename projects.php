<?php 
    session_start();
    require ('config.php');
    // Check Connection
    if(!$db){
        die("Connection Failed!!!".mysqli_connect_error());
    }
    else{
        // echo "Connected Succesfully";
    }
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinetra Graphics</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/styles.css">  
    <link rel="stylesheet" href="./css/projects.css">

    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Box Icons Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 
</head>
 
<body>
    <!------------------- NAVBAR SECTION ---------------->
    <div class="banner-container">
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
                        <?php if(isset($_SESSION['id'])): ?>
                            <a href="./admin-panel/admin.php"><i class="fa-solid fa-user"></i></a>
                            <a href="./logout.php"><p style="color:red;">Logout</p></a>
                        <?p
                        
                        hp else: ?> 
                            <a href="./login.php" class="user">Login</a>
                        <?php endif; ?>
                </div>
            </ul>
            <input type="checkbox" id="check" onclick="checkbox()">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        </nav>
    </div> 

    <!-- All projects section -->
    <div class="all-projects"> 
        <div class="wrapper">
            <h1 class="heading"> <span>O</span>ur <span>P</span>rojects</h1>
		    <div class="filter">
                <span>Fetch Projects by &nbsp;</span>
		    	<select name="products" id="products">
		    		<option value="">All Projects</option>
		    		<option value="Graphic Designing">Graphic Designing</option>
		    		<option value="Posters">Poster Making</option>
		    		<option value="Video Editing">Video Editing</option>
		    		<option value="Logo">Logos</option>
		    		<option value="Brochures">Brochures</option>
		    	</select>
		    </div>
		    <div class="container">
                <div class="projects"> 
                    <?php
                        $query = "SELECT * FROM `projects`";
                        $projects = mysqli_query($db,$query);
                        while($row = mysqli_fetch_assoc($projects)){
                            $data = $row['description'];
                            $substring = substr($data,0,100);
                            $description = $substring."...";
                    ?>
                    <div class="project">
                        <span><img src="./admin-panel/data_base-images/projects/<?php echo $row['image']?>"></span>
                        <h4><?php echo $row['title']?></h4>
                        <p><?php ?></p>
                        <a href='./single-page.php?id=<?php echo$row['id']?>' class="btn">More Info</a>
                    </div>
                    <?php
                        }
                    ?>
                </div> 
            </div>
		</div>
	</div>

    <!-- ------------------------ FOOTER -------------------------------------->
    <div class="footer">
        <div class="footer-container">
            <div class="about">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum odio adipisci ad. Quaerat dolores
                    iure unde fugit repudiandae sint sunt libero doloremque autem, deserunt possimus in veritatis ad
                    enim et?</p>
                <ul class="icons">
                    <li><a href=""><i class="fab fa-facebook-f" style="color: #fff;"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter" style="color: #fff;"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram" style="color: #fff;"></i></a></li>
                    <li><a href=""><i class="fab fa-whatsapp" style="color: #fff;"></i></a></li>
                </ul>
            </div>
            <div class="quicklinks">
                <h3>QuickLinks</h3>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="quicklinks">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Graphic Designing</a></li>
                    <li><a href="#">Brochures</a></li>
                    <li><a href="#">Video Editing</a></li>
                    <li><a href="#">Poster Making</a></li>
                    <li><a href="#">Logos</a></li>
                </ul>
            </div>
            <div class="footercontact">
                <h3>Contact Us</h3>
                <ul class="info">
                    <li>
                        <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                        <span>D.No. 36-19-9<br>
                            Kancharapalem, Vizag, <br>India</span>
                    </li>
                    <li>
                        <span><i class="fa-solid fa-phone"></i></i></span>
                        <p><a href="#">8374578371</a><br></p>
                        <p><a href="#">7901255908</a><br></p>
                    </li>
                    <li>
                        <span><i class="fa-regular fa-envelope"></i></span>
                        <p><a href="#">graphicdesigns@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copright © 2022 Pravishree Designs | All Rights Reserved</p>
    </div> 
 
    <!-- Jquery Link for filtering -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#products").on('change',function(){
                var value = $(this).val();
                // alert(value);
                // console.log(value);

                // AJAX code
                $.ajax({
                    url:"fetch.php",
                    type:"POST",
                    data:"request=" + value,
                    beforeSend:function(){
                        $(".container").html("<span>Working...</span>");
                    },
                    success:function(data){
                        $(".container").html(data);
                    }
                });
            });
        });
    </script>

</body>

</html>