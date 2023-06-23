<?php require_once "partials/head.php";
?>

<?php require_once "partials/navbar.php"; ?>

<?php
if (isset($_SESSION['id'])) {
    $oglasi = get_all_user_ads($_SESSION['id']);
} else {
    header('Location:index.php');
}


?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="row">
                <div class="col-6 offset-3 mt-3 mb-5">
                    <a href="new_book.view.php" class="btn btn-info form-control">Upload New Book</a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">

    <div class="row">
        <?php foreach ($oglasi as $oglas) : ?>
            <div class="col-md-3  mt-4">

                <div class="card">
                    <img src="images/<?php echo $oglas['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h2 class="card-title book-title"> <?php echo $oglas['title']; ?></h2>

                        <span>writen by:</span><a href="show.author.php?aut=<?php echo $oglas['author']; ?>">
                            <h5 class="card-text book-author"> <?php echo $oglas['author']; ?> </h5>
                        </a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span>genre:</span>
                            <a href="show.genre.php?gen=<?php echo $oglas['genre']; ?>">
                                <p><?php echo $oglas['genre']; ?></p>
                            </a>
                        </li>

                    </ul>
                    <div class="card-body">
                        <a href="show.category.php?cat=<?php echo $oglas['used']; ?>" class="card-link"> <button class="btn btn-sm btn-primary "><?php echo $oglas['used']; ?></button></a>
                        <a href="#" class="card-link"><button class="btn btn-sm btn-warning float-end"><?php echo $oglas['price']; ?> €</button></a>
                    </div>



                    <form action="delete_book.php" method="POST">
                        <a class="float-start" href=">"> <button type="submit" name="delete_btn" value="<?php echo $oglas['id']; ?>" class="btn">izbriši oglas<button></a>

                    </form>



                    <a class=" float-end" href=""> Uredi oglas</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>




</div>

</div>



<?php require_once "partials/footer.php"; ?>