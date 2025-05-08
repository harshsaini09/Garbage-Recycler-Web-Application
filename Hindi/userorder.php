
<?php   include 'navbar.php';
if(!isset($_SESSION['uid']) && empty($_SESSION['uid']))
        {
            echo "Hellollooasd;j;ad";
            //header("Location: log_in.php");
        }
        $con=mysqli_connect("localhost","root","","garbage_db");
        $result=mysqli_query($con,"select * from orders where customer_id=".$_SESSION['uid']);
?>
 <div class="container">
      <div class='row'>
          <div class='col-3 col-lg-3'>
            <h3>Item</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>Qty.(Kg.)</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>Rate</h3>
        </div>
        <div class='col-2 col-lg-2'>
            <h3>Total amount</h3>
        </div>
        <div class='col-3 col-lg-3'>
            <h3>Status</h3>
        </div>
      </div>
      <hr style='color: green; height: 2px;'>
      <?php
      while($row=mysqli_fetch_row($result))
      {
          if($row[7])
          {
              $status="Completed";
          }
          else
          {
              $status="Pending";
          }
          $total = ($row[5])*($row[6]);
          echo "
          <div class='row'>
          <div class='col-3 col-lg-3'>
            <h3>$row[4]</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>$row[5]</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>$row[6]</h3>
        </div>
        <div class='col-2 col-lg-2'>
            <h3>$total</h3>
        </div>
        <div class='col-3 col-lg-3'>
            <h3>$status</h3>
        </div>
      </div>
        ";
    }?>
    <hr style='color: green; height: 2px;'>
</div>
<?php include 'footer.php'?>