<?php
    require_once("../Model/Product.php");

    var_dump($_GET);
    if (isset($_GET['name']) && isset($_GET['brand'])) {
        $product = new Product();
        $product->insert($_GET['name'], $_GET['brand']);
    }
    header('Location: http://localhost/recommerceCasJunior/View/productView.php?mode=list');