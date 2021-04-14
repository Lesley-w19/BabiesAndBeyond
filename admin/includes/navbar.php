<body>
<!--collapsed data-bs-toggle="collapse" data-bs-target="#sidebarMenu"aria-controls="sidebarMenu"aria-expanded="false"-->
   
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Babies and Beyond</a>
  <button class="navbar-toggler position-absolute bg-dark d-md-none " type="button"     id="sideBtn" onclick="toggleBtn()" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap ">
      <a class="nav-link" href="../logout.php"><i class="fa fa-user-o" aria-hidden="true"></i> Sign out</a>
    </li>
  </ul>

  
</header>

<div class="topMenu bg-light float-right ">
<ul>
          <li ><a href="home.php" style="color: #e92264;">Home <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
          <li class="active"><a href="#">Dashboard</a></li>       
        </ul>
</div>

<script>
  function toggleBtn(){
          const sideBar = document.getElementById("sidebarMenu");
          sideBar.classList.toggle("showsidebar");
           console.log("hereeeeeee");
  }
</script>