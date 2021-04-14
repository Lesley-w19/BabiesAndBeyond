
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

if(array_key_exists("updateStudentInfo", $_POST)){
   
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

  
    // to update to the database
    $query = " UPDATE results SET  class = '$class', term = '$term', firstname = '$firstname', lastname = '$lastname', admission_number = '$admission', maths = '$Mths', drawing = '$drawing', reading = '$read', spelling = '$spell', general = '$general', total = '$total', remarks = '$remarks' WHERE id LIKE '%{$id}%';";

    $run = mysqli_query($conn, $query);

    if($run != TRUE){
        echo "<div id='alert' class='alert alert-danger insert' role='alert'> Exam Record is not Updated!! </div>";
     
        }
          else{ 
            echo "<div id='alert' class='alert alert-success insert' role='alert'> Exam Record Updated successfully!! </div>";
       }

    

}

?>





<div class="container" data-aos="fade-up" data-aos-delay="100" style="text-align:center">

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
            <input type="text" name="term" id="term" class="form-control" value="<?php echo $row['term']; ?>" placeholder="Enter Term and Year">
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
            <input type="text" name="adm_number" id="adm_number" class="form-control" value="<?php echo $row['admission_number']?>" placeholder="Enter Student Admission Number"  required="">
        </div>
    </div>

   <div class="form-row">
  
         <div class="form-group col-md-4">
         <label for="math">Maths:</label>
            <input type="text" name="mths" id="lastname" class="form-control" value="<?php echo $row['maths']; ?>" placeholder="Enter Mark" required="">
        </div>
        <div class="form-group col-md-4">
        <label for="gk">Drawing & Coloring:</label>
            <input type="text" name="draw" id="lastname" class="form-control" value="<?php echo $row['drawing']; ?>" placeholder="Enter Mark" required="">
            </select>
        </div>
        <div class="form-group col-md-4">
        <label for="gk">Reading & Writing:</label>
            <input type="text" name="read" id="lastname" class="form-control" value="<?php echo $row['reading']; ?>" placeholder="Enter Mark" required="">
        </div>
</div>

    <div class="form-row" >
      
        <div class="form-group col-md-5">
        <label for="gk">Spelling & Dictation:</label>
            <input type="text" name="spell" id="lastname" class="form-control" value="<?php echo $row['spelling']; ?>" placeholder="Enter Mark" required="">
        </div>
        <div class="form-group col-md-5">
            <label for="gk">General Knowledge:</label>
            <input type="text" name="general" id="lastname" class="form-control" value="<?php echo $row['general']; ?>" placeholder="Enter Mark" required="">
        </div>
        <div class="form-group col-md-2">
            <label for="total" style ="color:#e92264; font-weight:bold;">Total Marks:</label>
            <input type="text" name="total" id="total" class="form-control" value="<?php echo $row['total']; ?>" placeholder="Total Marks" required="">
        </div>

</div>

<div class="form-row">

    <label for="total">Remarks:</label>
    <textarea name="remarks" id="remarks" cols="30" rows="10" class="form-control">
    <?php echo $row['remarks']; ?>
    </textarea>
</div>
   
<div class="form-row" data-aos="fade-up">
    <input type="submit" class="btn" name="updateResultInfo" value="Submit ">
</div>

   </form>
</div>

<div class="btnAll btn1 col-md-6" data-aos="fade-up">
    <a href="examsResults.php" class="go-to-page btn-d1">  
<i class="fa fa-users" aria-hidden="true"></i>  All Exam Records </a>
          </div>
   


<?php
include 'includes/footer.php';
?>
   <style>
       .btn1{
        margin-bottom:2rem;

       }
     .btn-d1{
      padding: .5rem 5rem;
background:#3dc2ac;
     }
     .btn-d1:hover{
       background: #77cabe;
color:#fff;
     }

     </style>