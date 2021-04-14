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

if(array_key_exists("updateEmployeeInfo", $_POST)){

    $firstname = $_POST['firstname']; 
    $lastname =  $_POST['lastname'];
    $religion =     $_POST['religion'];
    $id_number =     $_POST['idnum'];
    $marital_status =     $_POST['mrstatus'];
    $gender =     $_POST['gender'];
    $date_of_birth =     $_POST['dob'];
    $phone_number =     $_POST['phone'];
    $country =     $_POST['country'];
    $address =     $_POST['address'];
    $work =     $_POST['work'];
    $joining_date =     $_POST['joiningdate'];
    $status =     $_POST['status'];
    $kin_name =     $_POST['name'];
    $kin_relationship =     $_POST['relation'];
    $kin_mobile =     $_POST['mobile'];
    $kin_profession =     $_POST['profession'];
    $kin_marital_status =     $_POST['nextmrstatus'];

    // to update to the database
    $query = " UPDATE employees SET firstname = '$firstname', lastname = '$lastname', religion = '$religion', number_ID = '$id_number', marital_status = '$marital_status', gender = '$gender', date_of_birth = '$date_of_birth', phone_number = '$phone_number', country = '$country', address = '$address', status = '$status', work = '$work', joining_date = '$joining_date', next_of_kin_name = '$kin_name', relation = '$kin_relationship', mobile_number = '$kin_mobile', profession = '$kin_profession', next_marital_status = '$kin_marital_status' WHERE id LIKE '%{$id}%';";

    $run = mysqli_query($conn, $query);

    if($run != TRUE){
        echo "<div id='alert' class='alert alert-danger insert' role='alert'> Employee information is not Updated!! </div>";
     
        }
          else{ 
            echo "<div id='alert' class='alert alert-success insert' role='alert'> Employee information Updated successfully!! </div>";
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
            <input type="text" name="firstname" id="firstname" value="<?php echo $row['firstname']?> " class="form-control" required="" placeholder="Enter First Name">
        </div>

        <div class="form-group col-md-6">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" value=" <?php echo $row['lastname']?> " class="form-control" required="" placeholder="Enter Last Name">
        </div>
       
    </div>

    <div class="form-row" >
        <div class="form-group col-md-4">
            <label for="religion">Religion:</label>
            <select name="religion" class="form-control" required="" id="religion" >
            <option selected><?php echo $row['religion']?></option>
            <option disabled>Religion...</option>
            <option >Christian</option>
            <option >Islam</option>
            <option >Hindu</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="idnumber">ID Number:</label>
            <input type="text" name="idnum" id="idnum" value="<?php echo $row['number_ID']?> " class="form-control" required="" placeholder="00000000">
        </div>
        <div class="form-group col-md-4">
            <label for="mrstatus">Marital Status:</label>
            <select name="mrstatus"  class="form-control" required="" id="mrstatus" >
            <option selected> <?php echo $row['marital_status']?></option>
            <option disabled>Marital Status...</option>
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
            <option selected><?php echo $row['gender']?></option>
            <option disabled>Gender...</option>
            <option >Male</option>
            <option >Female</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="dateofbirth">Date Of Birth:</label>
            <input type="date" name="dob" id="dob" value=" <?php echo $row['date_of_birth']?>" class="form-control" required="" placeholder="YYYY-MM-DD">
        </div>
        <div class="form-group col-md-4">
            <label for="phone">Phone No:</label>
            <input type="text" name="phone" id="phone" value="<?php echo $row['phone_number']?> " class="form-control" required="" placeholder="Telephone No">
        </div>
    </div>
    <div class="form-row" >
        <div class="form-group col-md-6">
            <label for="country">Country:</label>
            <input type="text" name="country" id="country" required="" value=" <?php echo $row['country']?> " class="form-control" placeholder="Enter Country">
        </div>
        <div class="form-group col-md-6">
            <label for="country">Address:</label>
            <input type="text" name="address" id="address" required="" value="<?php echo $row['address']?> " class="form-control" placeholder="Enter P.O.BOX Address">
        </div>
    </div>
    <div class="form-row" >
    <div class="form-group col-md-4">
            <label for="work">Work:</label>
            <select name="work" class="form-control" required="" id="work" >
            <option selected><?php echo $row['work']?></option>
            <option disabled>Work...</option>
            <option >Teacher</option>
            <option >Cook</option>
            <option >Driver</option>
            <option >Cleaner</option>

            </select>
        </div>         

    <div class="form-group col-md-4">
            <label for="country">Joining Date :</label>
            <input type="date" name="joiningdate" id="joiningdate" required="" value="<?php echo $row['joining_date']?> " class="form-control" placeholder="YYYY-MM-DD">
        </div>
        
        <div class="form-group col-md-4">
            <label for="status">Status:</label>
            <select name="status" class="form-control" required="" id="status" >
            <option selected><?php echo $row['status']?></option>
            <option disabled>Status...</option>
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
            <input type="text" name="name" id="name" value="<?php echo $row['next_of_kin_name']?>" class="form-control" required placeholder="Enter Full Name">
        </div>

        <div class="form-group col-md-4">
            <label for="relation">Relationship:</label>
            <select name="relation" class="form-control" required="" id="relation" >
            <option selected><?php echo $row['relation']?></option>
            <option disabled>Relation...</option>
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
            <input type="text" name="mobile" id="mobile" value="<?php echo $row['mobile_number']?>" class="form-control" required="" placeholder="Mobile Number">
        </div>
</div>
<div class="form-row" data-aos="fade-up" data-aos-delay="50">
        <div class="form-group col-md-6">
            <label for="profession">Profession:</label>
            <select name="profession" class="form-control" required="" id="profession" >
            <option selected><?php echo $row['profession']?></option>
            <option disabled>Profession...</option>
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
            <label for="mrstatus">Marital Status:</label>
            <select name="nextmrstatus"  class="form-control" required="" id="mrstatus" >
            <option selected> <?php echo $row['next_marital_status']?></option>
            <option >Marital Status...</option>
            <option disabled>Single</option>
            <option >Married</option>
            <option >Divorced</option>
            <option >Widowed</option>

            </select>
        </div>           
</div>
<div class="form-row" data-aos="fade-up" data-aos-delay="10">
    <input type="submit" class="btn" name="updateEmployeeInfo" value="Update ">
</div>

   </form>
</div>

<div class="row btnAll" data-aos="fade-up">
    <a href="editEmployee.php" class="go-to-page"  >  
<i class="fa fa-arrow-left" aria-hidden="true"></i> Back To Page</a>
</div>

<?php
include 'includes/footer.php'
?>