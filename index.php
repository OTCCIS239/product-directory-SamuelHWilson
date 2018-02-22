<?php
    include_once("db-interface.php");

    $cid = filter_input(INPUT_GET, "category_id");

    if($cid != null & $cid != false & $cid != 0) {
        $products = GetMany("SELECT * FROM Products WHERE category_id = :category_id", $conn, [
            ":category_id"=>$cid
        ]);
    } else {
        $products = GetMany("SELECT * FROM Products", $conn);
    }
    $categories = GetMany("SELECT * FROM Categories", $conn);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="styles.css">

        <title>Elitist Snacks - Products</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">Elitist Snacks</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Products <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div id="jumb" class="jumbotron mt-5">
                <div>
                    <h1 class="display-3 text-center">Products</h1>
                    <p class="text-center">We are passionate about snacks; here are the ones we love enough to sell.</p>
                </div>
            </div>

            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                Filter by...
                            </div>
                            <div class="card-body">
                                <p class="card-title">Categories</p>
                                <p class="pl-3"><a class="<?php if($cid == 0) echo "text-secondary"?>" href="?category_id=0">All</a></p>
                                <p class="pl-3"><a class="<?php if($cid == 1) echo "text-secondary"?>" href="?category_id=1">Salty</a></p>
                                <p class="pl-3"><a class="<?php if($cid == 2) echo "text-secondary"?>" href="?category_id=2">Sweet</a></p>
                                <p class="pl-3"><a class="<?php if($cid == 3) echo "text-secondary"?>" href="?category_id=3">Beverage</a></p>
                            </div>
                        </div>                            
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <?php foreach($products as $product): ?>
                                <div class="col-4 mb-3">
                                    <div class="card product-entry">
                                        <div class="card-body">
                                            <h2 class="card-title h4 text-primary"><?= $product["name"] ?></h5>
                                            <p class="card-text"><?= $product["description"] ?></p>
                                        </div>
                                        <div class="card-footer">
                                            <span class="badge badge-dark"><?= "$".number_format($product["price"], 2) ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-md">
                        
                    </div>
                </div>

                <hr>

            </div>
            <!-- /container -->

        </main>

        <footer class="container">
            <p>&copy; Company 2017-2018</p>
        </footer>

        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>