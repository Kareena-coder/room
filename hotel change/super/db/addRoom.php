<?php
session_start();
$user_id= $_SESSION['user_id'];


    $title= $_POST['title'];
    $no=$_POST['no'];
    $description= $_POST['description'];
    $price= $_POST['price'];

    $file = $_FILES['image']['tmp_name'];
    $target = '../img/'.$_FILES['image']['name'];
    move_uploaded_file($file, $target);
    $location = 'img/'.$_FILES['image']['name'];

    $query = "INSERT INTO room(room_title,room_no, description, image,price) VALUES ('$title','$no','$description','$location', '$price')";
   
    include('connect.php');
    if (mysqli_query($conn, $query)) {
        $msg = "Data inserted";
        header('Location:../addRoom.php?msg='.$msg);
    }
    else {
        $msg = "Some error occured :".mysqli_error($conn);
        header('Location:../addRoom.php?msg='.$msg);
    }

?>