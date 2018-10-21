<?php
require_once("../Controller/Connection.php");
class Brand
{

    public $cat;
    private $conn;

    function __construct()
    {
        $this->cat = 'brand';
        $this->conn = new Connection();
        $this->conn = $this->conn->conn;
    }

    function list(){
        return $this->conn->query("SELECT * FROM " . $this->cat);
    }

    function detail($id){
        return $this->conn->query("SELECT * FROM " . $this->cat . " WHERE " . $this->cat . "_id=" . $id)->fetch_assoc();
    }
}