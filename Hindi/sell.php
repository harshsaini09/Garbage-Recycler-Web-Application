<?php
  include 'navbar.php';
  $conn = mysqli_connect('localhost','root','','garbage_db');
  $carton = mysqli_fetch_row(mysqli_query($conn,'SELECT * FROM junk_man ORDER BY carton DESC limit 1'));
  $paper = mysqli_fetch_row(mysqli_query($conn,'SELECT * FROM junk_man ORDER BY paper DESC limit 1'));
  $plastic = mysqli_fetch_row(mysqli_query($conn,'SELECT * FROM junk_man ORDER BY plastic DESC limit 1'));
  $hiron = mysqli_fetch_row(mysqli_query($conn,'SELECT * FROM junk_man ORDER BY hiron DESC limit 1'));
  $liron = mysqli_fetch_row(mysqli_query($conn,'SELECT * FROM junk_man ORDER BY liron DESC limit 1'));
  $glass = mysqli_fetch_row(mysqli_query($conn,'SELECT * FROM junk_man ORDER BY glass DESC limit 1'));
?>
  <div class="container" style="padding-top: 5%;">
  <form action="cart.php" method="post">
      <div class="row">
          <div class="col-lg-3 profile">
          </div>
          <div class="col-lg-3">
            <h3>Carton</h3>
            <p>&#x20B9; <?php echo $carton[3]?></p>
          </div>
          <div class="col-lg-3">
              <input type="button" value="Add" onclick="increase(one)">
              <input type="number" value="0" name="carton" style="width:50%;" min="0" id="one">
              <input type="button" value="Substract" onclick="decrease(one)">
          </div>
      </div>
      <hr style="color: green; height: 2px;">
      <div class="row">
        <div class="col-lg-3 profile">
        </div>
        <div class="col-lg-3">
          <h3>Paper</h3>
          <p>&#x20B9; <?php echo $paper[4]?></p>
        </div>
        <div class="col-lg-3">
        <input type="button" value="Add" onclick="increase(two)">
          <input type="number" value="0" name="paper" style="width:50%;" min="0" id="two">
          <input type="button" value="Substract" onclick="decrease(two)">
        </div>
    </div>
    <hr style="color: green; height: 2px;">
    <div class="row">
      <div class="col-lg-3 profile">
      </div>
      <div class="col-lg-3">
        <h3>Plastic</h3>
        <p>&#x20B9; <?php echo $plastic[5]?></p>
      </div>
      <div class="col-lg-3">
      <input type="button" value="Add" onclick="increase(three)">
        <input type="number" value="0" name="plastic" style="width:50%;" min="0" id="three">
        <input type="button" value="Substract" onclick="decrease(three)">
      </div>
  </div>
    <hr style="color: green; height: 2px;">
    <div class="row">
      <div class="col-lg-3 profile">
      </div>
      <div class="col-lg-3">
        <h3>Heavy iron</h3>
        <p>&#x20B9; <?php echo $hiron[6]?></p>
      </div>
      <div class="col-lg-3">
      <input type="button" value="Add" onclick="increase(four)">
        <input type="number" value="0" name="hiron" style="width:50%;" min="0" id="four">
        <input type="button" value="Substract" onclick="decrease(four)">
      </div>
  </div>
  <hr style="color: green; height: 2px;">
  <div class="row">
    <div class="col-lg-3 profile">
    </div>
    <div class="col-lg-3">
      <h3>light iron</h3>
      <p>&#x20B9; <?php echo $liron[7]?></p>
      <input type="hidden" name="cbest" value="<?php echo $liron[1]?>">
    </div>
    <div class="col-lg-3">
    <input type="button" value="Add" onclick="increase(five)">
      <input type="number" value="0" name="liron" style="width:50%;" min="0" id="five">
      <input type="button" value="Subtract" onclick="decrease(five)">
    </div>
</div>
<hr style="color: green; height: 2px;">
<div class="row">
  <div class="col-lg-3 profile">
  </div>
  <div class="col-lg-3">
    <h3>Glass</h3>
    <p>&#x20B9; <?php echo $glass[8]?></p>
  </div>
  <div class="col-lg-3">
  <input type="button" value="Add" onclick="increase(six)">
    <input type="number" value="0" name="glass" style="width:50%;" min="0" id="six">
    <input type="button" value="Substract" onclick="decrease(six)">
  </div>
</div>
<hr style="color: green; height: 2px;">
<div class="row">
    <div class="col-lg -3">
      <center><button class="btn-book" style="margin-bottom:5%;">Proceed to Checkout</button></center>
    </div>
</div>
</form>
  </div>
  <?php include 'footer.php'?>
  <script>
    function increase(x)
    {
      x=x.id;
      let val = parseInt(document.getElementById(x).value);
      document.getElementById(x).value=val+1;
    }
    function decrease(x)
    {
      x=x.id;
      let val = document.getElementById(x).value;
      if(val>0)
        document.getElementById(x).value=val-1;
    }
  </script>