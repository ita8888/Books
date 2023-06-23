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
function getAll()
{

    $sql = "SELECT books_for_sale.id,books_for_sale.title,books_for_sale.author,books_for_sale.genre,books_for_sale.image,books_for_sale.used,books_for_sale.price,books_for_sale.seller_id,sellers.username FROM books_for_sale INNER JOIN sellers ON books_for_sale.seller_id = sellers.id";

    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}
function get_all_user_ads($id)
{
    // $sql = "SELECT * ,users.name FROM oglas INNER JOIN users ON oglas.user_id = users.id WHERE oglas.user_id = '$id'";
    $sql = "SELECT * ,sellers.username FROM books_for_sale INNER JOIN sellers ON books_for_sale.seller_id = sellers.id WHERE books_for_sale.seller_id = '$id'";


    //$sql = "SELECT * ,sellers.username FROM sellers INNER JOIN books_for_sale ON books_for_sale.seller_id = sellers.id WHERE books_for_sale.seller_id = '$id'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}

function getOne($id)
{
    $sql = "SELECT * , sellers.username FROM books_for_sale INNER JOIN sellers ON books_for_sale.seller_id = sellers.id WHERE books_for_sale.id = '$id'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_assoc($query);
    return $result;
}
function getCategory($cat)
{

    $sql = "SELECT * , sellers.username FROM books_for_sale INNER JOIN sellers ON books_for_sale.seller_id = sellers.id WHERE books_for_sale.used = '$cat'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}
function getGenre($gen)
{
    $sql = "SELECT * , sellers.username FROM books_for_sale INNER JOIN sellers ON books_for_sale.seller_id = sellers.id WHERE books_for_sale.genre = '$gen'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}

function getAuthor($aut)
{
    $sql = "SELECT * , sellers.username FROM books_for_sale INNER JOIN sellers ON books_for_sale.seller_id = sellers.id WHERE books_for_sale.author = '$aut'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}
// function findId($id)
// {
//     $sql = "SELECT * ,id FROM books_for_sale WHERE id= $id ";
//     $query = mysqli_query(db(), $sql);
//     $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
//     return $result;
// }
// function deleteBook($id)
// {
//     $sql = "DELETE FROM books_for_sale WHERE id = (SELECT * FROM books_for_sale WHERE id = $id)";
//     $query = mysqli_query(db(), $sql);
//     $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
//     return $result;
// }
