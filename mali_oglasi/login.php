<?php 
require_once "function.php";
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
$query=mysqli_query(db(),$sql);
$result=mysqli_fetch_assoc($query);

if($result){
    logUser($result);
}else{
    header('Location: login.view.php');
}
?>