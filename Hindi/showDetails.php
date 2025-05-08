<?php
    include "navbar.php";

    $con=mysqli_connect("localhost","root","","garbage_db");
    $result=mysqli_query($con,"select * from usettings where id=".$_GET['id']);
    
    $row=mysqli_fetch_row($result);
?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php echo "<h1>Contant No.:$row[1]</h1>"?>
            </div>
            <div class="col-6">
                <?php echo "<h1>Address:$row[1]</h1>"?>
            </div>
        </div>
    </div>
<?php
    include "footer.php";
?>