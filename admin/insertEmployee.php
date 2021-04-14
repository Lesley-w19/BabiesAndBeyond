
<?php
 ob_start();
 include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

 include 'includes/db_connection.php';
  
 if(array_key_exists('submitEmployeeInfo', $_POST)){
       
        $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $religion = $_POST['religion'];
       $id_number = $_POST['idnum'];
        $marital_status = $_POST['mrstatus'];
       $gender =  $_POST['gender'];
       $date_of_birth =  $_POST['dob'];
       $phone_number =  $_POST['phone'];
       $country =  $_POST['country'];
       $address = $_POST['address'];
       $work =  $_POST['work'];
       $joining_date =  $_POST['joiningdate'];
       $status =  $_POST['status'];
       $next_ok_kin_name =  $_POST['name'];
      $relationship =   $_POST['relation'];
       $next_of_kin_mobile =  $_POST['mobile'];
      $next_of_kin_profession =   $_POST['profession'];
       $next_of_kin_marital_status =  $_POST['nextmrstatus'];


        $query = "INSERT INTO `employees` (`id`, `firstname`, `lastname`, `religion`, `number_ID`, `marital_status`, `gender`, `date_of_birth`, `phone_number`, `country`, `address`, `status`, `work`, `joining_date`, `next_of_kin_name`, `relation`, `mobile_number`, `profession`, `next_marital_status`) VALUES ( '', '$firstname', '$lastname', '$religion', '$id_number', '$marital_status', '$gender', '$date_of_birth', '$phone_number', '$country', '$address', '$status', '$work', '$joining_date', '$next_ok_kin_name', '$relationship', '$next_of_kin_mobile', '$next_of_kin_profession', '$next_of_kin_marital_status');";


        $run = mysqli_query($conn, $query);       
    

      if($run != TRUE){
     echo "<div id='alert' class='alert alert-danger insert' role='alert'> Employee record is not inserted!! </div>";
  
     }
       else{ 
         echo "<div id='alert' class='alert alert-success insert' role='alert'> New record created successfully!! </div>";
    }
 }

 
?>



<div class="container" data-aos="fade-up" data-aos-delay="100">
   <form method="POST" class="insertEmployee">
       <h3 data-aos="fade-up" data-aos-delay="100">Employee's Information</h3>
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
            <label for="idnumber">ID Number:</label>
            <input type="text" name="idnum" id="idnum" class="form-control" required="" placeholder="00000000">
        </div>
        <div class="form-group col-md-4">
            <label for="mrstatus">Marital Status:</label>
            <select name="mrstatus" class="form-control" required="" id="mrstatus" >
            <option selected disabled>Marital Status...</option>
            <option >Single</option>
            <option >Married</option>
            <option >Divorced</option>
            <option >Widowed</option>

            </select>
        </div>           
    </div>

    <div class="form-row" >
        <div class="form-group col-md-4">
            <label for="gender">Gender:</label>
            <select name="gender" class="form-control" required="" id="gender" >
            <option selected disabled>Gender...</option>
            <option >Male</option>
            <option >Female</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="dateofbirth">Date Of Birth:</label>
            <input type="date" name="dob" id="dob" class="form-control" required="" placeholder="YYYY-MM-DD">
        </div>
        <div class="form-group col-md-4">
            <label for="phone">Phone No:</label>
            <input type="text" name="phone" id="phone" class="form-control" required="" placeholder="Telephone No">
        </div>
    </div>
    <div class="form-row" >
        <div class="form-group col-md-6">
            <label for="country">Country:</label>
            <input type="text" name="country" id="country" required="" class="form-control" placeholder="Enter Country">
        </div>
        <div class="form-group col-md-6">
            <label for="country">Address:</label>
            <input type="text" name="address" id="address" required="" class="form-control" placeholder="Enter P.O.BOX Address">
        </div>
    </div>
    <div class="form-row" >
    <div class="form-group col-md-4">
            <label for="work">Work:</label>
            <select name="work" class="form-control" required="" id="work" >
            <option selected disabled>Work...</option>
            <option >Teacher</option>
            <option >Cook</option>
            <option >Driver</option>
            <option >Cleaner</option>

            </select>
        </div>         

    <div class="form-group col-md-4">
            <label for="country">Joining Date :</label>
            <input type="date" name="joiningdate" id="joiningdate" required="" class="form-control" placeholder="YYYY-MM-DD">
        </div>
        
        <div class="form-group col-md-4">
            <label for="status">Status:</label>
            <select name="status" class="form-control" required="" id="status" >
            <option selected disabled>Status...</option>
            <option >Active</option>
            <option >On Leave</option>
            </select>
        </div>
    </div>
</div>
 
<h3 data-aos="fade-up" data-aos-delay="100"> Next-Of-Kin Information</h3>
<div class="form-row" data-aos="fade-up">
        <div class="form-group col-md-4">
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name" class="form-control" required placeholder="Enter Full Name">
        </div>

        <div class="form-group col-md-4">
            <label for="relation">Relationship:</label>
            <select name="relation" class="form-control" required="" id="relation" >
            <option selected disabled>Relation...</option>
            <option >Husband</option>
            <option >Wife</option>
            <option >Father</option>
            <option >Mother</option>
            <option >Son</option>
            <option >Daughter</option>
            <option >Other</option>

            </select>
        </div>           
        <div class="form-group col-md-4">
            <label for="dateofbirth">Mobile No:</label>
            <input type="text" name="mobile" id="mobile" class="form-control" required="" placeholder="Mobile Number">
        </div>
</div>
<div class="form-row" data-aos="fade-up" data-aos-delay="50">
        <div class="form-group col-md-6">
            <label for="profession">Profession:</label>
            <select name="profession" class="form-control" required="" id="profession" >
            <option selected disabled>Profession...</option>
            <option >Doctor</option>
            <option >Business</option>
            <option >Nurse</option>
            <option >Accountant</option>
            <option >Social Worker</option>
            <option >Administrator</option>
            <option >Student</option>
            <option >Other</option>
            </select>
        </div>   
        <div class="form-group col-md-6">
            <label for="mrstatus">Marital Status:</label>
            <select name="nextmrstatus" class="form-control" required="" id="mrstatus" >
            <option selected disabled>Marital Status...</option>
            <option >Single</option>
            <option >Married</option>
            <option >Divorced</option>
            <option >Widowed</option>

            </select>
        </div>           
</div>
<div class="form-row" data-aos="fade-up" data-aos-delay="10">
    <input type="submit" class="btn" name="submitEmployeeInfo" value="Submit ">
</div>

   </form>
</div>



<?php
include 'includes/footer.php'
?>