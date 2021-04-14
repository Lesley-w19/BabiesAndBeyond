<?php

ob_start();

include 'includes/db_connection.php';

$sql = "DELETE FROM employees WHERE id = '" . $_GET["id"] . "'";

if(!mysqli_query($conn, $sql)){
    echo "<div id='alert' class='alert alert-danger insert' role='alert'> Error deleting Student Record!! </div>";
}
else{
    header("Location: deleteEmployee.php");
}


?>