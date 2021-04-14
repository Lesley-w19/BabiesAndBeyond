
<?php

include 'includes/header.php';
include "includes/navbar.php";
include "includes/menubar.php";

include 'includes/db_connection.php';

 $count = "0";

 $query = "SELECT id, firstname, lastname,  number_ID, marital_status, gender, phone_number,  address,  work,  next_of_kin_name, mobile_number FROM `employees` WHERE status = 'Active'";

 $result = @mysqli_query($conn, $query);

?>



<div class="container" id="activepg" data-aos="fade-up" data-aos-delay="100">  
 <h3 class="results">Active Employees</h3>
 <div id="table">
        <table class="table table-striped table-light">
        <tr>
            <th scope='col'>ID:</th>
            <th scope='col'>First name:</th>
            <th scope='col'>Last name:</th>
            <th scope='col'>ID Number:</th>
            <th scope='col'>Marital Status:</th>
            <th scope='col'>Gender:</th>
            <th scope='col'>Phone No:</th>
            <th scope='col'>Address:</th>
            <th scope='col'>Work:</th>
            <th scope='col'>Next_Of_Kin_Full Name:</th>
            <th scope='col'>Next_Of_Kin_Mobile No:</th>
        </tr>

        <?php
          while($row = @mysqli_fetch_array($result))
          {
            $count ++;
        ?>
        <tr class="<?php  if(isset($classname)) echo $classname;?>">
        <td> <?php echo $row['id']?></td>
        <td> <?php echo $row['firstname']?></td>
        <td> <?php echo $row['lastname']?></td>
        <td> <?php echo $row['number_ID']?></td>
        <td> <?php echo $row['marital_status']?></td>
        <td> <?php echo $row['gender']?></td>
        <td> <?php echo $row['phone_number']?></td>
        <td> <?php echo $row['address']?></td>
        <td> <?php echo $row['work']?></td>
        <td> <?php echo $row['next_of_kin_name']?></td>
        <td> <?php echo $row['mobile_number']?></td>

        <td class="updat"><a class="update" href="updateEmployee.php?id=<?php echo $row["id"]; ?>"> Update</a></td>


        </tr>
        <?php } ?>

        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-dark progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Total Active Employees - <?php echo $count; ?>
          </div>
        </div>
        </table>

        <?php @mysqli_free_result($result); ?>
</div>

<a href="allEmployees.php" class="go-to-page">  
<i class="fa fa-hand-o-left" aria-hidden="true"></i>  All Employees </a>

</div>

<?php
include 'includes/footer.php';
?>