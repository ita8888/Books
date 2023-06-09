<?php require_once 'functions.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO sellers VALUES(NULL,'$username', '$email','$password')";
$query = mysqli_query(db(), $sql);

if ($query) {
    header('Location:login.view.php');
} else {
    header('Location:register.view.php');
}
