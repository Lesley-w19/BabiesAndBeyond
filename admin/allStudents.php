<?php

include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

 include 'includes/db_connection.php';

$count = "0";

$count1 = "0";
$count2 = "0";
$count3 = "0";


$query1 = "SELECT admision_number FROM students;";
$result1 = mysqli_query($conn, $query1);
while($row1 = mysqli_fetch_assoc($result1)){
  $count1++;
}

$query2 = "SELECT admision_number FROM students WHERE status = 'Active';"; 
$result2 = mysqli_query($conn, $query2);
while($row2 = mysqli_fetch_assoc($result2)){
  $count2++;
}
$query3 = "SELECT admision_number FROM students WHERE status = 'Un-Active';";
$result3 = mysqli_query($conn, $query3);
while($row3 = mysqli_fetch_assoc($result3)){
  $count3++;
}


if(array_key_exists("searchStudent", $_POST)){

    $firstname = $_POST['firstname']; 
     $lastname =  $_POST['lastname'];
     $gender = $_POST['gender'];
    $class = $_POST['class'];


     $query = "SELECT id, firstname, lastname, religion, admision_number, class, gender, date_of_birth, home_address, school_transport, admission_date, status, parent_name, relation, parent_number, parent_profession, parent_marital_status FROM  students WHERE firstname = '$firstname' || lastname= '$lastname' || class = '$class' && gender = '$gender' ORDER BY class asc";

     $result = mysqli_query($conn, $query);
} 
else{
    $query = "SELECT id, firstname, lastname, religion, admision_number, class, gender, date_of_birth, home_address, school_transport, admission_date, status, parent_name, relation, parent_number, parent_profession, parent_marital_status FROM  students ORDER BY class asc";

    $result = mysqli_query($conn, $query);
}

?>

<style>
.nav-link1 .nav-link{
  text-transform:uppercase;
  font-weight:bold;
}
</style>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Students</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            This week
          </button>
        </div>
      </div>

      <!-- ======= overview Section ======= -->

 <!-- ======= overview Section ======= -->
 <section id="services" class="services overview">
      <div class="container allAbout" id="services">
        <div class="row">
        <div class="col-lg-12 col-md-12 icon-box" data-aos="fade-up" >
           <div class="icon">
          <i class="fa fa-users" aria-hidden="true"></i></div>
            <h4 class="title"><a href="#">Students</a></h4>
            <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, dolorum quo unde aperiam nulla quia architecto. Fugiat rem debitis rerum.</p>

            <ul class="nav flex-column homeLink nav-link1" >
          <li class="nav-item">
            <a class="nav-link " href="allStudents.php">
            Total Students    -- <?php echo $count1; ?>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="activeStudent.php">
          Total Active Students -- <?php echo $count2; ?>
            </a>
          </li>
        
         

          <li class="nav-item">
            <a class="nav-link" href=" unactiveStudent.php">
             Total Un-Active Students -- <?php echo $count3; ?>
            </a>
          </li>
        </ul>

          </div>
        </div>
      </div>
    </section><!-- End overview Section -->

<div class="container " id="search" data-aos="fade-up" >
    <div>
     <form method="POST" action="allStudents.php" class="searchInformation" >
     <h3 data-aos="fade-up">Filter</h3>
<div class="information">
    <div class="form-row" data-aos="fade-up">
        <div class="form-group col-md-6">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" required="" id="firstname" class="form-control"  placeholder="Enter First Name">
        </div>

        <div class="form-group col-md-6">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" required="" id="lastname" class="form-control"  placeholder="Enter Last Name">
        </div>

    </div>

  <div class="form-row m-auto">

         <div class="form-group col-md-6">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" class="form-control">
   <option selected disabled>Gender...</option>
   <option >Male</option>
   <option >Female</option>
            </select>
        </div>

  <div class="form-group col-md-6">
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

    <div class="form-row" data-aos="fade-up" >
    <input type="submit" class="btn filter" name="searchStudent" value="Filter ">
</div>
 </form>
 </div>
 
 <h3 class="results allResults">All Students Information:</h3>
<div id="table">
        <table class="table table-striped table-light">
        <tr>
            <th scope='col'>ID:</th>
            <th scope='col'>Admission Number:</th>
            <th scope='col'>First name:</th>
            <th scope='col'>Last name:</th>
            <th scope='col'> Religion:</th>
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
          
           
        </tr>

        <?php
          while($row = @mysqli_fetch_array($result))
          {
              $count ++;
        ?>
        <tr class="<?php  if(isset($classname)) echo $classname;?>">
        <td> <?php echo $row['id']?></td>
       <td> <?php echo $row['admision_number']?></td>
        <td><a  class="name-link" href="individualStudentRecord.php?id=<?php echo $row["id"]; ?>"><?php echo $row['firstname']?></a></td>
        <td> <a class="name-link"  href="individualStudentRecord.php?id=<?php echo $row["id"]; ?>"><?php echo $row['lastname']?></a></td>
        <td> <?php echo $row['religion']?></td>
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
       

        </tr>
        <?php } ?>

        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-dark progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Total  Students - <?php echo $count; ?>
          </div>
        </div>

        </table>

        <?php @mysqli_free_result($result); ?>
</div>

<div class="row btnAll">
    <a href="allStudents.php" class="go-to-page">  
<i class="fa fa-users" aria-hidden="true"></i>  All Students </a>
</div>

</div>


<?php
include 'includes/footer.php';
?>