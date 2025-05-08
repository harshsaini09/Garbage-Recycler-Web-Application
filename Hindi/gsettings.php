<?php include 'navbar.php'?>
<?php
    $con=mysqli_connect("localhost","root","","garbage_db");
    $result=mysqli_query($con,"select * from junk_man where id=".$_SESSION['jid']);
    $row=mysqli_fetch_row($result);
    $msg="";
    $arrext = array();
    if(isset($_POST['gsettings']))
    {
        $mobile=$_POST['mobile'];
        $cprice=$_POST['cprice'];
        $pprice=$_POST['pprice'];
        $plprice=$_POST['plprice'];
        $hprice=$_POST['hprice'];
        $lprice=$_POST['lprice'];
        $gprice=$_POST['gprice'];
        $iname = $_FILES["photo"]["name"];
        $itype = $_FILES["photo"]["type"];
        $isize = $_FILES["photo"]["size"];
        $tname = $_FILES["photo"]["tmp_name"];
        $t = uniqid();
        $arrext = explode('.',$iname);
        $ext = end($arrext);
        move_uploaded_file($tname,"img/".$t.".".$ext);
        $Jphoto = "img/".$t.".".$ext;
        $id=$_SESSION['jid'];
        mysqli_query($con,"update junk_man set number=$mobile, carton=$cprice, paper=$pprice, plastic=$plprice,hiron=$hprice,liron=$lprice,glass=$gprice,Photo='$Jphoto' where id=$id");
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
    <form method='post' action="gsettings.php" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="mobile" class="form-label">Mobile Nuber</label>
        <input type="number" class="form-control" value="<?php echo $row[2] ?>" name="mobile">
    </div>
    <div class="mb-3">
        <label for="carton" class="form-label">Carton Price</label>
        <input type="number" class="form-control" value="<?php echo $row[3] ?>" name="cprice">
    </div>
    <div class="mb-3">
        <label for="paper" class="form-label">Paper Price</label>
        <input type="number" class="form-control" value="<?php echo $row[4] ?>" name="pprice">
    </div>
    <div class="mb-3">
        <label for="plastic" class="form-label">Plastic Price</label>
        <input type="number" class="form-control" value="<?php echo $row[5] ?>" name="plprice">
    </div>
    <div class="mb-3">
        <label for="hiron" class="form-label">Heavy Iron Price</label>
        <input type="number" class="form-control" value="<?php echo $row[6] ?>" name="hprice">
    </div>
    <div class="mb-3">
        <label for="liron" class="form-label">Light Iron Price</label>
        <input type="number" class="form-control" value="<?php echo $row[7] ?>" name="lprice">
    </div>
    <div class="mb-3">
        <label for="glass" class="form-label">Glass Price</label>
        <input type="number" class="form-control" value="<?php echo $row[8] ?>" name="gprice">
    </div>
    <div class="mb-3">
        <label for="carton" class="form-label">Photo</label>
        <input type="file" class="form-control" value="<?php echo $row[8] ?>" name="photo">
    </div>
    <input type="submit" class="btn btn-primary" name="gsettings" value="save">
</form>
    </div>
    <div class="col-lg-3"></div>
    </div>
    <br>
</div>
<?php echo $msg?>
<?php include 'footer.php'?>