
<?php


$error = "";
if(array_key_exists("submit", $_POST)){

include "db_connection.php";


    if(!$_POST['email']){
        $error .= "<div class='alert alert-danger' role='alert'> Please enter your email address <br></div>"; 
    }
    if(!$_POST['password']){
        $error .= "<div class='alert alert-danger' role='alert'> Please enter your password <br></div>";
    }
    // if($error != ""){
    //     $error = "here are no errors";
    // }
    else{
        $query = "SELECT * FROM users WHERE email = '" .mysqli_real_escape_string($conn, $_POST['email'])."'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);

        if(@$row['email'] != $_POST['email']){
            $error = "<div class='alert alert-danger' role='alert'>The Email you entered does not exist!</div>";
        }

        if(isset($row)){
            if($row['password'] == $_POST['password']){
                header("Location: admin/home.php");
            }
            else{
                $error = "<div class='alert alert-danger' role='alert'>Password entered is incorrect!</div>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babies and Beyond | Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="assets/css/custom.css">

</head>
<body>
    <section class="login">
    <div class="container login-form">
    
    <form method ="POST" >
          <h2 class="title">
              LOGIN
          </h2>
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp" required placeholder= "Enter your email">
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" name= "password" class="form-control" id="Password" required placeholder="Enter your password">
  </div>
  <button type="submit" name= "submit" value="submit" class="btn btn-primary loginbtn">Submit</button>
    <div class="error">
        <div class="home"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> 
             Home</a></div>
    <?php
    
      if($error){
          echo '<div class = "alert alert-danger error" role="alert"> '.$error.'</div>';
      }
    
    
    ?>
    
    </div>
</form>
    
    </div>
</section>
    


























<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>