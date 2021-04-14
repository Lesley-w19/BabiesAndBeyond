<?php

include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

include 'includes/db_connection.php';


$id = $_GET['id'];
$sql = "SELECT * FROM employees WHERE id = '" . $_GET["id"] . "'";

if($result = mysqli_query($conn, $sql)){

    $row = @mysqli_fetch_array($result);
}
else{
    echo "Something went wrong!!";
}


?>



<div class="container displayInfo" data-aos="fade-up" data-aos-delay="100">
    <h3>Employee Information</h3>
<div class="display-infor">
 <div class="row" data-aos="fade-up">
        <div class="col-md-4"> 
            <h4 class="eTitle">First Name:</h4>
        <p class="eInfo"><?php echo $row['firstname']?></p>
    </div>
    <div class="col-md-4"> 
            <h4 class="eTitle">Last Name:</h4>
        <p class="eInfo"><?php echo $row['lastname']?></p>
    </div>
     <div class="col-md-4"> 
            <h4 class="eTitle">Religion:</h4>
        <p class="eInfo"><?php echo $row['religion']?></p>
    </div>

    </div>
    
    <div class="row" data-aos="fade-up">
       
    <div class="col-md-4"> 
            <h4 class="sTitle">ID Number:</h4>
        <p class="sInfo"><?php echo $row['number_ID']?></p>
    </div>
    
        <div class="col-md-4"> 
            <h4 class="eTitle">Marital Status:</h4>
        <p class="eInfo"> <?php echo $row['marital_status']?></p>
    </div>
    <div class="col-md-4"> 
            <h4 class="eTitle">Gender:</h4>
        <p class="eInfo"><?php echo $row['gender']?></p>
    </div>
    </div>

    <div class="row" data-aos="fade-up">
        <div class="col-md-4"> 
            <h4 class="eTitle">Date Of Birth:</h4>
        <p class="eInfo"> <?php echo $row['date_of_birth']?></p>
    </div>
    <div class="col-md-4"> 
            <h4 class="eTitle">Phone No:</h4>
        <p class="eInfo"><?php echo $row['phone_number']?></p>
    </div>
     <div class="col-md-4"> 
            <h4 class="eTitle">Country:</h4>
        <p class="eInfo"><?php echo $row['country']?></p>
    </div>
    </div>

    <div class="row" data-aos="fade-up">
       
    <div class="col-md-4"> 
            <h4 class="eTitle">Address:</h4>
        <p class="eInfo"><?php echo $row['address']?></p>
    </div>
  
        <div class="col-md-4"> 
            <h4 class="eTitle">Work:</h4>
        <p class="eInfo"><?php echo $row['work']?></p>
    </div>
    <div class="col-md-4"> 
            <h4 class="eTitle">Joining Date :</h4>
        <p class="eInfo"><?php echo $row['joining_date']?></p>
    </div>
    </div>

    <div class="row" data-aos="fade-up">
        <div class="col-md-4"> 
            <h4 class="eTitle">Status:</h4>
        <p class="eInfo"><?php echo $row['status']?></p>
    </div>
    <div class="col-md-4"> 
            <h4 class="eTitle">Next Of Kin Name:</h4>
        <p class="eInfo"><?php echo $row['next_of_kin_name']?></p>
    </div>
      <div class="col-md-4"> 
            <h4 class="eTitle">Relationship:</h4>
        <p class="eInfo"><?php echo $row['relation']?></p>
    </div>
    </div>

    <div class="row" data-aos="fade-up">
      
    <div class="col-md-4"> 
            <h4 class="eTitle">Mobile Number:</h4>
        <p class="eInfo"><?php echo $row['mobile_number']?></p>
    </div>
     <div class="col-md-4"> 
            <h4 class="eTitle">Profession:</h4>
        <p class="eInfo"><?php echo $row['profession']?></p>
    </div>
    <div class="col-md-4"> 
            <h4 class="eTitle">Marital Status:</h4>
        <p class="eInfo"><?php echo $row['next_marital_status']?></p>
    </div>
    
    </div>
</div>
 <a href="allEmployees.php" class="go-to-page">  
<i class="fa fa-hand-o-left" aria-hidden="true"></i>  Back to Page </a>
    
</div>






<?php
include 'includes/footer.php'
?>