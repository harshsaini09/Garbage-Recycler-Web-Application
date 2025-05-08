<?php
    $conn = mysqli_connect("localhost","root","","garbage_db");
    if(isset($_GET['item1']))
    {
        $item = $_GET['item1'];
        $one = $_GET['customerid'];
        $two = $_GET['cartonSid'];
        $three = $_GET['cartonQty'];
        $four=$_GET['cartonRate'];
        mysqli_query($conn,"insert into orders values(DEFAULT,$one,$two,DEFAULT,'$item',$three,$four,DEFAULT)");
    }
    if(isset($_GET['item2']))
    {
        $item = $_GET['item2'];
        $one = $_GET['customerid'];
        $two = $_GET['paperSid'];
        $three = $_GET['paperQty'];
        $four=$_GET['paperRate'];
        if(mysqli_query($conn,"insert into orders values(DEFAULT,$one,$two,DEFAULT,'$item',$three,$four,DEFAULT)"))
        {
            echo "Item2";
        }   
    }
    if(isset($_GET['item3']))
    {
        $item = $_GET['item3'];
        $one = $_GET['customerid'];
        $two = $_GET['plasticSid'];
        $three = $_GET['plasticQty'];
        $four=$_GET['plasticRate'];
        if(mysqli_query($conn,"insert into orders values(DEFAULT,$one,$two,DEFAULT,'$item',$three,$four,DEFAULT)"))
        {
            echo "Item3";
        }   
    }
    if(isset($_GET['item4']))
    {
        $item = $_GET['item4'];
        $one = $_GET['customerid'];
        $two = $_GET['hironSid'];
        $three = $_GET['hironQty'];
        $four=$_GET['hironRate'];
        if(mysqli_query($conn,"insert into orders values(DEFAULT,$one,$two,DEFAULT,'$item',$three,$four,DEFAULT)"))   
        {
            echo "Item4";
        }
    }
    if(isset($_GET['item5']))
    {
        $item = $_GET['item5'];
        $one = $_GET['customerid'];
        $two = $_GET['lironSid'];
        $three = $_GET['lironQty'];
        $four=$_GET['lironRate'];
        if(mysqli_query($conn,"insert into orders values(DEFAULT,$one,$two,DEFAULT,'$item',$three,$four,DEFAULT)"))         
        {
            echo "Item5";
        }
    }
    if(isset($_GET['item6']))
    {
        $item = $_GET['item6'];
        $one = $_GET['customerid'];
        $two = $_GET['glassSid'];
        $three = $_GET['glassQty'];
        $four=$_GET['glassRate'];
        if(mysqli_query($conn,"insert into orders values(DEFAULT,$one,$two,DEFAULT,'$item',$three,$four,DEFAULT)"))
        {
            echo "Item6";
        }   
    }  
?>
<script>
    alert("Your Order Received Successfully!!");
    location.assign("index.php");
</script>