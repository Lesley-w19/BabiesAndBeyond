<?php

include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

 include 'includes/db_connection.php';

 if(array_key_exists("searchAdmNo", $_POST)){

    $adm_number = $_POST['adm_number'];

    $_query = "SELECT firstname, lastname, admision_number, class FROM  students WHERE admision_number LIKE '%{$adm_number}%'";

    $result = mysqli_query( $conn, $_query);
    $row = mysqli_fetch_array($result);

    echo "<div id='alert' class='alert alert-success insert' role='alert'>Information Generated!!</div>";
 }
 elseif(array_key_exists("submitResultInfo", $_POST)){
         
       $class = $_POST['class'];
       $term =$_POST['term'];
       $firstname = $_POST['firstname'];
       $lastname = $_POST['last-name'];
    $admission = $_POST['adm_number'];
    $Mths = $_POST['mths'];
    $drawing =$_POST['draw'];
    $read = $_POST['read'];
    $spell = $_POST['spell'];
    $general =$_POST['general'];
    $total = $_POST['total'];
    $remarks = $_POST['remarks'];

     $_query = "INSERT INTO `results` (`id`, `class`, `term`, `firstname`, `lastname`,  `admission_number`,  `maths`, `drawing`, `reading`, `spelling`, `general`, `total`,  `remarks`) VALUES ('', '$class', '$term', '$firstname', '$lastname', '$admission', '$Mths', '$drawing', '$read', '$spell', '$general', '$total', '$remarks');";

    $run = mysqli_query($conn, $_query);

    if($run != TRUE){
        echo "<div id='alert' class='alert alert-danger insert' role='alert'>Exam records not inserted!!</div>";
    }
    else{
        echo "<div id='alert' class='alert alert-primary insert' role='alert'>Exam records inserted!!</div>";
    }
    
 }


?>



<div class="container" data-aos="fade-up" data-aos-delay="100" style="text-align:center">


<div>
     <form method="POST"  class="searchInformation" >
     <h3 data-aos="fade-up">Information*</h3>
<div class="information">
    <div class="form-row" data-aos="fade-up">
        <div class="form-group col-md-6">
            <label for="Admission Number">Admission Number*:</label>
            <input type="text" name="adm_number" required="" id="adm_number" class="form-control"  placeholder="Enter admission number" >
        </div>

  </div>
  <div class="form-row" data-aos="fade-up" style="margin-bottom:15px" >
    <input type="submit" class="btn filter" name="searchAdmNo" value="Add Information">
</div>
 </form>
 </div>


   <form method="POST" class="insertEmployee">
       <h3 data-aos="fade-up" data-aos-delay="100">Exam Results</h3>
       
       <div class="information">
    <div class="form-row" data-aos="fade-up" data-aos-delay="100">
        <div class="form-group col-md-6">
        <label for="class">Class:</label>
        <input type="text" name="class" id="class" class="form-control" value="<?php echo $row['class']; ?> " placeholder="Enter Class"  > 
        </div>
        <div class="form-group col-md-6">
            <label for="term">Term:</label>
            <input type="text" name="term" id="term" class="form-control"  placeholder="Enter Term and Year">
        </div>
    </div>

    <div class="form-row ">
    <div class="form-group col-md-4">
    <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $row['firstname']; ?> " placeholder="Enter Firstname"  required="" > 
        </div>

        <div class="form-group col-md-4">
        <label for="lastname">Last Name:</label>
            <input type="text" name="last-name" id="lastname" class="form-control" value="<?php echo $row['lastname']; ?>" placeholder="Enter Lastname"  required="">
        </div>

       <div class="form-group col-md-4">
        <label for="adm_number">Student Admission Number:</label>
            <input type="text" name="adm_number" id="adm_number" class="form-control" value="<?php echo $row['admision_number']?>" placeholder="Enter Student Admission Number"  required="">
        </div>
    </div>

   <div class="form-row">
  
         <div class="form-group col-md-4">
         <label for="math">Maths:</label>
            <input type="text" name="mths" id="lastname" class="form-control"  placeholder="Enter Mark" required="">
        </div>
        <div class="form-group col-md-4">
        <label for="gk">Drawing & Coloring:</label>
            <input type="text" name="draw" id="lastname" class="form-control"  placeholder="Enter Mark" required="">
            </select>
        </div>
        <div class="form-group col-md-4">
        <label for="gk">Reading & Writing:</label>
            <input type="text" name="read" id="lastname" class="form-control"  placeholder="Enter Mark" required="">
        </div>
</div>

    <div class="form-row" >
      
        <div class="form-group col-md-5">
        <label for="gk">Spelling & Dictation:</label>
            <input type="text" name="spell" id="lastname" class="form-control"  placeholder="Enter Mark" required="">
        </div>
        <div class="form-group col-md-5">
            <label for="gk">General Knowledge:</label>
            <input type="text" name="general" id="lastname" class="form-control"  placeholder="Enter Mark" required="">
        </div>
        <div class="form-group col-md-2">
            <label for="total" style ="color:#e92264; font-weight:bold;">Total Marks:</label>
            <input type="text" name="total" id="total" class="form-control"  placeholder="Total Marks" required="">
        </div>

</div>

<div class="form-row">

    <label for="total">Remarks:</label>
    <textarea name="remarks" id="remarks" cols="30" rows="10" class="form-control">
    Enter remarks on students performance here....
    </textarea>
</div>
   
<div class="form-row" data-aos="fade-up">
    <input type="submit" class="btn" name="submitResultInfo" value="Submit ">
</div>

   </form>
</div>




<?php
include 'includes/footer.php';
?>