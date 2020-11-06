<?php
        ob_start();
        session_start();
        date_default_timezone_set("Asia/Kolkata");
        include "dbc.php";
        if(isset($_POST['register']))
      {
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $token=md5($email.time()); 
        $email=mysqli_real_escape_string($conn,$email);
        $username=mysqli_real_escape_string($conn,$username);
        $password=mysqli_real_escape_string($conn,$password);
        
 
 
        $email=htmlentities($email);
        $username=htmlentities($username);
        $password=htmlentities($password);
        

 
        $password = password_hash($password,PASSWORD_BCRYPT);
        
 
        $sql1="SELECT * FROM user WHERE email='$email' OR username='$username'";
        $res1=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($res1)>0){
        
            header("Location:login.php");
            $_SESSION['message']="<h6 style='color: red;'>Account Already Exist. Please Login To Continue</h6>";
        }
        else{
         $sql="INSERT INTO user(username,email,password,token) VALUES('$username','$email','$password','$token')";
         $res= mysqli_query($conn,$sql);
         if($res){
             
                header("Location:login.php");
                $_SESSION['message']="<h6 style='color: green;'>Registration Success. Login To Continue</h6>";
         }
         else
         {
          header("Location:register.php");
          $_SESSION['message']="<h6 style='color: red;'>Something Went Wrong.Please Signup Again</h6>";
         }
     }
       
           
       
     }
     else{
      header("Location:login.php");
  }
  
   ?>