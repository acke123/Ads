<?php 
require_once "function.php";
if (isset($_SESSION['id'])) {  //Da korisnik ne ulazi preko URL
    include "oglasi.view.php";
}else{
    header('Location:index.php');
}
?>