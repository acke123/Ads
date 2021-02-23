<?php 
require_once "config.php";
session_start();
function db()
{
    $con=mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die ("error");
    return $con;
}
function dd($val)
{
    echo "<pre>";
    die(var_dump($val)); // lepsi format kada zelimo da testiramo i vidimo varijablu
    "</pre>";
}
function logUser($user)
{
    session_start();
    $_SESSION['id']=$user['id'];
    $_SESSION['name']=$user['name'];// umesto login da pise ime korisnika
    header('Location:oglasi.php');
}
function getAll()
{
$sql="SELECT oglas.id,oglas.user_id,oglas.title,oglas.category,oglas.price,oglas.text,users.name FROM oglas INNER JOIN users ON oglas.user_id=users.id";
$query=mysqli_query(db(),$sql);
$result=mysqli_fetch_all($query,MYSQLI_ASSOC);

return $result;
}
function get_all_users_ads($id)
{
$sql="SELECT *,users.name FROM oglas INNER JOIN users ON oglas.user_id=users.id WHERE oglas.user_id='$id'";

$query=mysqli_query(db(),$sql);
$result=mysqli_fetch_all($query,MYSQLI_ASSOC);
return $result;
}
function getOne($id)
{
    $sql="SELECT *,users.name FROM oglas INNER JOIN users ON oglas.user_id=users.id WHERE oglas.id='$id'";

$query=mysqli_query(db(),$sql);
$result=mysqli_fetch_assoc($query);
return $result;
}
function getCategory($cat)
{
    $sql="SELECT *,users.name FROM oglas INNER JOIN users ON oglas.user_id=users.id WHERE oglas.category = '$cat'";

$query=mysqli_query(db(),$sql);
$result=mysqli_fetch_all($query,MYSQLI_ASSOC);

return $result;
}
function getAllFromUser($name){
    $sql="SELECT *,users.name FROM oglas INNER JOIN users ON oglas.user_id=users.id WHERE users.name = '$name'";

$query=mysqli_query(db(),$sql);
$result=mysqli_fetch_all($query,MYSQLI_ASSOC);

return $result;
}

?>