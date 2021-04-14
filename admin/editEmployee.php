<?php
 include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

include 'includes/db_connection.php';

$query = "SELECT id, firstname, lastname, religion, number_ID, marital_status, gender, date_of_birth, phone_number, country, address, status, work, joining_date, next_of_kin_name, relation, mobile_number, profession, next_marital_status FROM `employees` ;";

$result = @mysqli_query($conn, $query);
  
 $n = 1;

 if(array_key_exists("searchEmployeeInfo", $_POST)){

    $firstname = $_POST['firstname']; 
    $lastname =  $_POST['lastname'];

    $query = "SELECT id, firstname, lastname, religion, number_ID, marital_status, gender, date_of_birth, phone_number, country, address, status, work, joining_date, next_of_kin_name, relation, mobile_number, profession, next_marital_status FROM `employees` WHERE firstname = '$firstname' || lastname= '$lastname' ;";

    $result = @mysqli_query($conn, $query);

 }
   
    
 
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
    <input type="submit" class="btn searchBtnE" name="searchEmployeeInfo" value="Search ">
</div>
 </form>
 </div>
  
 <h3 class="results">Results:</h3>
 <div id="table">
        <table class="table table-striped table-light">
        <tr>
            <th scope='col'>ID:</th>
            <th scope='col'>First name:</th>
            <th scope='col'>Last name:</th>
            <th scope='col'> Religion:</th>
            <th scope='col'>ID Number:</th>
            <th scope='col'>Marital Status:</th>
            <th scope='col'>Gender:</th>
            <th scope='col'>Date Of Birth:</th>
            <th scope='col'>Phone No:</th>
            <th scope='col'>Country:</th>
            <th scope='col'>Address:</th>
            <th scope='col'>Work:</th>
            <th scope='col'>Joining Date :</th>
            <th scope='col'>Status:</th>
            <th scope='col'>Next_Of_Kin_Full Name:</th>
            <th scope='col'>Relationship:</th>
            <th scope='col'>Next_Of_Kin_Mobile No:</th>
            <th scope='col'>Next_Of_Kin_Profession:</th>
            <th scope='col'>Next_Of_Kin_Marital Status:</th>
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
        <td> <?php echo $row['number_ID']?></td>
        <td> <?php echo $row['marital_status']?></td>
        <td> <?php echo $row['gender']?></td>
        <td> <?php echo $row['date_of_birth']?></td>
        <td> <?php echo $row['phone_number']?></td>
        <td> <?php echo $row['country']?></td>
        <td> <?php echo $row['address']?></td>
        <td> <?php echo $row['work']?></td>
        <td> <?php echo $row['joining_date']?></td>
        <td> <?php echo $row['status']?></td>
        <td> <?php echo $row['next_of_kin_name']?></td>
        <td> <?php echo $row['relation']?></td>
        <td> <?php echo $row['mobile_number']?></td>
        <td> <?php echo $row['profession']?></td>
        <td> <?php echo $row['next_marital_status']?></td>
        <td class="updat"><a class="update" href="updateEmployee.php?id=<?php echo $row["id"]; ?>"> Update</a></td>

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