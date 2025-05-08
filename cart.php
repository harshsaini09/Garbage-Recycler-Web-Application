<?php
    include 'navbar.php';
    $conn = mysqli_connect('localhost','root','','garbage_db');
    $carton = mysqli_fetch_row(mysqli_query($conn,'SELECT * FROM junk_man ORDER BY carton DESC limit 1'));
    $paper = mysqli_fetch_row(mysqli_query($conn,'SELECT * FROM junk_man ORDER BY paper DESC limit 1'));
    $plastic = mysqli_fetch_row(mysqli_query($conn,'SELECT * FROM junk_man ORDER BY plastic DESC limit 1'));
    $hiron = mysqli_fetch_row(mysqli_query($conn,'SELECT * FROM junk_man ORDER BY hiron DESC limit 1'));
    $liron = mysqli_fetch_row(mysqli_query($conn,'SELECT * FROM junk_man ORDER BY liron DESC limit 1'));
    $glass = mysqli_fetch_row(mysqli_query($conn,'SELECT * FROM junk_man ORDER BY glass DESC limit 1'));

    if((!isset($_SESSION['uid']) || empty($_SESSION['uid'])) && (!isset($_SESSION['jid']) || empty($_SESSION['jid'])))
    {
        header("Location: log_in.php");
    }
?>
  <div class="main">
  <div class="container">
      <div class='row'>
          <div class='col-3 col-lg-3'>
            <h3>Item</h3>
          </div>
          <div class='col-3 col-lg-3'>
            <h3>Qty.(Kg.)</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>Rate</h3>
        </div>
        <div class='col-2 col-lg-2'>
            <h3>Total amount</h3>
        </div>
        <div class='col-2 col-lg-2'>
            <h3>Best Price By</h3>
        </div>
      </div>
      <hr style="color: green; height: 2px;">
    <?php
    $url="customerid=".$_SESSION['uid']."&";
    $c=$_POST['carton'];
    $tq=0;
    $tr=0;
    $tta=0;
    if($c!=0){
    $url=$url."item1=carton&cartonQty=".$c."&cartonSid=".$carton[0]."&cartonRate=".$carton[3];
    $t = $c*$carton[3];
    $tq+=$c;
    $tr+=$carton[3];
    $tta+=$t;
     echo "<div class='row'>
          <div class='col-3 col-lg-3'>
            <h3>Carton</h3>
          </div>
          <div class='col-3 col-lg-3'>
            <h3>$c</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>₹$carton[3]</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>₹$t</h3>
          </div>
          <div class='col-2 col-lg-2'>
          <h3>$carton[1]</h3>
      </div>
      </div>";
    }
    $c=$_POST['paper'];
    if($c!=0){
      $url=$url."&item2=paper&paperQty=".$c."&paperSid=".$paper[0]."&paperRate=".$paper[4];
      $t = $c*$paper[4];
      $tq+=$c;
      $tr+=$paper[4];
      $tta+=$t;
     echo "<div class='row'>
          <div class='col-3 col-lg-3'>
            <h3>Paper</h3>
          </div>
          <div class='col-3 col-lg-3'>
            <h3>$c</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>₹$paper[4]</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>₹$t</h3>
          </div>
          <div class='col-2 col-lg-2'>
          <h3>$paper[1]</h3>
      </div>
      </div>";
    }
    $c=$_POST['plastic'];
    if($c!=0){
      $url=$url."&item3=plastic&plasticQty=".$c."&plasticSid=".$plastic[0]."&plasticRate=".$plastic[5];
      $t = $c*$plastic[5];
      $tq+=$c;
      $tr+=$plastic[5];
      $tta+=$t;
      echo "<div class='row'>
          <div class='col-3 col-lg-3'>
            <h3>Plastic</h3>
          </div>
          <div class='col-3 col-lg-3'>
            <h3>$c</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>₹$plastic[5]</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>₹$t</h3>
          </div>
          <div class='col-2 col-lg-2'>
          <h3>$plastic[1]</h3>
      </div>
      </div>";
    }
    $c=$_POST['hiron'];
    if($c!=0){
      $url=$url."&item4=HeavyIron&hironQty=".$c."&hironSid=".$hiron[0]."&hironRate=".$hiron[6];
      $t = $c*$hiron[6];
      $tq+=$c;
      $tr+=$hiron[6];
      $tta+=$t;
     echo "<div class='row'>
          <div class='col-3 col-lg-3'>
            <h3>High Iron</h3>
          </div>
          <div class='col-3 col-lg-3'>
            <h3>$c</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>₹$hiron[6]</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>₹$t</h3>
          </div>
          <div class='col-2 col-lg-2'>
          <h3>$hiron[1]</h3>
      </div>
      </div>";
    }
    $c=$_POST['liron'];
    if($c!=0){
      $url=$url."&item5=LightIron&lironQty=".$c."&lironSid=".$liron[0]."&lironRate=".$liron[7];
      $t = $c*$liron[7];
      $tq+=$c;
      $tr+=$liron[7];
      $tta+=$t;
     echo "<div class='row'>
          <div class='col-3 col-lg-3'>
            <h3>Light Iron</h3>
          </div>
          <div class='col-3 col-lg-3'>
            <h3>$c</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>₹$liron[7]</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>₹$t</h3>
          </div>
          <div class='col-2 col-lg-2'>
          <h3>$liron[1]</h3>
      </div>
      </div>";
    }
    $c=$_POST['glass'];
    if($c!=0){
      $url=$url."&item6=Glass&glassQty=".$c."&glassSid=".$glass[0]."&glassRate=".$glass[8];
      $t = $c*$glass[8];
      $tq+=$c;
      $tr+=$glass[8];
      $tta+=$t;
     echo "<div class='row'>
          <div class='col-3 col-lg-3'>
            <h3>Glass</h3>
          </div>
          <div class='col-3 col-lg-3'>
            <h3>$c</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>₹$glass[8]</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>₹$t</h3>
          </div>
          <div class='col-2 col-lg-2'>
            <h3>$glass[1]</h3>
        </div>
      </div>";
    }
      ?>
    <div class="row">
        <div class="col-3 col-lg-3">
        <h3>Total</h3>
        </div>
        <div class="col-3 col-lg-3">
        <h3><?php echo $tq?></h3>
        </div>  
        <div class="col-2 col-lg-2">
        <h3>₹<?php echo $tr?></h3>
      </div>
    <div class="col-2 col-lg-2">
        <h3>₹<?php echo $tta?></h3>
    </div>
    <div class="col-2 col-lg-2">
        
    </div>
    </div>
    <div class="row">
</div>
<center><a <?php echo "href=checkout.php?".$url?>><button onclick="submit()" class="btn-book" id="checkoutBtn">Checkout</button></a></center>
</div>
</div>
<?php include 'footer.php'?>
