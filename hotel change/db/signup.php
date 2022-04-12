<?php 
  include('connect.php');
   if(isset($_POST['submit'])){
       $name = $_POST['fullName'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $user_type = $_POST['user_type'];

     if($name==''){
         $msg = "name is required";
         header('Location:../signup.php?errmsg='.$msg);
     }        
     if($email==''){
         $msg = "email is required";
         header('Location:../signup.php?errmsg='.$msg);
     }

     if($password==''){
         $msg = "passowrd is required";
         header('Location:../signup.php?errmsg='.$msg);
     }
     if($user_type==''){
        $msg = "user_type is required";
        header('Location:../signup.php?errmsg='.$msg);
     }
     $encryptedPassword = md5($password);
     $query = "INSERT INTO users(email,fullName,password , user_type) VALUES('$email','$name','$encryptedPassword','$user_type')";
     if(mysqli_query($conn,$query)){
         $msg = "Signup successfully";
         header('Location:../login.php?msg='.$msg);
     }else{
         $msg = "Error: ".mysqli_error($conn);
         header("Location:../signup.php?errmsg=".$msg);
     }
   }else{
       $msg = "data is not acceptable";
       header("Location:../signup.php?errmsg=".$msg);
   }
?>