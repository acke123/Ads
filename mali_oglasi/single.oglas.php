<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>
<?php 
$oglas=getOne($_GET['id']); ?>
<div class="container">
<div class="row">
<h3 class="display-4 text-center"><?php echo $oglas['title'] ?></h3>
<div class="row">
<div class="col-6 offset-3">
<div class="card mb-2 mt-2">
<div class="card-header">
<a href="" class="btn btn-secondary btn-sm"><?php echo $oglas['category']; ?></a>
</div>
<div class="card-body text-center">
<h5> <?php echo $oglas['title']; ?></h5>
<p><?php echo $oglas['text']; ?></p>
</div>
<div class="card-footer">
<a href="" class="btn btn-warning btn-sm float-start"><?php echo $oglas['name']; ?></a>
<a href="" class="btn btn-danger btn-sm float-end"><?php echo $oglas['price']; ?></a>
</div>
</div>
</div>
</div>

</div>
</div>
<?php require_once "partials/footer.php" ?>