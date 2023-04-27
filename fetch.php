<?php
    // sleep(1);

    include('config.php');
    if(!$db){
        die("Connection Failed!!!".mysqli_connect_error());
    }else{
        // echo "Connection Successful";
    }
    if(isset($_POST['request'])){
        $request = $_POST['request'];

        if(!$request){
            $query = "SELECT * FROM `projects`";
        }
        else{
            $query = "SELECT * FROM `projects` WHERE category='$request'";
        }

        $result = mysqli_query($db,$query);
        
        $count = mysqli_num_rows($result);

?>
 <?php 
    if(!$count){
        echo "Sorry! Projects to be uploaded!!!";
?>  
<div class="all-projects" style="position: relative; top: 0; width: 100%; border: 5px solid white;">
    <div class="wrapper" style="margin: 50px auto; max-width: 90%;">
        <div class="container">    
            <?php 
                }else{
                    while($row = mysqli_fetch_assoc($result)){ 
            ?> 
            <div class="projects" style="display: flex; flex-wrap:wrap">
                <div class="project" style="padding: 7px; height: 450px; width:350px; margin: 5px; border: 2px solid #7f00ff; border-radius: 15px;">
                    <span style="width: 300px; height: 300px;"><img src="./admin-panel/data_base-images/projects/<?php echo $row['image']?>" style="width: inherit; height: inherit;"></span>
                    <h4 style="padding: 5px; margin-left: 20px; font-size: 25px;"><?php echo $row['title']?></h4>
                    <p style="padding: 5px; margin-left: 20px; padding-bottom: 13px;"><?php //echo $row['description']?></p>
                    <a href='./single-page.php?id=<?php echo$row['id']?>' class="btn" style="padding: 10px; text-decoration: none; margin: 22px; background-color: #7f00ff; color: #fff; text-decoration: none; border-radius: 10px;">More Info</a>
                </div>
            </div>
            <?php
                    }
                }
            ?> 
        </div>
    </div>
</div>
<?php
    }
?>