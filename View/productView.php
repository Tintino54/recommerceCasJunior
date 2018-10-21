<?php
require_once("../Model/Product.php");
require_once("../Model/Brand.php");
require_once 'index.php';

function displayList() {
    $product = new Product();
    $values = $product->list();
    echo "<h1>Super liste des product</h1>";
    echo "<ul>";
    foreach ($values as $item){
        echo "<li><a href='productView.php?mode=detail&id=" . $item['product_id'] . "'>" . $item['product_id'] . "   " . $item['product_name'] . "</a></li>";
    }
    echo "</ul>";
}

function displayDetails($id) {
    $product = new Product();
    $value = $product->detail($id);

    $brand = new Brand();

    echo "<h1>Super detail sur la product</h1>";
    $brandValue = $brand->detail($value['brand_id']);
    echo "L'objet d'id " . $value['product_id'] . " de nom " . $value['product_name'] . " et de marque " . $brandValue['brand_name'];
}

function displayCreerUnProduit() {
    echo "<br><a href='productView.php?mode=creation'>Créer un produit</a>";
}

function displayCreation() {
    $brand = new Brand();
    $options = $brand->list();

    echo "<form action='../Controller/productController.php'>";
    echo "Nom produit : <input type='text' name='name'/><br>";
    echo "Brand produit : <select name='brand'>";
    foreach($options as $option) {
        echo "<option value='" . $option['brand_id'] . "'>" . $option['brand_name'] . "</option>";
    }
    echo "</select><br>";
    echo "<input type='submit' value='Créer produit'>";
    echo "</form>";

};

displayCreerUnProduit();
if(isset($_GET['mode'])) {
    if($_GET['mode']=="list"){
        displayList();
    } else if($_GET['mode']=="detail"){
        displayDetails($_GET['id']);
    } else if($_GET['mode']=="creation"){
        displayCreation();
    }
}

