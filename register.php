<?php 

session_start();
header('localion:login.php');


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'database');

$name=$_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];
$tel=$_POST['tel'];

$s="select * from users where email='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 1){
    echo "Username Already Taken";
}
else
{
    $req="insert into users(username,password,email,tel) values ('$name','$pass','$email','$tel') ";
    mysqli_query($con,$req);
    echo "registration succesful";
    header('localion:login.php');
}


 ?>