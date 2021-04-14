


<?php
 include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

include 'includes/db_connection.php';

$query = "SELECT id, firstname, lastname, religion, admision_number, class, gender, date_of_birth, home_address, school_transport, admission_date, status, parent_name, relation, parent_number, parent_profession, parent_marital_status FROM `students` ;";

$result = @mysqli_query($conn, $query);
  
 $n = 1;

 if(array_key_exists("searchStudentInfo", $_POST)){

    $firstname = $_POST['firstname']; 
    $lastname =  $_POST['lastname'];

    $query = "SELECT id, firstname, lastname, religion, admision_number, class, gender, date_of_birth, home_address, school_transport, admission_date, status, parent_name, relation, parent_number, parent_profession, parent_marital_status FROM  `students` WHERE firstname = '$firstname' || lastname= '$lastname' ;";

    $result = @mysqli_query($conn, $query);

   
   
 }
  
//  if(isset($_POST['id'])){
//     echo "<div id='alert' class='alert alert-danger insert' role='alert'> Student record is Inserted!! </div>";
//    }
 


?>




<div class="container" id="search" data-aos="fade-up" data-aos-delay="100">
    <div  >
     <form method="POST" class="searchInformation" >
     <h3 data-aos="fade-up" data-aos-delay="100">Enter required information</h3>
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
    <div class="form-row" data-aos="fade-up" data-aos-delay="10">
    <input type="submit" class="btn searchBtnS" name="searchStudentInfo" value="Search ">
</div>
 </form>
 </div>
 
 <h3 class="results">Results:</h3>
<div id="table">
        <table class="table table-striped table-light">
        <tr class="table-head">
            <th scope='col'>ID:</th>
            <th scope='col'>First name:</th>
            <th scope='col'>Last name:</th>
            <th scope='col'> Religion:</th>
            <th scope='col'>Admission Number:</th>
            <th scope='col'>Class:</th>
            <th scope='col'>Gender:</th>
            <th scope='col'>Date Of Birth:</th>
            <th scope='col'>Home Address:</th>
            <th scope='col'>School Transport:</th>
            <th scope='col'>Admission Date:</th>
            <th scope='col'>Status:</th>
            <th scope='col'>Parent Name :</th>
            <th scope='col'> Relation:</th>
            <th scope='col'> Parent Number:</th>
            <th scope='col'>Parent Profession:</th>
            <th scope='col'>Parent Marital Status:</th>
          
            <th scope='col'></th>


            <th scope='col'>ID:</th>

        </tr>

        <?php
          while($row = @mysqli_fetch_array($result))
          {
        ?>
        <tr class="<?php  if(isset($classname)) echo $classname;?>">
        <td> <?php echo $row['id']?></td>
        <td> <?php echo $row['firstname']?></td>
        <td> <?php echo $row['lastname']?></td>
        <td> <?php echo $row['religion']?></td>
        <td> <?php echo $row['admision_number']?></td>
        <td> <?php echo $row['class']?></td>
        <td> <?php echo $row['gender']?></td>
        <td> <?php echo $row['date_of_birth']?></td>
        <td> <?php echo $row['home_address']?></td>
        <td> <?php echo $row['school_transport']?></td>
        <td> <?php echo $row['admission_date']?></td>
        <td> <?php echo $row['status']?></td>
        <td> <?php echo $row['parent_name']?></td>
        <td> <?php echo $row['relation']?></td>
        <td> <?php echo $row['parent_number']?></td>
        <td> <?php echo $row['parent_profession']?></td>
        <td> <?php echo $row['parent_marital_status']?></td>
       

        <td class="updat"><a class="delete" href="deleteStudentProcess.php?id=<?php echo $row["id"]; ?>"> Delete</a></td>

        <td> <?php echo $row['id']?></td>


        </tr>
        <?php } ?>
        </table>

        <?php @mysqli_free_result($result); ?>
</div>
</div>

<?php
include 'includes/footer.php';
?>