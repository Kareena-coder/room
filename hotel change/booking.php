<?php
session_start();
 if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
   header('Location:login.php');
 }
 $id = $_SESSION['user_id']; 
$room_id = $_POST['room_id'];
$room_no = $_POST['room_no'];



?>
<!DOCTYPE html>
<html>

<head>
    <title>Book Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 


</head>

<body>

    
    <!-- this is navbar -->
    <?php include('include/nav.php') ?>
    <!-- end of navbar -->
    <h1 style="text-align:center;">Book room</h1>

    <div class="container">
        <div class="row d-flex justify-content-center">


            <div class="col-md-8">

                <form method="POST" action="db/booking.php">
                
                    <div class="md-3">
                        <br>
                        <h3>Book the room: <?php echo $room_no; ?></h3>
                        <label style="font-size:20px; font-weight:bold;" class="form-label">Check-in:
                        </label>
                        <input name="date" value="<?php echo date('Y-m-d'); ?>" type="date" class="form-control ">
                    </div>
                    

                    <div class="md-3">
                        
                        <label style="font-size:20px; ; font-weight:bold;" class="form-label">Status:</label>
                        <select name="status" class="form-control " style="">
                            <option value="Booked" selected>Booked</option>
                            <option value="Travelling">Travelling</option>
                            <option value="Reserved">Reserved</option>
                        </select>
                    </div>
                    <input type="hidden" name= "room_id" value="<?php $room_id ?>">


                    <hr>
                    <button type="submit" class="btn btn-success">Save</button>
                    <?php include('include/message.php'); ?>
                </form>
                
            </div>
        </div>
    </div>



</body>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>




</html>