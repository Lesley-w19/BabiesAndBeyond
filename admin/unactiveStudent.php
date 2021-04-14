
<?php

include 'includes/header.php';
include "includes/navbar.php";
include "includes/menubar.php";

include 'includes/db_connection.php';

 $count = "0";

 $query = "SELECT id, firstname, lastname,  admision_number, class, gender,  home_address,  parent_name, relation, parent_number FROM  `students` WHERE status = 'Un-Active'";

 $result = @mysqli_query($conn, $query);

?>

<div class="container" id="unactivepg" data-aos="fade-up" data-aos-delay="100"> 
 <h3 class="results">Un-Active Students:</h3>
<div id="table">
        <table class="table table-striped table-light">
        <tr>
            <th scope='col'>ID:</th>
            <th scope='col'>First name:</th>
            <th scope='col'>Last name:</th>
            <th scope='col'>Admission Number:</th>
            <th scope='col'>Class:</th>
            <th scope='col'>Gender:</th>
            <th scope='col'>Home Address:</th>
            <th scope='col'>Parent Name :</th>
            <th scope='col'> Relation:</th>
            <th scope='col'> Parent Number:</th>
           
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
        <td> <?php echo $row['admision_number']?></td>
        <td> <?php echo $row['class']?></td>
        <td> <?php echo $row['gender']?></td>
        <td> <?php echo $row['home_address']?></td>
        <td> <?php echo $row['parent_name']?></td>
        <td> <?php echo $row['relation']?></td>
        <td> <?php echo $row['parent_number']?></td>
       

        <td class="updat"><a class="update" href="updateStudent.php?id=<?php echo $row["id"]; ?>"> Update</a></td>


        </tr>
        <?php } ?>

        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-dark progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Total Un-Active Students - <?php echo $count; ?>
          </div>
        </div>
        </table>

        <?php @mysqli_free_result($result); ?>
</div>

<a href="allStudents.php" class="go-to-page">  
<i class="fa fa-hand-o-left" aria-hidden="true"></i>  All Students </a>

</div>

<?php
include 'includes/footer.php';
?>