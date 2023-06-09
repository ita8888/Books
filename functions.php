<?php require_once 'config.php';
session_start();

function db()
{
    $con = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die('Error');
    return $con;
}

function dd($val)
{
    echo "<pre>";
    die(var_dump($val));
    echo "</pre>";
}
function logUser($user)
{
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header('Location:books.php');
}
