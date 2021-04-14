<?php

include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

 include 'includes/db_connection.php';

 $count = "0";

if(array_key_exists("searchRecord", $_POST)){

    $class = $_POST['class'];
    $admission = $_POST['adm_number'];


     $query = "SELECT id, class, term, firstname, lastname,  admission_number,  maths, drawing, reading, spelling, general, total,  remarks FROM  results WHERE  class = '$class' || admission_number = '$admission' ORDER BY total desc";

     $result = mysqli_query($conn, $query);
} 
else{
    $query = "SELECT id, class, term, firstname, lastname,  admission_number,  maths, drawing, reading, spelling, general, total,  remarks FROM  results ORDER BY total desc";

    $result = mysqli_query($conn, $query);
}

?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Exam Records</h1>
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
            <h4 class="title"><a href="#">Exam Results</a></h4>
            <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, dolorum quo unde aperiam nulla quia architecto. Fugiat rem debitis rerum.</p>

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
            <label for="adm_number">Admission Number:</label>
            <input type="text" name="adm_number" id="adm_number" class="form-control"  placeholder="Enter Admission Number">
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
    <input type="submit" class="btn filter" name="searchRecord" value="Filter ">
</div>

 </form>
 </div>
  
 <h3 class="results allResults ">All Exam Records:</h3>
 <div id="table">
        <table class="table table-striped table-light">
        <tr>
            <th scope='col'>ID:</th>
            <th scope='col'>Class:</th>
            <th scope='col'>Term:</th>
            <th scope='col'>Student Admission No:</th>
            <th scope='col'>First name:</th>
            <th scope='col'> Last Name:</th>
            <th scope='col'>Maths:</th>
            <th scope='col'>Drawing:</th>
            <th scope='col'>Reading:</th>
            <th scope='col'>Spelling:</th>
            <th scope='col'>General Knowledge:</th>
            <th scope='col'>TOTAL MARKS:</th>
            <th scope='col'>Remarks :</th>  
            <th colspan="2"></th>          
        </tr>

        <?php
          while($row = @mysqli_fetch_array($result))
          {
              $count ++;
        ?>
        <tr class="<?php  if(isset($classname)) echo $classname;?>">
        <td> <?php echo $row['id']?></td>
        <td> <?php echo $row['class']?></td>
        <td> <?php echo $row['term']?></td>
        <td> <?php echo $row['admission_number']?></td>
        <td><a  class="name-link" href="individualExamRecord.php?id=<?php echo $row["id"]; ?>"><?php echo $row['firstname']?></a></td>
        <td> <a class="name-link"  href="individualExamRecord.php?id=<?php echo $row["id"]; ?>"><?php echo $row['lastname']?></a></td>
        <td> <?php echo $row['maths']?></td>
        <td> <?php echo $row['drawing']?></td>
        <td> <?php echo $row['reading']?></td>
        <td> <?php echo $row['spelling']?></td>
        <td> <?php echo $row['general']?></td>
        <td> <?php echo $row['total']?></td>
        <td> <?php echo $row['remarks']?></td>

        <td class="updat"><a class="update" href="updateRecords.php?id=<?php echo $row["id"]; ?>"> Update</a></td>
       
        </tr>

        <?php } ?>

        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-dark progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Total  Employees - <?php echo $count; ?>
          </div>
        </div>

        </table>

        <?php @mysqli_free_result($result); ?>
</div>



</div>
   <div class="row">  

   <div class="btnAll col-md-6" data-aos="fade-up">
    <a href="examsResults.php" class="go-to-page btn-d1">  
<i class="fa fa-users" aria-hidden="true"></i>  All Exam Records </a>
          </div>
   

         

 <div class="btnAll col-md-4" data-aos="fade-up" >
    <a href="insertResults.php" class="go-to-page btn btn-d">  
<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Insert </a>
</div>

   </div>

          

<?php
include 'includes/footer.php';
?>
   
   
   <style>
     .btn-d1{
      padding: .5rem 5rem;
margin-bottom:2rem;
background:#3dc2ac;
     }
     .btn-d1:hover{
       background: #77cabe;
color:#fff;
     }
    
.btnAll{
  display:flex;
  justify-content: center;
}
.btnAll .btn{
  background: #e92264;
  color:#fff;
  padding: .5rem 4rem;
margin-bottom:2rem;
}
.btnAll .btn:hover{
 background:#e92264b9;
}
.btn-d0{
background:#faa51a !important;
     }
     .btn-d0:hover{
       background:#faa41ac9 !important;
color:#fff;
     }


