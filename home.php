<?php
    session_start();

    include('config.php');
    if(!isset($_SESSION['valid'])){
        header("Location:index.php"); 
    }
?>   
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Home</title>
    </head>
    <body>
        <div class="nav">
            <div class="logo">
                <p>Logo</p>
            </div>
        
        <div class="right-links">

        <?php
         $id =$_SESSION['id'];
         $query = mysqli_query($con,"SELECT*FROM users WHERE id=$id");
        while($result = mysqli_fetch_assoc($query)){
            $res_Uname = $result['Username'];
            $res_Email = $result['Email'];
            $res_Age = $result['Age'];
            $res_Uname = $result['Id'];

        }
         
          
        echo "<a href='edit.php?Id=$id'>Change Profile</a>";

        ?>
            
            <a href="logout.php"><button class="btn">Log Out</button></a>

        </div>    
        </div>
        <main>
            <div class="main-box top">
                <div class="top">
                    <div class="box">
                    <p>Hello User <b></b>, Welcome!!</p>
                    </div>
                    <div class="box">
                        <p>Your email is <b><?php echo $res_Email?></b>.</p>
                    </div>
                    <div class="bottom">
                        <div class="box">
                            <p>And you are <b><?php echo $res_Age?></b>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>    
</html>