<?php
require_once("../Controller/Connection.php");
class Product
{
    public $cat;
    private $conn;

    function __construct()
    {
        $this->cat = 'product';
        $this->conn = new Connection();
        $this->conn = $this->conn->conn;
    }

    function list(){
        return $this->conn->query("SELECT * FROM " . $this->cat);
    }

    function detail($id){
        return $this->conn->query("SELECT * FROM " . $this->cat . " WHERE " . $this->cat . "_id=" . $id)->fetch_assoc();
    }

    function insert($name, $brand){
        $this->conn->query("INSERT INTO " . $this->cat . "(product_name, brand_id) VALUES ('" . $name . "', " . $brand . ")");
    }
}