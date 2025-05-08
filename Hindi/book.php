<?php
    include 'navbar.php';
    $conn = mysqli_connect ('localhost','root','','garbage_db');
    $query1 = "Select * from junk_man";
    $result1 = mysqli_query($conn,$query1);

    // $queryphoto = "Select photo from junk_man";
    // $resultphotp = mysqli_query($conn,$query1);
?>
  <div class="container">
    <?php
      $i = mysqli_num_rows($result1);
      while($i>0)
      {
        $row=mysqli_fetch_row($result1);
        if($row[9]==NULL)
        {
          echo "<div class='row'>
                <div class='col-6 col-lg-3 profile'>
                  <img src='/Garbage/img/unknown.jpg'>
                </div>
                <div class='col-6 col-lg-3'>
                  <h3 style=''>$row[1]</h3>
                  <span>Carton: $row[3]</span><br>
                  <span>Paper: $row[4]</span><br>
                  <span>Plastic: $row[5]</span><br>
                  <span>Heavy Iron: $row[6]</span><br>
                  <span>Light Iron: $row[7]</span><br>
                </div>
                <div class='col-6 col-lg-3'>
                    <button class='btn-book'>Book Appointment</button>
                </div>
              </div>
              <hr style='color: green; height: 2px;'>  ";  
        $i--;
      }
      else{
        echo "<div class='row'>
                <div class='col-6 col-lg-3 profile'>
                  <img src='/Garbage/$row[9]'>
                </div>
                <div class='col-6 col-lg-3'>
                  <h3 style=''>$row[1]</h3>
                  <span>Carton: $row[3]</span><br>
                  <span>Paper: $row[4]</span><br>
                  <span>Plastic: $row[5]</span><br>
                  <span>Heavy Iron: $row[6]</span><br>
                  <span>Light Iron: $row[7]</span><br>
                </div>
                <div class='col-6 col-lg-3'>
                    <button class='btn-book'>Book Appointment</button>
                </div>
              </div>
              <hr style='color: green; height: 2px;'>  ";  
        $i--;
      }
      }
    ?>
  </div>
  <?php include 'footer.php'?>
