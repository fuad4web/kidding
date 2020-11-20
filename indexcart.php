<?php
    session_start();
    require_once ("DBName/createDB.php");
    require_once ('simplePHP/components.php');

    // create instance of createDB class
    // Cartdb is name of Database while Carttb is the name of our table
    $database = new createDB("Cartdb", "Carttb");

    if(isset($_POST['add'])) {
        /* to get id(number) of each product
        print_r($_POST['product_id']);  */

        if(isset($_SESSION['cart'])) {
            $item_array_id = array_column($_SESSION['cart'], "product_id");
           // print_r($item_array_id);
            //print_r($_SESSION['cart']);

            if(in_array($_POST['product_id'], $item_array_id)) {
                echo "<script> alert('Product is already added in the cart...?') </script>";
                echo "<script>window.location='indexcart.php'</script>";
            } else {
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
                $_SESSION['cart'][$count] = $item_array;
                //print_r($_SESSION['cart']);
            }

        } else {
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            // createing new session variables
            $_SESSION['cart'][0] = $item_array;
            //print_r($_SESSION['cart']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- FontAwesoome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Bootsrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php require_once('simplePHP/header.php'); ?>
<div class="container">
    <div class="row text-center py-5">
        <?php 
        // this is use to show the products in the webpage
        $result = $database -> getValues();
        while($row = mysqli_fetch_assoc($result)) {
            components1($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
        }
            
       /*
       components1("Product 1", 599, "upload/lastWord.jpg", 699.99);
       components1("Product 2", 199, "upload/quran.jpg", 399.99);
       components1("Product 1", 119, "upload/jumat.jpg", 319.99);
       components1("Product 1", 999, "upload/proud.jpg", 1139.99);
       */
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>