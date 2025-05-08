<?php include 'navbar.php'?>
<?php
    $con=mysqli_connect("localhost","root","","garbage_db");
    $result=mysqli_query($con,"select * from usettings where id=".$_SESSION['uid']);
    $row=mysqli_fetch_row($result);
    $msg="";
    if(isset($_POST['usettings']))
    {
        $id=$_SESSION['uid'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        mysqli_query($con,"update usettings set contact=$mobile, address='$address' where id=$id");
        $msg="UPDATED SUCCESSFFULLY";
    }
?>
<div class="container">
    <div class="h1 text-center">
        Your Prices
    </div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
    <form method='post' action="usettings.php">
    <div class="mb-3">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="number" class="form-control" value="<?php echo $row[1] ?>" name="mobile">
    </div>
    <div class="mb-3">
        <label for="carton" class="form-label">Address</label>
        <input type="text" class="form-control" value="<?php echo $row[2] ?>" name="address">
    </div>
    <input type="submit" class="btn btn-primary" name="usettings" value="save">
</form>
    </div>
    <?php echo $msg?>
    <div class="col-lg-3"></div>
    </div>
    <br>
</div>
<?php include 'footer.php'?>