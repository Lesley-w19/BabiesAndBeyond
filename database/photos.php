<?php
 
//  use class to fetch photo data----

class Photo{

    public $db = null;
 public function __construct(DBController $db){

    // db is a type of db_connection class

    // create a public injection constructor

    if(!isset($db->conn)) return null;

    $this->db = $db;
 }

//  fetch photo data using getData Method
public function getPhoto($table = 'photos'){
    $resultPhoto = $this->db->conn->query("SELECT * FROM ($table)");

    $resultArray = array();

    // fetch photo data one by one

    while($item = mysqli_fetch_array($resultPhoto, MYSQLI_ASSOC)){

        $resultArray[] = $item;
    }
    return $resultArray;
}



}

?>