
<?php
 ob_start();
 include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

 include 'includes/db_connection.php';
  
 if(array_key_exists('submitStudentInfo', $_POST)){
       
   
    $firstname = $_POST['firstname']; 
     $lastname =  $_POST['lastname'];
     $religion =  $_POST['religion'];
     $adm_number =  $_POST['admnum'];
     $class = $_POST['class'];
     $gender = $_POST['gender'];
     $date_of_birth = $_POST['dob'];
     $home_address = $_POST['address'];
     $school_transport = $_POST['transport'];
     $joining_date = $_POST['joiningdate'];
     $status = $_POST['status'];

     $parent_name = $_POST['fname'];
     $parent_relationship = $_POST['relation'];
     $parent_mobile = $_POST['fmobile'];
     $parent_profession =   $_POST['fprofession'];
     $parent_marital_status = $_POST['fmrstatus'];

   


    

     $query ="INSERT INTO `students` (`id`,  `firstname`, `lastname`,`religion`, `admision_number`, `class`,  `gender`,  `date_of_birth`,  `home_address`, `school_transport`,  `admission_date`, `status`,  `parent_name`, `relation`, `parent_number`,`parent_profession`,  `parent_marital_status`) VALUES ('','$firstname', ' $lastname', ' $religion', '  $adm_number', ' $class', '$gender', ' $date_of_birth', '  $home_address', '  $school_transport', '$joining_date', ' $status','$parent_name','$parent_relationship',   '$parent_mobile', ' $parent_profession',' $parent_marital_status');";
         
         
     

        $run = mysqli_query($conn, $query);
    

        if($run != TRUE){
     echo "<div id='alert' class='alert alert-danger insert' role='alert'> Student record is not inserted!! </div>";
    
    }
      else{
        echo "<div id='alert' class='alert alert-success insert' role='alert'> New record created successfully!! </div>";
    } 

 }
    
 
?>



<div class="container" data-aos="fade-up" data-aos-delay="100">
   <form method="POST" class="insertEmployee">
       <h3 data-aos="fade-up" data-aos-delay="100">Student's Information</h3>
<div class="information">
    <div class="form-row" data-aos="fade-up" data-aos-delay="100">
        <div class="form-group col-md-6">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" class="form-control" required="" placeholder="Enter First Name">
        </div>

        <div class="form-group col-md-6">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" class="form-control" required="" placeholder="Enter Last Name">
        </div>
       
    </div>

    <div class="form-row" >
        <div class="form-group col-md-4">
            <label for="religion">Religion:</label>
            <select name="religion" class="form-control" required="" id="religion" >
            <option selected disabled>Religion...</option>
            <option >Christian</option>
            <option >Islam</option>
            <option >Hindu</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="admnumber">Admission Number:</label>
            <input type="text" name="admnum" id="admnum" class="form-control" required="" placeholder="00000000">
        </div>
         <div class="form-group col-md-4">
            <label for="class">Class:</label>
            <select name="class" class="form-control" required="" id="class" >
            <option selected disabled>Class...</option>
            <option >Play Group</option>
            <option >PP1</option>
            <option >PP2</option>
            <option >PP3</option>
</select>
    </div>
</div>
    <div class="form-row" >
        <div class="form-group col-md-6">
            <label for="gender">Gender:</label>
            <select name="gender" class="form-control" required="" id="gender" >
            <option selected disabled>Gender...</option>
            <option >Male</option>
            <option >Female</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="dateofbirth">Date Of Birth:</label>
            <input type="date" name="dob" id="dob" class="form-control" required="" placeholder="YYYY-MM-DD">
        </div>
</div>
   
    <div class="form-row" >
        <div class="form-group col-md-6">
            <label for="country">Home Address:</label>
            <input type="text" name="address" id="address" required="" class="form-control" placeholder="Enter P.O.BOX Address">
        </div>
        <div class="form-group col-md-6">
            <label for="transport">School transport:</label>
            <select name="transport" class="form-control" required="" id="transport" >
            <option selected disabled>Transport...</option>
            <option >With transport</option>
            <option >Without transport</option>
            </select>
        </div>
    </div>
    <div class="form-row" >
    <div class="form-group col-md-6">
            <label for="country">Joining Date :</label>
            <input type="date" name="joiningdate" id="joiningdate" required="" class="form-control" placeholder="YYYY-MM-DD">
        </div>
        
        <div class="form-group col-md-6">
            <label for="status">Status:</label>
            <select name="status" class="form-control" required="" id="status" >
            <option selected disabled>Status...</option>
            <option >Active</option>
            <option >Un-Active</option>
            </select>
        </div>
    </div>
</div>
 
<!-- father/mother information -->
<h3 data-aos="fade-up" > Parent Information</h3>
<div class="form-row" data-aos="fade-up">
        <div class="form-group col-md-4">
            <label for="fname">Full Name:</label>
            <input type="text" name="fname" id="fname" class="form-control"  placeholder="Enter Full Name">
        </div>

        <div class="form-group col-md-4">
            <label for="relation">Relationship:</label>
            <select name="relation" class="form-control" id="relation" >
            <option selected disabled>Relation...</option>
            <option >Father</option>
            <option >Mother</option>
            <option >Guardian</option>
            </select>
        </div>           
        <div class="form-group col-md-4">
            <label for="fmobile">Mobile No:</label>
            <input type="text" name="fmobile" id="fmobile" class="form-control"  placeholder="Mobile Number">
        </div>
</div>
<div class="form-row" data-aos="fade-up" >
        <div class="form-group col-md-6">
            <label for="fprofession">Profession:</label>
            <select name="fprofession" class="form-control" id="fprofession" >
            <option selected disabled>Profession...</option>
            <option >Doctor</option>
            <option >Nurse</option>
            <option >Accountant</option>
            <option >Social Worker</option>
            <option >Administrator</option>
            <option >Student</option>
            <option >Other</option>
            </select>
        </div>   
        <div class="form-group col-md-6">
            <label for="fmrstatus">Marital Status:</label>
            <select name="fmrstatus" class="form-control" id="fmrstatus" >
            <option selected disabled>Marital Status...</option>
            <option >Single</option>
            <option >Married</option>
            <option >Divorced</option>
            <option >Widowed</option>

            </select>
        </div>           
</div>

 
<div class="form-row" data-aos="fade-up">
    <input type="submit" class="btn" name="submitStudentInfo" value="Submit ">
</div>

   </form>
</div>



<?php
include 'includes/footer.php'
?>