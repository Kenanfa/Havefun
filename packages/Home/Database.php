<?php

class Database{
    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "root", "havefun");

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

    public function getRandomEvents(){
        $n = $this->getNumberOfEvents();
        $randomIndicesArray = array(rand(1,$n));
        while(count($randomIndicesArray)<4){
            $x = rand(1,$n);
            if(array_search($x,$randomIndicesArray )===FALSE)
                array_push($randomIndicesArray, $x);
            }
        return $this->selectQuery("select * from event where ID = " . $randomIndicesArray[0]. " OR ID = " . $randomIndicesArray[1]. " OR ID = " . $randomIndicesArray[2]. " OR ID = " . $randomIndicesArray[3]);

        }


    private function getNumberOfEvents(){
        $result = $this->selectQuery("select count(ID) from Event");
        $row = $result->fetch_assoc();
            return intval($row["count(ID)"]);
        }

    public function userExists($username){
        $query = "select * from User where Username = '" .$username ."'";
        $results = $this->selectQuery($query);
        return($results->num_rows==1);
    }

    public function passwordCorrect($password){
        $query = "select * from User where Password = '" .$password ."'";
        $results = $this->selectQuery($query);
        return($results->num_rows==1);
    }
    
    public function isAdmin($username){
        $query = "select Type from User where Username = '" .$username ."'";
        $results = $this->selectQuery($query);
        $row = $results->fetch_assoc();
        return($row[Type]==1);
        

    
    }


}
