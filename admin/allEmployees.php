<?php
 include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

include 'includes/db_connection.php';

$count = "0";


$count1 = "0";
$count2 = "0";
$count3 = "0";


$query1 = " SELECT number_ID FROM employees; ";
$result1 = mysqli_query($conn, $query1);
while($row1 = mysqli_fetch_assoc($result1)){
  $count1++;
}
$query2 = " SELECT number_ID FROM employees WHERE status = 'Active'; ";
$result2 = mysqli_query($conn, $query2);
while($row2= mysqli_fetch_assoc($result2)){
  $count2++;
}

$query3 = " SELECT number_ID FROM employees WHERE status = 'On Leave'; ";
$result3 = mysqli_query($conn, $query3);
while($row3 = mysqli_fetch_assoc($result3)){
  $count3++;
}



 if(array_key_exists("searchEmployee", $_POST)){

    $firstname = $_POST['firstname']; 
    $lastname =  $_POST['lastname'];
    $gender =  $_POST['gender'];
    $work = $_POST['work'];


    $query = "SELECT id, firstname, lastname, religion, number_ID, marital_status, gender, date_of_birth, phone_number, country, address, status, work, joining_date, next_of_kin_name, relation, mobile_number, profession, next_marital_status FROM employees WHERE firstname = '$firstname' || lastname= '$lastname' || work = '$work'  || gender = '$gender'  ORDER BY work asc ";

    $result = @mysqli_query($conn, $query);
 }

 else{

    $query = "SELECT id, firstname, lastname, religion, number_ID, marital_status, gender, date_of_birth, phone_number, country, address, status, work, joining_date, next_of_kin_name, relation, mobile_number, profession, next_marital_status FROM employees ORDER BY firstname asc ";

$result = @mysqli_query($conn, $query);
  
 }
    
   
    
 
?>

<style>
.nav-link1 .nav-link{
  text-transform:uppercase;
  font-weight:bold;
}
</style>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Employees</h1>
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
          <h4 class="title"><a href="">Employees</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat quae earum reprehenderit optio eaque atque enim officiis laboriosam nobis iure!</p>

            <ul class="nav flex-column homeLink nav-link1" >
          <li class="nav-item">
            <a class="nav-link " href="allEmployee.php">
            Total Employees -- <?php echo $count1; ?>
            </a>
          </li>
          


          <li class="nav-item">
            <a class="nav-link" href="activeEmployee.php">
          Total Active Employees -- <?php echo $count2; ?>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="unactiveEmployee.php">
             Total Un-Active Employees -- <?php echo $count3; ?>
            </a>
          </li>
        </ul>

          </div>
        </div>
      </div>
    </section><!-- End overview Section -->

<div class="container" id="search" data-aos="fade-up" data-aos-delay="100">
    <div>
     <form method="POST" class="searchInformation" >
     <h3 data-aos="fade-up" data-aos-delay="100">Enter required information</h3>
<div class="information">
    <div class="form-row" data-aos="fade-up" data-aos-delay="100">
        <div class="form-group col-md-6">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" class="form-control"  placeholder="Enter First Name">
        </div>

        <div class="form-group col-md-6">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Last Name">
        </div> 
    </div>
</div>
<div class="form-row" data-aos="fade-up" data-aos-delay="100">

    <div class="form-group col-md-6">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" class="form-control">
   <option selected disabled>Gender...</option>
   <option >Male</option>
   <option >Female</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="work">Work:</label>
            <select name="work" class="form-control"  id="work" >
            <option selected disabled>Work...</option>
            <option >Teacher</option>
            <option >Cook</option>
            <option >Driver</option>
            <option >Cleaner</option>

            </select>
        </div>     
</div>
   
    <div class="form-row" data-aos="fade-up" >
    <input type="submit" class="btn filter" name="searchEmployee" value="Filter ">
</div>

 </form>
 </div>
  
 <h3 class="results allResults ">All Employees Information:</h3>
 <div id="table">
        <table class="table table-striped table-light">
        <tr>
            <th scope='col'>ID:</th>
            <th scope='col'>ID Number:</th>
            <th scope='col'>First name:</th>
            <th scope='col'>Last name:</th>
            <th scope='col'> Religion:</th>
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
            
        </tr>

        <?php
          while($row = @mysqli_fetch_array($result))
          {
              $count ++;
        ?>
        <tr class="<?php  if(isset($classname)) echo $classname;?>">
        <td> <?php echo $row['id']?></td>
        <td> <?php echo $row['number_ID']?></td>

        <td><a  class="name-link" href="individualEmployeeRecord.php?id=<?php echo $row["id"]; ?>"><?php echo $row['firstname']?></a></td>
        <td> <a class="name-link"  href="individualEmployeeRecord.php?id=<?php echo $row["id"]; ?>"><?php echo $row['lastname']?></a></td>
        <td> <?php echo $row['religion']?></td>
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
       
        </tr>

        <?php } ?>

        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-dark progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Total  Employees - <?php echo $count; ?>
          </div>
        </div>

        </table>

        <?php @mysqli_free_result($result); ?>
</div>

<div class="row btnAll">
    <a href="allEmployees.php" class="go-to-page">  
<i class="fa fa-users" aria-hidden="true"></i>  All Employees </a>
          </div>

</div>

<?php
include 'includes/footer.php';
?>