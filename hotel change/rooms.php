<?php
session_start();
 if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
   header('Location:login.php');
 }
 $id = $_SESSION['user_id']; 

include('db/connect.php');
$query="SELECT * FROM room";
$result= mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include('include/nav.php')  ?>
    <?php while($post= mysqli_fetch_assoc($result)){ ?>

<div class="container">
    <div class="row d-flex justify-content-center">

        <div class="col-md-8">
                <div style="background-color:#444; margin-top:30px;  color:white" class="card">
                    <img style="height: 400px;"   src="<?php echo $post['image'] ?>">
                    <div> <h3 style="background-color:black; color:white"><?php echo $post['room_title']?></h3> <h6>Room No: <?php echo $post['room_no']; ?></h6></div>
                    <div> <?php echo $post['description'] ?></div>

                    <div style="float:right">
                        Price: Rs.<?php echo $post['price'] ?>  
                        <form action="booking.php" method="POST">
                            <input type="hidden" name="room_id" value="<?php echo $post['id'] ?>">
                            <input type="hidden" name="room_no" value="<?php echo $post['room_no'] ?>">
                            <button class="btn btn-outline-primary">Book Now</button>
                        </form>
                    </div>
                    
                </div>
            
        </div>
    </div>
</div>


<?php } ?>
    
</body>
</html>