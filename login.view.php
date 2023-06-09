<?php
require_once "partials/head.php";
?>
<?php require_once "partials/navbar.php"; ?>
<?php require_once "functions.php"; ?>

<div class="container login-container">
    <div class="row">
        <div class="col-5 offset-3">
            <form action="login.php" method="POST">
                <input type="email" name="email" placeholder="email" class="form-control"><br>
                <input type="password" name="password" placeholder="password" class="form-control"><br>
                <button type="submit" class="btn login-btn form-control">Login</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "partials/footer.php"; ?>