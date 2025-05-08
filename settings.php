<?php
    session_start();
    if(isset($_SESSION['uid']) && !empty($_SESSION['uid']))
    {
        header("Location: usettings.php");
    }
    else
    {
        header("Location: gsettings.php");
    }
?>