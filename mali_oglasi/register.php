<?php 
require_once "function.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO users VALUE (NULL,'$name','$email','$password')";
$query=mysqli_query(db(),$sql);

if($query){
    header('Location: login.view.php'); 
}else{
    header('Location: register.view.php');
}

?>