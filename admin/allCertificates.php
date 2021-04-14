
<?php

include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

 include 'includes/db_connection.php';

$count = "0";


    $query = "SELECT id, leaving_certificate FROM  certificates ORDER BY id asc";

    $result = mysqli_query($conn, $query);


?>

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
        <div class="col-lg-12 col-md-12 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"> <i class="fa fa-certificate" aria-hidden="true"></i> </div>
            <h4 class="title"><a href="allCertificates.php">Certificates</a></h4>
            <p class="description"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ipsam nulla itaque assumenda reprehenderit quaerat repellendus ut dicta, ducimus aspernatur.</p>
          </div>
        </div>
      </div>
    </section><!-- End overview Section -->

<div class="container " id="search" data-aos="fade-up" >
    <div>
     <form method="POST" action="allCertificates.php" class="searchInformation" >

   
<div class="row btnAll" data-aos="fade-up">
    <a href="leavingCertificate.php" class="go-to-page pgeCert">  
<i class="fa fa-users" aria-hidden="true"></i>  Issue Leaving Certificate </a>
</div>
 </form>
 </div>
 
 <h3 class="results allResults">All Certificates Issued:</h3>
<div id="table">
        <table class="table table-striped table-light">
        <tr>
            <th scope='col'>ID:</th>
            <th scope='col'>Issued To:</th>
            <th scope='col'></th>

        </tr>

        <?php
          while($row = @mysqli_fetch_array($result))
          {
              $count ++;
        ?>
        <tr class="<?php  if(isset($classname)) echo $classname;?>">
        <td> <?php echo $row['id']?></td>
       <td> <?php echo $row['leaving_certificate']?></td> 
       <td class="updat"><a class="update print " href="#"> <i class="fa fa-print" aria-hidden="true"></i> Print</a></td>

        </tr>
        <?php } ?>

        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-dark progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Total  Issued Certificates - <?php echo $count; ?>
          </div>
        </div>

        </table>

        <?php @mysqli_free_result($result); ?>
</div>

</div>


<?php
include 'includes/footer.php';
?>