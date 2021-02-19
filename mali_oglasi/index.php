
<?php require_once "partials/head.php" ?>
<?php 
if(isset($_SESSION['id'])){
    header('Location: oglasi.php');
}
?>
<?php require_once "partials/navbar.php" ?>
<?php require_once "partials/footer.php" ?>
    
