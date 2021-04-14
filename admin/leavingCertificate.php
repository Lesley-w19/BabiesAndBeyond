

<?php

include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

 include 'includes/db_connection.php';

 if(array_key_exists("searchAdmNo", $_POST)){

    $adm_number = $_POST['adm_number'];

    $_query = "SELECT id, firstname, lastname, religion, admision_number, class, gender, date_of_birth, home_address, school_transport, admission_date, status, parent_name, relation, parent_number, parent_profession, parent_marital_status FROM  students WHERE admision_number LIKE '%{$adm_number}%'";

    $result = mysqli_query( $conn, $_query);
    $row = mysqli_fetch_array($result);

    echo "<div id='alert' class='alert alert-success insert' role='alert'>Certificate Generated!!</div>";
 }
 elseif(array_key_exists("print", $_POST)){
     $print = $_POST['certificateinfo'];
     $_query = "INSERT INTO `certificates` (`leaving_certificate`) VALUES ('$print');";

     mysqli_query($conn, $_query);

     echo "<div id='alert' class='alert alert-primary insert' role='alert'>Information Updated!!</div>";
 }


?>

<div class="container " id="search" data-aos="fade-up" >
    <div>
     <form method="POST"  class="searchInformation" >
     <h3 data-aos="fade-up">Information*</h3>
<div class="information">
    <div class="form-row" data-aos="fade-up">
        <div class="form-group col-md-6">
            <label for="Admission Number">Admission Number*:</label>
            <input type="text" name="adm_number" required="" id="adm_number" class="form-control"  placeholder="Enter admission number">
        </div>

  </div>
  <div class="form-row" data-aos="fade-up" style="margin-bottom:15px" >
    <input type="submit" class="btn filter" name="searchAdmNo" value="Add Information">
</div>
 </form>
 </div>

 <div id="certificate">
             
 <form method="POST" action="certificatePdf.php">
     <textarea name="text" id="text" class="container-fluid" style="height:630px">


               STUDENT LEAVING CERTIFICATE

               Student's First Name : <?php echo $row['firstname']; ?> 
               Student's Last Name : <?php echo $row['lastname']; ?>
               Date Of Birth :<?php echo $row['date_of_birth']?>
                Date Of Admission :<?php echo $row['admission_date']?> 
                 Class : <?php echo $row['class']?>
    

                 Date Of Leaving :  <?php echo date(" jS\ F Y");?>
                 Reason for Leaving : Completion of Pre-School Education
                    
                    Parent Name : <?php echo $row['parent_name']?>


                    Parent Mobile Number :  <?php echo $row['parent_number']?>
                    
                    <?php echo $row['firstname']; ?>
                          <?php echo $row['lastname']; ?>  has completed Class his/her Pre-school Education and (Student's Name) is promoted to begin his/her studies in Grade 1.
                          
                          Signature of Principal _______
                          Date __________
                          School Stamp ______________
    </textarea>
 </form>
 </div>
 
 <div id="buttonpage">
     <form method="POST">
         <div class="buttonCertificate">
             <div class="form-row" data-aos="fade-up">
                 <div class="form-group col-md-6">
                 <input type="text" name="certificateinfo" required="" id="certificateinfo" class="form-control"  value ="A leaving cerificate has been issued to  <?php echo $row['firstname']; ?>
                         ">
                 </div>
             </div>
             <div class="form-row" data-aos="fade-up">
                 <div class="form-group col-md-6">
                 <input type="submit" class="btn filter"  name="print"  value="Update Student Leaving Certificate ">
                 </div>
                 <!-- <div class="form-group col-md-6">
                 <input type="submit" class="btn filter"  id="PrintButton" onclick="PrintPage()" value="Print">
                 
                 </div> -->
             </div>
         </div>
     </form>
 </div>
                 </div>

<!-- 
<script type="text/javascript">
 const certificate = document.getElementById("certificate");

  


   function PrintPage() {
    certificate.print();
	}

const  print = document.getElementById("PrintButton");
   print.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ certificate.close() },750)
	});
  
</script> -->




 <?php
include 'includes/footer.php';
?>