<?php require_once 'functions.php';
if (isset($_SESSION['id'])) {
    include "books.view.php";
} else {
    header('Location:index.php');
}
