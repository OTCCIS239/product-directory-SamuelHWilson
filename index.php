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
                    <div class="col-md-4">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-md-4">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-md-4">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
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