<?php
require_once "partials/head.php";
?>

<?php require_once "partials/navbar.php"; ?>
<?php require_once "functions.php"; ?>
<?php if (!isset($_SESSION['id'])) {
    header('Location:index.php');
} ?>

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <h4 class="text-center m-3">Enter New Book</h4>
            <form action="new_book.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="title" class="form-control"><br>
                <input type="text" name="author" placeholder="author" class="form-control"><br>
                <select name="genre" aria-placeholder="genre" class="form-control">
                    <option value="Action and Adventure" class="form-control">Action and Adventure</option>
                    <option value="Classics" class="form-control">Classics</option>
                    <option value="Detective and Mystery" class="form-control">Detective and Mystery</option>
                    <option value="Fantasy" class="form-control">Fantasy</option>
                    <option value="Literary Fiction" class="form-control">Literary Fiction</option>
                    <option value="Horor" class="form-control">Horor</option>
                    <option value="Science Fiction" class="form-control">Science Fiction</option>
                </select><br>

                <input type="number" name="price" placeholder="price" class="form-control"><br>
                <select name="used" class="form-control">
                    <option value="used" class="form-control">used</option>
                    <option value="new" class="form-control">new</option>
                </select><br>

                <input type="hidden" value=100000 class="form-control"><br>
                <input type="file" name="image" class="form-control">



                <button type="submit" name="submit" class="btn btn-primary btn-sm form-control my-2">Add new book</button>
            </form>
        </div>
    </div>
</div>


<?php require_once "partials/footer.php"; ?>