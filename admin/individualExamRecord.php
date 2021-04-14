<?php

include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

include 'includes/db_connection.php';


$id = $_GET['id'];
$sql = "SELECT * FROM results WHERE id = '" . $_GET["id"] . "'";

if($result = mysqli_query($conn, $sql)){

    $row = @mysqli_fetch_array($result);
}
else{
    echo "Something went wrong!!";
}


?>



<div class="container displayInfo" data-aos="fade-up" data-aos-delay="100">
    <h3>Individual Exam Record</h3>
<div class="displayinfor">
 <div class="row" data-aos="fade-up">
 <div class="col-md-4"> 
            <h4 class="sTitle">Admission Number:</h4>
        <p class="sInfo"><?php echo $row['admission_number']?></p>
    </div>
        <div class="col-md-4"> 
            <h4 class="sTitle">First Name:</h4>
        <p class="sInfo"><?php echo $row['firstname']?></p>
    </div>
    <div class="col-md-4"> 
            <h4 class="sTitle">Last Name:</h4>
        <p class="sInfo"><?php echo $row['lastname']?></p>
    </div>
   

    </div>
    
    <div class="row" data-aos="fade-up">
       
    <div class="col-md-6"> 
            <h4 class="sTitle">Class:</h4>
        <p class="sInfo"><?php echo $row['class']?></p>
    </div>
     <div class="col-md-6"> 
            <h4 class="sTitle">Term:</h4>
        <p class="sInfo"><?php echo $row['term']?></p>
    </div>
       
    </div>

    <div class="row" data-aos="fade-up">
       
     <div class="col-md-4"> 
            <h4 class="sTitle">Maths:</h4>
        <p class="sInfo"><?php echo $row['maths']?></p>
    </div>
     <div class="col-md-4"> 
            <h4 class="sTitle">Drawing & Coloring:</h4>
        <p class="sInfo"><?php echo $row['drawing']?></p>
    </div>
  
        <div class="col-md-4"> 
            <h4 class="sTitle">Reading & Writng:</h4>
        <p class="sInfo"><?php echo $row['reading']?></p>
    </div>
    </div>

    <div class="row" data-aos="fade-up">
       
    <div class="col-md-6"> 
            <h4 class="sTitle">Spelling & Dictation:</h4>
        <p class="sInfo"><?php echo $row['spelling']?></p>
    </div>
     <div class="col-md-6"> 
            <h4 class="sTitle">General Knowledge:</h4>
        <p class="sInfo"><?php echo $row['general']?></p>
    </div>
   
    </div>

    <div class="row" data-aos="fade-up">
        <div class="col-md-6"> 
            <h4 class="sTitle">Total Marks:</h4>
        <p class="sInfo"><?php echo $row['total']?></p>
    </div>
      <div class="col-md-6"> 
            <h4 class="sTitle">Remarks:</h4>
        <p class="sInfo"><?php echo $row['remarks']?></p>
    </div>
    
    </div>

   
</div>
 <a href="examsResults.php" class="go-to-page">  
<i class="fa fa-hand-o-left" aria-hidden="true"></i>  Back to Page </a>
    
</div>






<?php
include 'includes/footer.php'
?>