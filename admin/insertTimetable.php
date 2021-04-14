<?php

ob_start();
 include 'includes/header.php';
 include "includes/navbar.php";
include "includes/menubar.php";

 include 'includes/db_connection.php';

 if(array_key_exists("submitTimetableInfo", $_POST)){
     $class = $_POST['class'];
     $term = $_POST['term'];

     $day1 = $_POST['day1'];
     $subject_one1= $_POST['subject11'];
     $break1 = $_POST['break1'];
     $subject_two1 = $_POST['subject21'];
     $tbreak1 = $_POST['teabreak1'];
     $subject_three1 = $_POST['subject31'];
     $subject_four1 = $_POST['subject41'];
     $lunch1 = $_POST['lunchbreak1'];
     $subject_five1 = $_POST['subject51'];

     $day2 = $_POST['day2'];
     $subject_one2= $_POST['subject12'];
     $break2 = $_POST['break2'];
     $subject_two2 = $_POST['subject22'];
     $tbreak2 = $_POST['teabreak2'];
     $subject_three2 = $_POST['subject32'];
     $subject_four2 = $_POST['subject42'];
     $lunch2 = $_POST['lunchbreak2'];
     $subject_five2 = $_POST['subject52'];

     $day3 = $_POST['day3'];
     $subject_one3= $_POST['subject13'];
     $break3 = $_POST['break3'];
     $subject_two3 = $_POST['subject23'];
     $tbreak3 = $_POST['teabreak3'];
     $subject_three3 = $_POST['subject33'];
     $subject_four3 = $_POST['subject43'];
     $lunch3 = $_POST['lunchbreak3'];
     $subject_five3 = $_POST['subject53'];

     $day4 = $_POST['day4'];
     $subject_one4= $_POST['subject14'];
     $break4 = $_POST['break4'];
     $subject_two4 = $_POST['subject24'];
     $tbreak4 = $_POST['teabreak4'];
     $subject_three4 = $_POST['subject34'];
     $subject_four4 = $_POST['subject44'];
     $lunch4 = $_POST['lunchbreak4'];
     $subject_five4 = $_POST['subject54'];

     $day5 = $_POST['day5'];
     $subject_one5= $_POST['subject15'];
     $break5 = $_POST['break5'];
     $subject_two5 = $_POST['subject25'];
     $tbreak5 = $_POST['teabreak5'];
     $subject_three5 = $_POST['subject35'];
     $subject_four5 = $_POST['subject45'];
     $lunch5 = $_POST['lunchbreak5'];
     $subject_five5 = $_POST['subject55'];


     $query = "INSERT INTO `timetables` (`id`, `class`, `term`, `day_1`, `subject_11`, `break_1`, `subject_21`, `teabreak_1`, `subject_31`, `subject_41`, `lunchbreak_1`, `subject_51`, `day_2`, `subject_12`, `break_2`, `subject_22`, `teabreak_2`, `subject_32`, `subject_42`, `lunchbreak_2`, `subject_52`, `day_3`, `subject_13`, `break_3`, `subject_23`, `teabreak_3`, `subject_33`, `subject_43`, `lunchbreak_3`, `subject_53`, `day_4`, `subject_14`, `break_4`, `subject_24`, `teabreak_4`, `subject_34`, `subject_44`, `lunchbreak_4`, `subject_54`,`day_5`, `subject_15`, `break_5`, `subject_25`, `teabreak_5`, `subject_35`, `subject_45`, `lunchbreak_5`, `subject_55`) VALUES ('', '$class', '$term', '$day1', '$subject_one1', '$break1', '$subject_two1', '$tbreak1', '$subject_three1', '$subject_four1', '$lunch1', '$subject_five1', '$day2', '$subject_one2', '$break2', '$subject_two2', '$tbreak2', '$subject_three2', '$subject_four2', '$lunch2', '$subject_five2',  '$day3', '$subject_one3', '$break3', '$subject_two3', '$tbreak3', '$subject_three3', '$subject_four3', '$lunch3', '$subject_five3',  '$day4', '$subject_one4', '$break4', '$subject_two4', '$tbreak4', '$subject_three4', '$subject_four4', '$lunch4', '$subject_five4',  '$day5', '$subject_one5', '$break5', '$subject_two5', '$tbreak5', '$subject_three5', '$subject_four5', '$lunch5', '$subject_five5');";

     $run = mysqli_query($conn, $query);

     if($run != TRUE){
        echo "<div id='alert' class='alert alert-danger insert' role='alert'>  Timetable not inserted!! </div>";
     }else{
        echo "<div id='alert' class='alert alert-success insert' role='alert'> New timetable created successfully!! </div>";
     }

 }


?>

<div class="container" data-aos="fade-up" data-aos-delay="100" style="text-align:center">
   <form method="POST" class="insertEmployee" >
       <h3 data-aos="fade-up" data-aos-delay="100">Timetable</h3>

<div class="information">
    <div class="form-row" data-aos="fade-up" data-aos-delay="100">
        <div class="form-group col-md-6">
            <label for="firstname">Class:</label>
           <select name="class" id="class" class="form-control" required="">
           <option selected disabled>Class...</option>
           <option>Play Group</option>
           <option>PP1</option>
           <option>PP2</option>
           <option>PP3</option>
           
           </select>
        </div>
        <div class="form-group col-md-6">
            <label for="term">Term:</label>
            <input type="text" name="term" id="term" class="form-control"  placeholder="Enter Term and Year">
        </div>
    </div>

       <!-- MONDAY -->

    <div class="form-row ">
    <div class="form-group col-md-4">
        
            <label for="time">Day:</label>
            <input type="text" name="day1" id="lastname" class="form-control"  value="MONDAY" placeholder="MONDAY">
        </div>
      
    </div>

    <div class="form-row" >
        <div class="form-group col-md-3">
            <label for="religion">8AM - 9AM:</label>
            <select name="subject11" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="time">9AM - 9:10AM:</label>
            <input type="text" name="break1" id="lastname" class="form-control"  value="BREAK" placeholder="BREAK">
        </div>
        <div class="form-group col-md-3">
            <label for="time">9:10AM - 10AM:</label>
            <select name="subject21" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
         <div class="form-group col-md-3">
            <label for="time">10AM - 10:30AM:</label>
            <input type="text" name="teabreak1" id="lastname" class="form-control"   value="TEA BREAK" placeholder="TEA BREAK">
        </div>
</div>
    <div class="form-row" >
   
        <div class="form-group col-md-3">
            <label for="time">10:30AM - 11:30AM:</label>
            <select name="subject31" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="time">11:30AM - 1PM:</label>
            <select name="subject41" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="time">1PM - 2PM:</label>
            <input type="text" name="lunchbreak1" id="lastname" class="form-control" value="LUNCH BREAK" placeholder="LUNCH BREAK">
        </div>
        <div class="form-group col-md-3">
            <label for="time">2PM - 3PM:</label>
            <select name="subject51" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>

</div>
   
<hr class="divider">

<!-- TUESDAY -->
<div class="information">
   

    <div class="form-row ">
    <div class="form-group col-md-4">

            <label for="time">Day:</label>
            <input type="text" name="day2" id="lastname" class="form-control" value="TUESDAY" placeholder="TUESDAY">

        </div>
       
    </div>

    <div class="form-row" >
        <div class="form-group col-md-3">
            <label for="religion">8AM - 9AM:</label>
            <select name="subject12" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="time">9AM - 9:10AM:</label>
            <input type="text" name="break2" id="lastname" class="form-control" value="BREAK" placeholder="BREAK">
        </div>
        <div class="form-group col-md-3">
            <label for="time">9:10AM - 10AM:</label>
            <select name="subject22" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
         <div class="form-group col-md-3">
            <label for="time">10AM - 10:30AM:</label>
            <input type="text" name="teabreak2" id="lastname" class="form-control"  value="TEA BREAK" placeholder="TEA BREAK">
        </div>
</div>
    <div class="form-row" >
   
        <div class="form-group col-md-3">
            <label for="time">10:30AM - 11:30AM:</label>
            <select name="subject32" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="time">11:30AM - 1PM:</label>
            <select name="subject42" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="time">1PM - 2PM:</label>
            <input type="text" name="lunchbreak2" id="lastname" class="form-control" value="LUNCH BREAK" placeholder="LUNCH BREAK">
        </div>
        <div class="form-group col-md-3">
            <label for="time">2PM - 3PM:</label>
            <select name="subject52" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>

</div>
<hr class="divider">
   
   <!-- WEDNESDAY -->
<div class="information">
   

   <div class="form-row ">
   <div class="form-group col-md-4">

           <label for="time">Day:</label>
           <input type="text" name="day3" id="lastname" class="form-control"  value="WEDNESDAY" placeholder="WEDNESDAY">

       </div>
      
   </div>

   <div class="form-row" >
       <div class="form-group col-md-3">
           <label for="religion">8AM - 9AM:</label>
           <select name="subject13" class="form-control" required id="transport" >
           <option selected disabled>Subject...</option>
           <option >Maths</option>
           <option >Drawing & Colouring</option>
           <option >Spelling & Dictation</option>
           <option >Reading & Writing</option>
           <option >General Knowledge</option>
           </select>
       </div>
       <div class="form-group col-md-3">
           <label for="time">9AM - 9:10AM:</label>
           <input type="text" name="break3" id="lastname" class="form-control" value="BREAK" placeholder="BREAK">
       </div>
       <div class="form-group col-md-3">
           <label for="time">9:10AM - 10AM:</label>
           <select name="subject23" class="form-control" required id="transport" >
           <option selected disabled>Subject...</option>
           <option >Maths</option>
           <option >Drawing & Colouring</option>
           <option >Spelling & Dictation</option>
           <option >Reading & Writing</option>
           <option >General Knowledge</option>
           </select>
       </div>
        <div class="form-group col-md-3">
           <label for="time">10AM - 10:30AM:</label>
           <input type="text" name="teabreak3" id="lastname" class="form-control"  value="TEA BREAK"placeholder="TEA BREAK">
       </div>
</div>
   <div class="form-row" >
  
       <div class="form-group col-md-3">
           <label for="time">10:30AM - 11:30AM:</label>
           <select name="subject33" class="form-control" required id="transport" >
           <option selected disabled>Subject...</option>
           <option >Maths</option>
           <option >Drawing & Colouring</option>
           <option >Spelling & Dictation</option>
           <option >Reading & Writing</option>
           <option >General Knowledge</option>
           </select>
       </div>
       <div class="form-group col-md-3">
           <label for="time">11:30AM - 1PM:</label>
           <select name="subject43" class="form-control" required id="transport" >
           <option selected disabled>Subject...</option>
           <option >Maths</option>
           <option >Drawing & Colouring</option>
           <option >Spelling & Dictation</option>
           <option >Reading & Writing</option>
           <option >General Knowledge</option>
           </select>
       </div>
       <div class="form-group col-md-3">
           <label for="time">1PM - 2PM:</label>
           <input type="text" name="lunchbreak3" id="lastname" class="form-control"  value="LUNCH BREAK"placeholder="LUNCH BREAK">
       </div>
       <div class="form-group col-md-3">
           <label for="time">2PM - 3PM:</label>
           <select name="subject53" class="form-control" required id="transport" >
           <option selected disabled>Subject...</option>
           <option >Maths</option>
           <option >Drawing & Colouring</option>
           <option >Spelling & Dictation</option>
           <option >Reading & Writing</option>
           <option >General Knowledge</option>
           </select>
       </div>

</div>
<hr class="divider">

<!-- THURSDAY -->
<div class="information">
   

    <div class="form-row ">
    <div class="form-group col-md-4">

            <label for="time">Day:</label>
            <input type="text" name="day4" id="lastname" class="form-control" value="THURSDAY" placeholder="THURSDAY">

        </div>
       
    </div>

    <div class="form-row" >
        <div class="form-group col-md-3">
            <label for="religion">8AM - 9AM:</label>
            <select name="subject14" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="time">9AM - 9:10AM:</label>
            <input type="text" name="break4" id="lastname" class="form-control"  value="BREAK" placeholder="BREAK">
        </div>
        <div class="form-group col-md-3">
            <label for="time">9:10AM - 10AM:</label>
            <select name="subject24" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
         <div class="form-group col-md-3">
            <label for="time">10AM - 10:30AM:</label>
            <input type="text" name="teabreak4" id="lastname" class="form-control"   value="TEA BREAK"placeholder="TEA BREAK">
        </div>
</div>
    <div class="form-row" >
   
        <div class="form-group col-md-3">
            <label for="time">10:30AM - 11:30AM:</label>
            <select name="subject34" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="time">11:30AM - 1PM:</label>
            <select name="subject44" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="time">1PM - 2PM:</label>
            <input type="text" name="lunchbreak4" id="lastname" class="form-control"  value="LUNCH BREAK" placeholder="LUNCH BREAK">
        </div>
        <div class="form-group col-md-3">
            <label for="time">2PM - 3PM:</label>
            <select name="subject54" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>

</div>
<hr class="divider">

<!-- FRIDAY -->
<div class="information">
   

    <div class="form-row ">
    <div class="form-group col-md-4">

            <label for="time">Day:</label>
            <input type="text" name="day5" id="lastname" class="form-control"  value="FRIDAY" placeholder="FRIDAY">

        </div>
       
    </div>

    <div class="form-row" >
        <div class="form-group col-md-3">
            <label for="religion">8AM - 9AM:</label>
            <select name="subject15" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="time">9AM - 9:10AM:</label>
            <input type="text" name="break5" id="lastname" class="form-control"  value="BREAK" placeholder="BREAK">
        </div>
        <div class="form-group col-md-3">
            <label for="time">9:10AM - 10AM:</label>
            <select name="subject25" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
         <div class="form-group col-md-3">
            <label for="time">10AM - 10:30AM:</label>
            <input type="text" name="teabreak5" id="lastname" class="form-control" value="TEA BREAK" placeholder="TEA BREAK">
        </div>
</div>
    <div class="form-row" >
   
        <div class="form-group col-md-3">
            <label for="time">10:30AM - 11:30AM:</label>
            <select name="subject35" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="time">11:30AM - 1PM:</label>
            <select name="subject45" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="time">1PM - 2PM:</label>
            <input type="text" name="lunchbreak5" id="lastname" class="form-control" value="LUNCH BREAK" placeholder="LUNCH BREAK">
        </div>
        <div class="form-group col-md-3">
            <label for="time">2PM - 3PM:</label>
            <select name="subject55" class="form-control" required id="transport" >
            <option selected disabled>Subject...</option>
            <option >Maths</option>
            <option >Drawing & Colouring</option>
            <option >Spelling & Dictation</option>
            <option >Reading & Writing</option>
            <option >General Knowledge</option>
            </select>
        </div>

</div>
    
<div class="form-row" data-aos="fade-up">
    <input type="submit" class="btn" name="submitTimetableInfo" value="Submit ">
</div>

   </form>
</div>
 



<?php
include 'includes/footer.php';
?>