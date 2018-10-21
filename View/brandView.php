<?php
require_once("../Model/Brand.php");
require_once 'index.php';

    function displayList() {
        $brand = new Brand();
        $values = $brand->list();
        echo "<h1>Super liste des brand</h1>";
        echo "<ul>";
        foreach ($values as $item){
            echo "<li><a href='brandView.php?mode=detail&id=" . $item['brand_id'] . "'>" . $item['brand_id'] . "   " . $item['brand_name'] . "</a></li>";
        }
        echo "</ul>";
    }

    function displayDetails($id) {
        $brand = new Brand();
        $value = $brand->detail($id);
        echo "<h1>Super detail sur la brand</h1>";
        echo "L'objet d'id " . $value['brand_id'] . " de nom " . $value['brand_name'];
    }

    if($_GET['mode']=="list"){
        displayList();
    } else if($_GET['mode']=="detail"){
        displayDetails($_GET['id']);
    }

