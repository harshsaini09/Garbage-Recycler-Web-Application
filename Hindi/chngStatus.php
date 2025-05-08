<?php
    session_start();
    $con=mysqli_connect("localhost","root","","garbage_db");
    $id=$_GET['id'];
    echo $id."<br>";
    $result=mysqli_query($con,"UPDATE orders SET status=1 WHERE order_id=$id");
    echo "UPDATE orders SET status=1 WHERE order_id=$id";
    
    header("Location: junkorder.php");
    exit();
?>