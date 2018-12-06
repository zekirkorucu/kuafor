<?php 

session_start();



$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'database');

$name=$_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];
$tel=$_POST['tel'];

$s="select * from users where username='$name' && password='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 1){

    $_SESSION['username']=$name;
    $_SESSION['email']=$email;
    $_SESSION['tel']=$tel;
    header('location:home.php');
}

else
{
    header('location:register.php');  
}


 ?>