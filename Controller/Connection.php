<?php

class Connection
{
    private $servername;
    private $username;
    private $password;
    private $db;
    public $conn;
    function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->db = "reco";
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
}

