<?php
require_once "partials/head.php";
?>

<?php require_once "partials/navbar.php"; ?>
<?php require_once "functions.php"; ?>

<?php
$showMore = getOne($_GET['id']);
?>



<p>radii</p>
<div class="card mb-3 offset-3" style="max-width: 540px;">
    <div class="row g-0">

        <div class="col-md-4">
            <img src="images/<?php echo $showMore['image']; ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title"><?php echo $showMore['title']; ?></h2>
                <a href="">
                    <h5 class="card-title"><?php echo $showMore['author']; ?></h5>
                </a>

                <a href="">
                    <p class="card-text"><?php echo $showMore['genre'] ?></p>
                </a>
                <p class="card-text"><?php echo $showMore['price'] ?>€</p>
                <button class="btn btn-sm btn-primary">Order Now</button>
                <p><small>Free delivery for orders abbove 40 €</small></p>

            </div>
        </div>

    </div>
</div>


<?php require_once "partials/footer.php"; ?>