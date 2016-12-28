<?php

class Database{
    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "root", "havefun");

    }

    public function __destruct(){
        mysqli_close($this->conn);

    }

    public function performQuery($query){
        return $this->conn->query($query);
    }
    
    public function getRandomEvents(){
        $n = $this->getNumberOfEvents();
        $randomIndicesArray = array(rand(1,$n));
        while(count($randomIndicesArray)<4){
            $x = rand(1,$n);
            if(array_search($x,$randomIndicesArray )===FALSE)
                array_push($randomIndicesArray, $x);
        }
        return $this->performQuery("select * from event where ID = " . $randomIndicesArray[0]. " OR ID = " . $randomIndicesArray[1]. " OR ID = " . $randomIndicesArray[2]. " OR ID = " . $randomIndicesArray[3]);

    }


    private function getNumberOfEvents(){
        $result = $this->performQuery("select count(ID) from Event");
        $row = $result->fetch_assoc();
            return intval($row["count(ID)"]);
        }

    public function userExists($username){
        $query = "select * from User where Username = '" .$username ."'";
        $results = $this->performQuery($query);
        return($results->num_rows==1);
    }

    public function emailExists($email){
        $query = "select * from User where email = '" .$email ."'";
        $results = $this->performQuery($query);
        return($results->num_rows==1);
    }

    public function passwordCorrect($password){
        $query = "select * from User where Password = '" .$password ."'";
        $results = $this->performQuery($query);
        return($results->num_rows==1);
    }
    
    public function isAdmin($username){
        $query = "select isAdmin from User where Username = '" .$username ."'";
        $results = $this->performQuery($query);
        $row = $results->fetch_assoc();
        return($row[isAdmin]==true);
    }
    
    public function getEvent($id){
        $query= "select * from event where id =".$id;
        $results = $this->performQuery($query);
        return $results->fetch_assoc();
    }
    
    public function getPlace($placeID){
        $query= "select * from place where id =".$placeID;
        $results = $this->performQuery($query);
        return $results->fetch_assoc();
    }
}
