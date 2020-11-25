<?php session_start();
require_once('dbconnection.php');

//Code for Registration 
if(isset($_POST['submit']))
{
	$fname=$_POST['full-name'];
    $email=$_POST['email'];
    $username=$_POST['userName'];
    $password=$_POST['password'];
    // echo $username;
    // echo $fname;
    // echo $email;
    // echo $password;
	
	// $enc_password=$password;
	$msg=mysqli_query($conn,"insert into user(name,email,username,password) values('$fname','$email','$username','$password')");
if($msg == 1)
{
    echo "<script>alert('Register successfully');</script>";
    header("location:");
}
else{
    echo "<script>alert('unRegister successfully');</script> ";
}
}

// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($conn,"SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="welcome.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//header("location:http://$host$uri/$extra");
exit();
}
}

//Code for Forgot Password

if(isset($_POST['send']))
{
$femail=$_POST['femail'];

$row1=mysqli_query($con,"select email,password from users where email='$femail'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$email = $row2['email'];
$subject = "Information about your password";
$password=$row2['password'];
$message = "Your password is ".$password;
mail($email, $subject, $message, "From: $email");
echo  "<script>alert('Your Password has been sent Successfully');</script>";
}
else
{
echo "<script>alert('Email not register with us');</script>";	
}
}

?>