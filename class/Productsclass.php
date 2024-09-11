<?php
    require_once "Databaseclass.php";

    class Products{
        private $conn;

        function __construct()
        {
            $db = new Database;
            $this->conn = $db->connect();
        }
        function getData(){
            $sql = "SELECT * FROM products";
            $query=$this->conn->prepare($sql);
            if($query->execute()){
                $data=$query->fetchAll();
            }
            return $data;
        }
    }
?>