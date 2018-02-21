<?php
    include_once("db-interface.php");

    $cid = filter_input(INPUT_GET, "category_id");

    if($cid != null & $cid != false) {
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
    <nav class="navbar navbar-expand-lg sj-bg-secondary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <a class="navbar-brand" href="#"><span class="sj-invert-text px-1">Elitist</span>Snacks</a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Products</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
            </div>
            <div class="col-md-6">
                <div class="display-area my-5 p-3">
                    <h1 class="text-center">Snacks</h1>
                    <div class="category-list">
                        <p>Choose a Snack Category...</p>
                        <div class="row">
                            <div class="col">
                                <p><a <?php if($cid == null) echo 'class="active"';?> href="?">All</a></p>
                            </div>
                            <?php foreach($categories as $category): ?>
                                <div class="col">
                                    <p><a <?php if($cid == $category["id"]) echo 'class="active"';?> href="?category_id=<?= $category["id"] ?>"><?= $category["name"] ?></a></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php foreach($products as $product): ?>
                        <div class="product-entry row mt-3">
                            <div class="col-4">
                                <p><?= $product["name"] ?></p>
                                <p class="price"><?= "$".number_format($product["price"], 2) ?></p>
                            </div>
                            <div class="col">
                                <p><?= $product["description"] ?><p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>