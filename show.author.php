<?php
require_once "partials/head.php";
?>

<?php require_once "partials/navbar.php"; ?>
<?php require_once "functions.php"; ?>

<?php
$books = getAuthor($_GET['aut']);


?>
<?php require_once "partials/footer.php"; ?>


<div class="container adds-container">
    <div class="row">

        <div class="col-lg-10 text-center">
            <h1> All Books from this author</h1>


        </div>
    </div>
</div>




<div class="container">

    <div class="row">
        <?php foreach ($books as $book) : ?>
            <div class="col-md-3  mt-4">

                <div class="card">
                    <img src="images/<?php echo $book['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h2 class="card-title book-title"> <?php echo $book['title']; ?></h2>

                        <span>writen by:</span><a href="">
                            <h5 class="card-text book-author"> <?php echo $book['author']; ?> </h5>
                        </a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span>genre:</span>
                            <a href="show.genre.php?gen=<?php echo $book['genre']; ?>">
                                <p><?php echo $book['genre']; ?></p>
                            </a>
                        </li>

                    </ul>
                    <div class="card-body">
                        <a href="show.category.php?cat=<?php echo $book['used']; ?>" class="card-link"> <button class="btn btn-sm btn-primary "><?php echo $book['used']; ?></button></a>
                        <a href="#" class="card-link"><button class="btn btn-sm btn-warning float-end"><?php echo $book['price']; ?> €</button></a>
                    </div>
                    <a class="btn btn-light btn-sm" href="show_more.php?id=<?php echo $book['id']; ?>"> Vidi oglas</a>
                </div>

            </div>



        <?php endforeach; ?>
    </div>

</div>