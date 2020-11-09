<?php
ob_start();
session_start();
include "dbc.php";
if(isset($_SESSION['username']))
{
    unset($_SESSION['username']);
    session_destroy();
    setcookie('usernamecookie','',time()-86400);
    setcookie('passwordcookie','',time()-86400);
   
    header("Location: login.php");
}
else{
    $_SESSION['message']="Something Went Wrong";
    header("Location: login.php");
}

?>