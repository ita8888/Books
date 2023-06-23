<?php require_once "functions.php"; ?>

<?php
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $used = $_POST['used'];
    $image = $_FILES['image']['name'];







    $sql = "INSERT INTO  books_for_sale VALUES (NULL, '$title', '$author', '$genre', '$image','$used','$price', '$id')";
    $query = mysqli_query(db(), $sql);

    if ($query) {
        header("Location: user.view.php");
    } else {
        header("Location: index.php");
    }


    $msg = "";
    if (isset($_POST['submit'])) {
        $target = "images/" . basename($_FILES['image']['name']);

        $image = $_FILES['image']['name'];


        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfuly";
        } else {
            $msg = "There was a problem loading image";
        }
    }
}
?>


