<?php
      ob_start();
      session_start();
      include "dbc.php";
     if(isset($_POST['login']))
     {
       $username=$_POST['username'];
       $password=$_POST['password'];
       $rememberme=$_POST['rememberme'];

       
       $username=mysqli_real_escape_string($conn,$username);
       $password=mysqli_real_escape_string($conn,$password);
       $rememberme=mysqli_real_escape_string($conn,$rememberme);


       $username=htmlentities($username);
       $password=htmlentities($password);
       $rememberme=htmlentities($rememberme);
        
       $sql="SELECT password FROM user WHERE username='$username'";
       $res=mysqli_query($conn,$sql);
       $row=mysqli_fetch_assoc($res);
       $pass=$row['password'];

       if(password_verify($password,$pass))
       {
           setcookie('usernamecookie',$username,time()+86400);
           setcookie('passwordcookie',$password,time()+86400);
           $_SESSION['username']=$username;
           header("Location: ../../index.php");
       }
       else
       {
           header("Location: login.php");
           $_SESSION['message']=" <h6 style='color: red;'>Sorry Credentials Don't Match</h6>";
       }
    }else{
        header("Location:login.php");
    }
    
    ?>