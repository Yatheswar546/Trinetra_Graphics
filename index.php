<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinetra Graphics</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/styles.css">  

    <!-- Slick CSS Links -->
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">

    <!-- Jquery link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">

    <!-- Swiper CSS for testimonials -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

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
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li> 
                <li><a href="#projects">Projects</a></li>
                <li><a href="#team">Team</a></li>
                <div class="links">
                    <a href="#contact"><h4>Contact Us: 9704573187</h4></a>
                    <div class="social"> <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a></div>
                        <a href="./login.php" class="user"><i class="fa-solid fa-user"></i></a>
                </div>
            </ul>
            <input type="checkbox" id="check" onclick="checkbox()">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        </nav>
        <!------------------ BANNER SECTION  -->
        <div class="wrapper" id="home">
            <div class="cols cols0">
                <span class="topline">Hello</span>
                <h1>We Provide <span class="multitext"></span> </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cumque aspernatur quam similique
                    aperiam
                    vero tempora voluptatum deleniti odio expedita!</p>
                <div class="btns">
                    <button class="btn">Know More</button>
                    <a href="#contact"><button class="btn">Contact Us</button></a>
                </div>
            </div>
            <div class="cols cols1">
                <div class="slider">
                    <img src="./images/banner/slider1.jpg" alt="">
                    <img src="./images/banner/slider2.jpg" alt="">
                    <img src="./images/banner/slider3.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!---------------- RECENT PROJECTS --------------------->
    <section class="recent-projects">
        <h1 class="heading"> <span>R</span>ecent <span>P</span>rojects</h1>
        <div class="project-cards">
            <article>
                <div class="project-image">
                    <img src="./images/projects/project1.png" alt="">
                </div>
                <h4>3D Project</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                    saepe? Reiciendis vel ullam dolore?
                </p>
                <a href="#" class="btn">More Info</a>
            </article>
            <article>
                <div class="project-image">
                    <img src="./images/projects/project1.png" alt="">
                </div>
                <h4>3D Project</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                    saepe? Reiciendis vel ullam dolore?
                </p>
                <a href="#" class="btn">More Info</a>
            </article>
            <article>
                <div class="project-image">
                    <img src="./images/projects/project1.png" alt="">
                </div>
                <h4>3D Project</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                    saepe? Reiciendis vel ullam dolore?
                </p>
                <a href="#" class="btn">More Info</a>
            </article>
        </div>
    </section>

    <!----------------------------------- ABOUT SECTION -------------------------->
    <section class="about-section" id="about">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About</h1>
                </div>
                <div class="content">
                    <h3>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem vel sequi tenetur est, vero
                        labore beatae modi, exercitationem ipsam reprehenderit assumendar
                    </h3>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem architecto consequatur
                        nostrum nihil possimus tenetur, numquam accusamus libero. Dignissimos aliquid nobis ex ratione
                        vel, alias aperiam quis nemo reiciendis aut! Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Deserunt doloremque, aliquid suscipit blanditiis iure laboriosam, asperiores, adipisci
                        natus tempora non cum. Vel, laudantium cum. Provident rem minus vel maxime dolore?</p>
                    <div class="button">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="./images/about.jpeg" alt="dheeraj">
            </div>
        </div>
    </section>

    <!---------------------------------------- SERVICES Section --------------------->
    <section class="services" id="services">
        <div class="wrapper">
            <h1 class="heading"> <span>O</span>ur <span>S</span>ervices</h1>
            <p>There are three responses to a peice of design-yes, no and WOW! Wow is the one to aim for.</p>

            <div class="content-box">
                <?php
                    // Create Connection
                    $db = mysqli_connect('localhost','root','','graphic');

                    // Check Connection
                    if(!$db){
                        die("Connection Failed!!!".mysqli_connect_error());
                    }
                    else{
                        // echo "Connected Successfully...";
                    }

                    // read all data from database services table
                    $services = mysqli_query($db, "SELECT * FROM `service`");

                    if(!$services){
                        die("Invalid Query !!!". mysqli_connect_error());
                    }
                    else{
                        // read data from the table
                        while($row = mysqli_fetch_assoc($services)){
                            echo"
                            <div class='card'>
                                $row[symbol];
                                <h2>$row[name]</h2>
                                <p>$row[description]</p>
                            </div>
                            ";
                        }
                    }
                ?>
                <!-- <div class="card">
                    <i class='bx bx-bookmarks'></i>
                    <h2>Brochures, rack cards & booklets</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex mollitia inventore ipsam, voluptatum
                        odit facilis.</p>
                </div>
                <div class="card">
                    <i class='bx bxs-envelope-open'></i>
                    <h2>Business cards, letterhead & envelopes</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex mollitia inventore ipsam, voluptatum
                        odit facilis.</p>
                </div>
                <div class="card">
                    <i class='bx bxl-graphql'></i>
                    <h2>Logos and branded elements</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex mollitia inventore ipsam, voluptatum
                        odit facilis.</p>
                </div>
                <div class="card">
                    <i class='bx bxs-paint'></i>
                    <h2>Posters, banners and signage</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex mollitia inventore ipsam, voluptatum
                        odit facilis.</p>
                </div>
                <div class="card">
                    <i class='bx bx-desktop'></i>
                    <h2>Social media graphics & digital marketing ads</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex mollitia inventore ipsam, voluptatum
                        odit facilis.</p>
                </div>
                <div class="card">
                    <i class='bx bx-envelope'></i>
                    <h2>Email marketing graphics</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex mollitia inventore ipsam, voluptatum
                        odit facilis.</p>
                </div> -->
            </div>
        </div>
    </section>

    <!---------------------------------- PROJECTS SECTION -------------------->
    <section class="projects-section" id="projects">
        <div class="wrapper">
            <h1 class="heading"> <span>O</span>ur <span>P</span>rojects</h1>
            <nav>
                <div class="items">
                    <span class="item active" data-name="all">All</span>
                    <span class="item" data-name="Grpahic Designing">Grpahic Designing</span>
                    <span class="item" data-name="Posters">Posters</span>
                    <span class="item" data-name="Logos">Logos</span> 
                    <span class="item" data-name="Video Editing">Video Editing</span>
                    <span class="item" data-name="Brochures">Brochures</span>
                </div>
            </nav> 
            <div class="projects">
                <?php
                    // Database Connection
                    // $db = mysqli_connect('localhost','root','','graphic');

                    // Check Connection
                    // if(!$db){
                    //     die("Connection Failed".mysqli_connect_error());
                    // }
                    // else{
                    //     // echo "Connection Successful.....";
                    // }

                    // read data from projects table
                    // $projects = mysqli_query($db,"SELECT * FROM `projects`");

                    // if(!$projects){
                    //     die("Invalid Query !!!".mysqli_connect_error());
                    // }
                    // else{
                    //     // read data of each row
                    //     while($row = mysqli_fetch_assoc($projects)){
                    //         echo"
                    //         <div class='project' data-name='$row[topic]'>
                    //             <span><img src='./admin-panel/data_base-images/$row[image]'></span>
                    //             <h4>$row[title]</h4>
                    //             <p>$row[description]/p>
                    //             <a href='#' class='btn'>More Info</a>
                    //         </div>
                    //         ";
                    //     }
                    // }
                ?>
                <div class="project" data-name="Grpahic Designing">
                    <span><img src="./images/projects/graphic1.jpg" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Posters">
                    <span><img src="./images/projects/poster1.avif" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Logos">
                    <span><img src="./images/projects/logo1.jfif" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Video Editing">
                    <span><img src="./images/projects/video1.jpg" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Brochures">
                    <span><img src="./images/projects/brochure1.webp" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Grpahic Designing">
                    <span><img src="./images/projects/graphic2.jfif" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Posters">
                    <span><img src="./images/projects/poster2.avif" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Logos">
                    <span><img src="./images/projects/logo2.png" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Video Editing">
                    <span><img src="./images/projects/video2.jfif" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Brochures">
                    <span><img src="./images/projects/brochure2.webp" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Grpahic Designing">
                    <span><img src="./images/projects/grpahic3.jpg" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Posters">
                    <span><img src="./images/projects/poster3.avif" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Logos">
                    <span><img src="./images/projects/logo3.webp" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Brochures">
                    <span><img src="./images/projects/brochure3.webp" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Grpahic Designing">
                    <span><img src="./images/projects/grpahic4.jfif" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Posters">
                    <span><img src="./images/projects/poster4.avif" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Logos">
                    <span><img src="./images/projects/logo4.png" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Brochures">
                    <span><img src="./images/projects/brochure4.jfif" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Grpahic Designing">
                    <span><img src="./images/projects/graphic5.jpg" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div> 
                <div class="project" data-name="Posters">
                    <span><img src="./images/projects/poster5.jpg" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div>
                <div class="project" data-name="Brochures">
                    <span><img src="./images/projects/brochure5.jfif" alt=""></span>
                    <h4>Project 1</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis cum modi iusto quos ab quod
                        saepe? Reiciendis vel ullam dolore?
                    </p>
                    <a href="#" class="btn">More Info</a>
                </div> 
            </div>
        </div>
    </section>

    <!------------------------------- COUNTING SECTION ----------------------->
    <section class="counting">
        <div class="row">
            <div class="col">
                <i class="fa-solid fa-code"></i>
                <span class="num" data-val="106">000</span>
                <span class="text">Projects</span>
            </div>
            <div class="col">
                <i class="fa-regular fa-face-smile"></i>
                <span class="num" data-val="500">000</span>
                <span class="text">Happy Clients</span>
            </div>
            <div class="col">
                <i class="fa-solid fa-users"></i>
                <span class="num" data-val="80">00</span>
                <span class="text">Employees</span>
            </div>
            <div class="col">
                <i class="fa-solid fa-award"></i>
                <span class="num" data-val="50">00</span>
                <span class="text">Awards</span>
            </div>
        </div>
    </section>

    <!-------------------------------- TEAMS SECTION ---------------------->
    <section class="team" id="team">
        <div class="container">
            <div class="title">
                <h2 class="heading"> <span>O</span>ur <span>T</span>eam</h2>
            </div>
            <i class="fa-solid fa-chevron-left prev"></i>
            <i class="fa-solid fa-chevron-right next"></i>

            <div class="teams">
                <?php 
                    // Database Connection
                    $db = mysqli_connect('localhost','root','','graphic');
                    
                    // Check Connection
                    if(!$db){
                        die("Connection Failed!!!".mysqli_connect_error());
                    }
                    else{
                        // echo "Connected Succesfully";
                    }

                    // read the data from users table
                    $teams = mysqli_query($db,"SELECT * FROM `users`");

                    if(!$teams){
                        die("Invalid Query !!!".mysqli_connect_error());
                    }
                    else{
                        // read data of each row
                        while($row = mysqli_fetch_assoc($teams)){
                            echo "
                            <div class='team-member'>
                            <div class='image-content'>
                                <span class='overlay'></span>
        
                                <div class='card-image'>
                                    <img src='./admin-panel/data_base-images/$row[image]' class='card-img'>
                                </div>
                            </div>
        
                            <div class='card-content'>
                                <h2 class='name'>$row[name]</h2>
                                <p class='description'>$row[description]</p>
        
                                <button class='button'>View More</button>
                            </div>
                        </div>
                            ";
                        }
                    }
                ?>
                <!-- <div class="team-member">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="./images/teams/p2.png" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Can Yaman</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae
                            tempora odit beatae soluta dolor, vel autem amet molestiae molestias obcaecati ducimus quis,
                            magni provident error nulla commodi porro mollitia a.</p>

                        <button class="button">View More</button>
                    </div>
                </div>

                <div class="team-member">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="./images/teams/p3.png" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Harshavardhan</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae
                            tempora odit beatae soluta dolor, vel autem amet molestiae molestias obcaecati ducimus quis,
                            magni provident error nulla commodi porro mollitia a.</p>

                        <button class="button">View More</button>
                    </div>
                </div>

                <div class="team-member">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="./images/teams/p4.png" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Arman Malik</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae
                            tempora odit beatae soluta dolor, vel autem amet molestiae molestias obcaecati ducimus quis,
                            magni provident error nulla commodi porro mollitia a.</p>

                        <button class="button">View More</button>
                    </div>
                </div>

                <div class="team-member">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="./images/teams/p5.png" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Rishi</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae
                            tempora odit beatae soluta dolor, vel autem amet molestiae molestias obcaecati ducimus quis,
                            magni provident error nulla commodi porro mollitia a.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="team-member">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="./images/teams/p6.png" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Darshan Raval</h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae
                            tempora odit beatae soluta dolor, vel autem amet molestiae molestias obcaecati ducimus quis,
                            magni provident error nulla commodi porro mollitia a.</p>

                        <button class="button">View More</button>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!------------------------- TESTIMONIALS SECTION ----------------------------->
    <section class="testimonials">
        <h1 class="heading"> Testimonials</h1>
        <div class="container">
            <div class="swiper card-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonialbox">
                            <div class="testimonial">
                                <div class="img-area">
                                    <img src="./images/testimonials/1.jpg">
                                </div>
                                <div class="name">Jessica 1</div>
                                <div class="stars">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis
                                    repellendus
                                    delectus,
                                    est,
                                    alias recusandae."</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonialbox">
                            <div class="testimonial">
                                <div class="img-area">
                                    <img src="./images/testimonials/1.jpg">
                                </div>
                                <div class="name">Jessica 2</div>
                                <div class="stars">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis
                                    repellendus
                                    delectus,
                                    est,
                                    alias recusandae."</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonialbox">
                            <div class="testimonial">
                                <div class="img-area">
                                    <img src="./images/testimonials/1.jpg">
                                </div>
                                <div class="name">Jessica 3</div>
                                <div class="stars">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis
                                    repellendus
                                    delectus,
                                    est,
                                    alias recusandae."</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonialbox">
                            <div class="testimonial">
                                <div class="img-area">
                                    <img src="./images/testimonials/1.jpg">
                                </div>
                                <div class="name">Jessica 4</div>
                                <div class="stars">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis
                                    repellendus
                                    delectus,
                                    est,
                                    alias recusandae."</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonialbox">
                            <div class="testimonial">
                                <div class="img-area">
                                    <img src="./images/testimonials/1.jpg">
                                </div>
                                <div class="name">Jessica 5</div>
                                <div class="stars">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis
                                    repellendus
                                    delectus,
                                    est,
                                    alias recusandae."</p>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="swiper-pagination"></div>
              
            </div>
          
        </div>
    </section>

    <!------------------------ CONTACT SECTION ------------------------------->
    <div class="contact" id="contact">
        <div class="contact-details">
            <div class="content">
                <h1 class="heading"> <span>C</span>ontact <span>U</span>s</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure nesciunt vero ipsum, qui voluptatum
                    quas
                    molestiae eos. Voluptatum corrupti voluptas, culpa neque earum, quis veritatis delectus repellat
                    laudantium recusandae voluptate.</p>
            </div>
            <div class="container">
                <div class="contactinfo">
                    <div class="box">
                        <div class="icon"><i class="fa-sharp fa-solid fa-location-dot"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>36-19-9 Near Old Ramarao Hospital, <br>Reddy Kancharapalem, <br>Visakhapatnam</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>graphicdesigns@gmail.com</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>79012 55908</p>
                        </div>
                    </div>
                </div>
                <div class="contactform">
                    <form action="./admin-panel/feedback/form.php" method="post" enctype="multipart/form-data">
                        <h2>Send Message</h2>
                        <div class="inputbox">
                            <input type="text" name="name" id="name" placeholder="Full Name" required="required" >
                        </div>
                        <div class="inputbox">
                            <input type="email" name="email" id="email" placeholder="Email" required="required" >
                        </div>
                        <div class="inputbox">
                            <textarea required="required" name="message" id="message" placeholder="Type your message......"></textarea>
                        </div>
                        <div class="inputbox">
                            <input type="submit" name="submit" id="submit" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-------------------------- FOOTER -------------------------------------->
    <div class="footer">
        <div class="container">
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

    <!-- Swiper Js Script Tag -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Jquery Script Tag -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Slick Js link -->
    <script src="./js/slick.min.js"></script>

    <!-- Banner Multitext -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- Custom Js -->
    <script src="./js/main.js"></script>


</body>

</html>