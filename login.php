<?php require_once 'functions.php'; ?>
<?php
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM sellers WHERE email = '$email' AND password = '$password'";

$query = mysqli_query(db(), $sql);
$result = mysqli_fetch_assoc($query);

if ($result) {
    logUser($result);
} else {
    header("Location: login.view.php");
}
?>


