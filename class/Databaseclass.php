<?php
    class Database{
        protected $connection;
        function connect(){
        try{
            $this->connection = new PDO("mysql:host=localhost;dbname=db_products","root","");
        }
        catch(PDOException $error){
            echo "Bat Ayaw Mo?!!!" . $error->getMessage();
        }
        return $this->connection;
        }
    }
?>
