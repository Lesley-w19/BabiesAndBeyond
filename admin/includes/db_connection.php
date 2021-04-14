<?php
  
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $conn = mysqli_connect($db_host, $db_user, $db_password);

  if(mysqli_connect_error()){
      die("Couldn't connect to the database. Try again!");
  }
  else{
      mysqli_select_db($conn, 'babiesandbeyond');
  }








?>