




<div class="container-fluid"   >
  <div class="row">
    <aside id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar"  >
      <div class="position-sticky menu menu pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">
              <i class="fa fa-home" aria-hidden="true"></i>
              Dashboard
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="allStudents.php">
      <i class="fa fa-users" aria-hidden="true"></i>
            Students
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="allEmployees.php">
            <i class="fa fa-user" aria-hidden="true"></i>
              Employees
            </a>
          </li>
          <li class="nav-item" > 
            <a class="nav-link" href="allTimetables.php">
              <i class="fa fa-calendar-o" aria-hidden="true"></i>
            Timetable
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="examsResults.php">
           <i class="fa fa-bar-chart" aria-hidden="true"></i>
            Exam Records
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="allCertificates.php">
              <i class="fa fa-certificate" aria-hidden="true"></i>        
       Certificates
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Manage</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <i class="fa fa-plus-circle" aria-hidden="true"></i>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item ">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-users" aria-hidden="true"></i>Students</a>

           <div class="dropdown-menu item-manage" aria-labelledby="navbarDropdown">
                  <a href="insertStudent.php" class="dropdown-item">Insert</a>
               <a href="editStudent.php" class="dropdown-item">Edit</a>
               <a href="activeStudent.php" class="dropdown-item">Active</a>
               <a href="unactiveStudent.php" class="dropdown-item">Un-Active</a>
        
              <a href="deleteStudent.php" class="dropdown-item">Delete</a>
              
</div>

</li> 
</ul>

           <ul>
<li class="nav-item  ">
  
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user" aria-hidden="true"></i>Employees</a>

           <div class="dropdown-menu item-manage" aria-labelledby="navbarDropdown">
                  <a href="insertEmployee.php" class="dropdown-item">Insert </a>
               <a href="editEmployee.php" class="dropdown-item">Edit </a>
               <a href="activeEmployee.php" class="dropdown-item">Active </a>
               <a href="unactiveEmployee.php" class="dropdown-item">On-Leave </a>
              <a href="deleteEmployee.php" class="dropdown-item">Delete </a>
              
</div>

</li>
         
        </ul>
      </div>
    </aside>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">