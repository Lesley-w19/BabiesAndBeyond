<?php

include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

include 'includes/db_connection.php';


$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = '" . $_GET["id"] . "'";

if($result = mysqli_query($conn, $sql)){

    $row = @mysqli_fetch_array($result);
}
else{
    echo "Something went wrong!!";
}


?>



<div class="container displayInfo" data-aos="fade-up" data-aos-delay="100">
    <h3>Student Information</h3>
<div class="displayinfor">
 <div class="row" data-aos="fade-up">
        <div class="col-md-4"> 
            <h4 class="sTitle">First Name:</h4>
        <p class="sInfo"><?php echo $row['firstname']?></p>
    </div>
    <div class="col-md-4"> 
            <h4 class="sTitle">Last Name:</h4>
        <p class="sInfo"><?php echo $row['lastname']?></p>
    </div>
     <div class="col-md-4"> 
            <h4 class="sTitle">Religion:</h4>
        <p class="sInfo"><?php echo $row['religion']?></p>
    </div>

    </div>
    
    <div class="row" data-aos="fade-up">
       
    <div class="col-md-4"> 
            <h4 class="sTitle">Admission Number:</h4>
        <p class="sInfo"><?php echo $row['admision_number']?></p>
    </div>
     <div class="col-md-4"> 
            <h4 class="sTitle">Gender:</h4>
        <p class="sInfo"><?php echo $row['gender']?></p>
    </div>
    <div class="col-md-4"> 
            <h4 class="sTitle">Date Of Birth:</h4>
        <p class="sInfo"><?php echo $row['date_of_birth']?></p>
    </div>
       
    </div>

    <div class="row" data-aos="fade-up">
       
     <div class="col-md-4"> 
            <h4 class="sTitle">Home Address:</h4>
        <p class="sInfo"><?php echo $row['home_address']?></p>
    </div>
     <div class="col-md-4"> 
            <h4 class="sTitle">School Transport:</h4>
        <p class="sInfo"><?php echo $row['school_transport']?></p>
    </div>
  
        <div class="col-md-4"> 
            <h4 class="sTitle">Admission Date:</h4>
        <p class="sInfo"><?php echo $row['admission_date']?></p>
    </div>
    </div>

    <div class="row" data-aos="fade-up">
       
    <div class="col-md-4"> 
            <h4 class="sTitle">Status:</h4>
        <p class="sInfo"><?php echo $row['status']?></p>
    </div>
     <div class="col-md-4"> 
            <h4 class="sTitle">Parent Name:</h4>
        <p class="sInfo"><?php echo $row['parent_name']?></p>
    </div>
    <div class="col-md-4"> 
            <h4 class="sTitle">Relationship:</h4>
        <p class="sInfo"><?php echo $row['relation']?></p>
    </div>
    </div>

    <div class="row" data-aos="fade-up">
       
      <div class="col-md-4"> 
            <h4 class="sTitle">Parent Mobile Number:</h4>
        <p class="sInfo"><?php echo $row['parent_number']?></p>
    </div>
     <div class="col-md-4"> 
            <h4 class="sTitle">Parent Profession:</h4>
        <p class="sInfo"><?php echo $row['parent_profession']?></p>
    </div>
     <div class="col-md-4"> 
            <h4 class="sTitle">Parent Marital Staus:</h4>
        <p class="sInfo"><?php echo $row['parent_marital_status']?></p>
    </div>
    </div>

   
</div>
 <a href="allStudents.php" class="go-to-page">  
<i class="fa fa-hand-o-left" aria-hidden="true"></i>  Back to Page </a>
    
</div>






<?php
include 'includes/footer.php'
?>