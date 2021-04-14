<?php

include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

 include 'includes/db_connection.php';

$count = "0";


 $query = "SELECT id, class, term, day_1, subject_11, break_1, subject_21, teabreak_1, subject_31, subject_41, lunchbreak_1, subject_51, day_2, subject_12, break_2, subject_22, teabreak_2, subject_32, subject_42, lunchbreak_2, subject_52, day_3, subject_13, break_3, subject_23, teabreak_3, subject_33, subject_43, lunchbreak_3, subject_53, day_4, subject_14, break_4, subject_24, teabreak_4, subject_34, subject_44, lunchbreak_4, subject_54,day_5, subject_15, break_5, subject_25, teabreak_5, subject_35, subject_45, lunchbreak_5, subject_55 FROM timetables ORDER BY class asc ";

 $result = @mysqli_query($conn, $query);

?>



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Timetable</h1>
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
            <h4 class="title"><a href="#">Timetable</a></h4>
            <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, dolorum quo unde aperiam nulla quia architecto. Fugiat rem debitis rerum.</p>

<div id="timetable" style="margin-top: 2rem ">
<table class="table table-striped table-light ">
   <tr>
   <th scope="col" colspan="5">Subjects</th>
   </tr>

<tr>
<td>Maths</td>
<td>Spelling & Dictation</td>
<td>Drawing & Coloring</td>
<td>Reading & Writing</td>
<td>General Knowledge</td>
</tr>
</table>

</div>

          </div>
        </div>
      </div>
    </section><!-- End overview Section -->

   
          <div class="row btnAll " data-aos="fade-up" >
    <a href="insertTimetable.php" class="go-to-page btn btn-d">  
<i class="fa fa-pencil-square-o" aria-hidden="true"></i>   Make Timetable </a>
</div>

        <?php
          while($row = @mysqli_fetch_array($result))
          {
              $count ++;
        ?>
<div class="row">
<div id="timetable" style="margin: 2rem auto; text-align:center;  ">
        

<table class="table table-striped table-light">
<h3><?php echo $row['class'];?> TIMETABLE </h3>
  <h3><?php echo $row['term'];?> </h3>
    
    <th scope="col" colspan="1">ID</th>
   <th scope="col" colspan="7">Morning</th>
   <th scope="col" colspan="2">Afternoon</th>
   </tr>


   <tr class="htime">
<td><?php echo $row['id']?></td>
  <td>DAY</td>
<td >8AM - 9AM</td>
<td >9AM - 9:10AM</td>
<td >9:10AM - 10AM</td>
<td >10AM - 10:30AM</td>
<td >10:30AM - 11:30AM</td>
<td >11:30AM - 12:30PM</td>
<td >12:30 - 2PM</td>
<td >2PM - 3PM</td>
</tr>


<tr>
<td></td>
<td><?php echo $row['day_1']?></td>
<td><?php echo $row['subject_11']?></td>
<td><?php echo $row['break_1']?></td>
<td><?php echo $row['subject_21']?></td>
<td><?php echo $row['teabreak_1']?></td>
<td><?php echo $row['subject_31']?></td>
<td><?php echo $row['subject_41']?></td>
<td><?php echo $row['lunchbreak_1']?></td>
<td><?php echo $row['subject_51']?></td>
</tr>

<tr>
<td></td>
<td><?php echo $row['day_2']?></td>
<td><?php echo $row['subject_12']?></td>
<td><?php echo $row['break_2']?></td>
<td><?php echo $row['subject_22']?></td>
<td><?php echo $row['teabreak_2']?></td>
<td><?php echo $row['subject_32']?></td>
<td><?php echo $row['subject_42']?></td>
<td><?php echo $row['lunchbreak_2']?></td>
<td><?php echo $row['subject_52']?></td>
</tr>

<tr>
<td></td>
<td><?php echo $row['day_3']?></td>
<td><?php echo $row['subject_13']?></td>
<td><?php echo $row['break_3']?></td>
<td><?php echo $row['subject_23']?></td>
<td><?php echo $row['teabreak_3']?></td>
<td><?php echo $row['subject_33']?></td>
<td><?php echo $row['subject_43']?></td>
<td><?php echo $row['lunchbreak_3']?></td>
<td><?php echo $row['subject_53']?></td>
</tr>

<tr>
<td></td>
<td><?php echo $row['day_4']?></td>
<td><?php echo $row['subject_14']?></td>
<td><?php echo $row['break_4']?></td>
<td><?php echo $row['subject_24']?></td>
<td><?php echo $row['teabreak_4']?></td>
<td><?php echo $row['subject_34']?></td>
<td><?php echo $row['subject_44']?></td>
<td><?php echo $row['lunchbreak_4']?></td>
<td><?php echo $row['subject_54']?></td>
</tr>

<tr>
<td></td>
<td><?php echo $row['day_5']?></td>
<td><?php echo $row['subject_15']?></td>
<td><?php echo $row['break_5']?></td>
<td><?php echo $row['subject_25']?></td>
<td><?php echo $row['teabreak_5']?></td>
<td><?php echo $row['subject_35']?></td>
<td><?php echo $row['subject_45']?></td>
<td><?php echo $row['lunchbreak_5']?></td>
<td><?php echo $row['subject_55']?></td>
</tr>


<div  class="row">

<div class="col-md-6">
<a href="demetable.php?id=<?php echo $row["id"]; ?>" class="go-to-page btn">  
<i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Update </a>
</div>

<div class="col-md-6">
<a href="deleteTimetable.php?id=<?php echo $row["id"]; ?>" class="go-to-page btn btn1">  
<i class="fa fa-pencil-square-o" aria-hidden="true"></i>   Delete </a>
</div>

</div>
</div>


</table>


</div>

</div>
<?php } ?>



<?php
include 'includes/footer.php';
?>

<style>
.btn1{
  background:red;
}
.btn1:hover{
  background:rgb(155, 11, 11);
}
.htime td{
  font-size: .9rem !important;
  color: #e92264;
  font-weight:bold;
}
.btnAll{
  display:flex;
  justify-content: center;
}
.btnAll .btn{
  background: #e92264;
  color:#fff;
  padding: .5rem 5rem;
margin-bottom:2rem;
}
.btnAll .btn:hover{
 background:#e92264b9;
}

</style>