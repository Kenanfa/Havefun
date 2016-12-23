<?php

class Database{
    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "12345678", "havefun");

    }

    public function __destruct(){
        mysqli_close($this->conn);

    }

    public function selectQuery($query){
        return $this->conn->query($query);
    }

    public function insertQuery($query){
        $this->conn->query($query);
    }

    public function printx()
    {
       return "It works";
        
    }
    
}
