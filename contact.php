
<?php

$conn = mysqli_connect("localhost","root","","babiesandbeyond");

if (!$conn)

  {

  die('Could not connect: ' . mysql_error());

  } 
 

$sql= mysqli_query($conn, "INSERT INTO `messages` (`id`, `email`, `name`, `subject`, `message`) VALUES

('', '$_POST[email]','$_POST[name]','$_POST[subject]','$_POST[message]')");

 

if (!$sql)

  {

  die('Error: ' . mysql_error());

  }

  echo "<div id='alert' class='alert alert-success insert' role='alert'> Thank you. Your feedback was received successfully!! </div>";
  

mysqli_close($conn);

?>