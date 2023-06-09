<?php
require_once "partials/head.php";
?>
<?php require_once "partials/navbar.php"; ?>

<div class="container register-container">
    <div class="row">
        <div class="col-5 offset-3">
            <form action="register.php" method="POST">
                <input type="text" name="username" placeholder="username" class="form-control"><br>
                <input type="email" name="email" placeholder="email" class="form-control"><br>
                <input type="password" name="password" placeholder="password" class="form-control"><br>
                <button type="submit" class="btn register-btn form-control">Register</button>
            </form>
        </div>
    </div>
</div>



<?php require_once "partials/footer.php"; ?>