<?php
include "includes/header.php";
include "includes/navbar.php";
include "includes/menubar.php";


?>





    
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
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
      <section id="services" class="services overview">
      <div class="container" id="services">
 
        <div class="row">

        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
           <div class="icon">
          <i class="fa fa-users" aria-hidden="true"></i></div>
            <h4 class="title"><a href="allStudents.php">Students</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, dolorum quo unde aperiam nulla quia architecto. Fugiat rem debitis rerum.</p>
          </div>

          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon">
          <i class="fa fa-user" aria-hidden="true"></i></div>
            <h4 class="title"><a href="allEmployees.php">Employees</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat quae earum reprehenderit optio eaque atque enim officiis laboriosam nobis iure!</p>
          </div>


        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"> <i class="fa fa-bar-chart" aria-hidden="true"></i></div>
            <h4 class="title"><a href="examsResults.php">Exam Records</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ipsam nulla itaque assumenda reprehenderit quaerat repellendus ut dicta, ducimus aspernatur..</p>
          </div>

          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"> <i class="fa fa-certificate" aria-hidden="true"></i> </div>
            <h4 class="title"><a href="allCertificates.php">Certificates</a></h4>
            <p class="description"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ipsam nulla itaque assumenda reprehenderit quaerat repellendus ut dicta, ducimus aspernatur.</p>
          </div>

          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="fa fa-calendar-o" aria-hidden="true"></i>
              </div>
            <h4 class="title"><a href="allTimetables.php">Timetable</a></h4>
            <p class="description"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus illo harum placeat, mollitia voluptatum rerum nemo fuga pariatur voluptatem numquam.</p>
          </div>

        </div>

      </div>
    </section><!-- End overview Section -->
         
    
    <!-- </main> -->
  </div>
</div>



<?php
include 'includes/footer.php'
?>


