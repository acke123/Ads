<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<form action="register.php" method="post">
<input type="text" name="name" placeholder="name" class="form-control"></br>
<input type="email" name="email" placeholder="email" class="form-control"></br>
<input type="password" name="password" placeholder="Password" class="form-control"></br>
<button type="submit" class="form-control btn btn-info">Register</button>
</form>
</div>
</div>
</div>
<?php require_once "partials/footer.php" ?>
    