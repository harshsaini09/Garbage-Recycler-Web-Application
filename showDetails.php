<?php
    include "navbar.php";

    $con=mysqli_connect("localhost","root","","garbage_db");
    $result=mysqli_query($con,"select * from usettings where id=".$_GET['id']);
    
    $row=mysqli_fetch_row($result);
?>
    <div class="container" style="height: 40vh; margin-top: 15%;">
        <div class="row" style="text-align:center;">
            <div class="col-12 col-lg-6" style="border: 2px solid black;">
                <?php echo "<h3 style='width: 50%; margin:0 auto;'>Contant Number:$row[1]</h3>"?>
            </div>
            <div class="col-12 col-lg-6" style="border: 2px solid black;">
                <?php echo "<h3 style='width: 50%; margin:0 auto;'>Address:$row[1]</h3>"?>
            </div>
        </div>
    </div>
<?php
    include "footer.php";
?>