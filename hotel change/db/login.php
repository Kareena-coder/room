<?php



  include('connect.php');
  if(isset($_POST['loginsubmit'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

      if($email==''){
          $msg = "email is required";
          header('Location:../login.php?errmsg='+$msg);
      }
      if($password==''){
          $msg = "password is required";
          header('Location:../login.php?errmsg='+$msg);
      }
    $encryptedPass = md5($password);  
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$encryptedPass'";
    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);
    
    $row = mysqli_num_rows($result);
    
    if($data['user_type']=="normal"){
        if($row==1){
            
            session_start();
            $_SESSION['login']=1;
            $_SESSION['user_id']= $data['id'];

            header('Location:../home.php');
        }else{
            header('Location:../login.php?errmsg=email and password does not match');
        }
    }
    elseif($data['user_type']=="super"){
        if($row==1){
            $data = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['login']=1;
            $_SESSION['user_id']= $data['id'];

            header('Location:../super/home.php');
        }else{
            header('Location:../login.php?errmsg=email and password does not match');
        }
    }
    else{
        echo $row['user_type'];
    }

  }

?>