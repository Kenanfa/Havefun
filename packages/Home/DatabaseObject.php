<?php
/**
 * Created by PhpStorm.
 * User: thena_000
 * Date: 12/22/2016
 * Time: 6:26 PM
 */
class DatabaseObject{

    private function establishFunction()
    {
        $conn = new mysqli("localhost", "root", "12345678", "havefun");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);

        }
    }

    public function performQuery($query){

    }

    
}