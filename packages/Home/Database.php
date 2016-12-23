<?php
/**
 * Created by PhpStorm.
 * User: thena_000
 * Date: 12/22/2016
 * Time: 6:26 PM
 */
class Database{
    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "12345678", "havefun");

        if ( $this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);

        }
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

    
}
