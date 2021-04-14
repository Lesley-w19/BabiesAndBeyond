<?php
 
//  require the database class
 require "database/DBController.php";
 require "database/photos.php";


//  DBController object
$db = new DBController();

// Photo object
$photo = new Photo($db);
// ----------this is the dependency injection-----------

?>