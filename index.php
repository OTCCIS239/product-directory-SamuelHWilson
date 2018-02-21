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
    
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>