<nav class="navbar fixed-top navbar-expand-md p-3">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="index.php">BOOKSTORE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex" role="search">
                <input class="form-control ms-5 me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
            <?php
            if (isset($_SESSION['id'])) {
                require_once "partials/navbar-logged.php";
            } else {
                require_once "partials/navbar-login.php";
            }
            ?>



        </div>
    </div>
</nav>