<nav class="navbar navbar-expand navbar-light bg-light">
<a href="index.php" class="navbar-brand">Mali oglasi</a>
<ul class="navbar-nav ms-auto"></ul>
<?php 
if(isset($_SESSION['id'])){
    require_once "partials/navbar-logged.php";
}else{
    require_once "partials/navbar-login.php";
}
?>
</ul>
</nav>