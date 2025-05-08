<?php   include 'navbar.php';
        if(!isset($_SESSION['jid']) && empty($_SESSION['jid']))
        {
            header("Location: log_in.php");
        }
        $con=mysqli_connect("localhost","root","","garbage_db");
        $result=mysqli_query($con,"select * from orders where seller_id=".$_SESSION['jid']);
?>
 <div class="container" style="height:100%; margin-top:5%; margin-bottom:5%;">
      <div class='row'>
          <div class='col-2 col-lg-2'>
            <h3 class='font'>Item</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3 class='font'>Qty.(Kg.)</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3 class='font'>Rate</h3>
        </div>
        <div class='col-2 col-lg-2'>
            <h3 class='font'>Total amount</h3>
        </div>
        <div class='col-2 col-lg-2'>
            <h3 class='font'>Status</h3>
        </div>
        <div class='col-2 col-lg-2'>
            <h3 class='font'>Details</h3>
        </div>
      </div>
      <hr style='color: green; height: 2px;'>
      <?php
      while($row=mysqli_fetch_row($result))
      {
          $id=$row[0];
          if($row[7])
          {
              $status="<h3 class='font'>Completed</h3>";
          }
          else
          {
              $status="<a href='chngStatus.php?id=$id'><h3 class='font'>Pending</h3></a>";
          }
          $total = ($row[5])*($row[6]);
          echo "
          <div class='row'>
          <div class='col-2 col-lg-2'>
            <h3 class='font'>$row[4]</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3 class='font'>$row[5]</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3 class='font'>$row[6]</h3>
        </div>
        <div class='col-2 col-lg-2'>
            <h3 class='font'>$total</h3>
        </div>
        <div class='col-2 col-lg-2'>
            $status
        </div>
        <div class='col-2 col-lg-2'>
          <a href='showDetails.php?id=$row[1]'><h3 class='font'>Address</h3></a>
        </div>
      </div>";
      }
      ?>
      <hr style='color: green; height: 2px;'>
</div>
<?php include 'footer.php'?>