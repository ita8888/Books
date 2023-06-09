<?php
require_once "partials/head.php";
?>

<?php require_once "partials/navbar.php"; ?> 
<?php require_once "functions.php"; ?>
<?php if (isset($_SESSION['id'])) {
    header('Location:books.php');
} ?>



<?php require_once "partials/footer.php"; ?>