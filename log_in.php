<?php
    session_start();
    if(isset($_SESSION['uid']) && !empty($_SESSION['uid']) || isset($_SESSION['jid']) && !empty($_SESSION['jid']))
    {
        header("Location: index.php");
    }
?>
<?php   
    $msg = "";
    if(isset($_POST['submit']))
    {
        $conn = mysqli_connect ('localhost','root','','garbage_db');
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $pass = md5($pass);
        $query = "Select * from users where name = '$name' and pass = '$pass'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            $row = mysqli_fetch_row($result);

            if($row[3]==0)
            {
                $_SESSION['uid']=$row[0];
            }
            else
            {
                $_SESSION['jid']=$row[0];
            }
            header('Location: index.php');
            exit();
        }
        else
        {
            $msg = "Wrong Details Entered!!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/sign_up.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>BYE BYE JUNK</title>
</head>
<body>
    <div class="container">
        <div class="row main d-flex justify-content-center">
            <div class="col-12 col-lg-6">
                <img src="Style\Resources\Logo.png" alt="..." style="display: block; margin-left: auto; margin-right: auto; width: 90%;">
            </div>
            <div class="col-12 col-lg-6">
            <h1 style="font-family: Georgia, serif; weight: bold;">BYE BYE JUNK</h1>
            <h4 style="font-family: Georgia, serif; weight: bold;">Recycle today for a better tomorrow !</h4>
            <form method="post" action="log_in.php" class="form">
                    <div class="mb-3 mt-3">
                      <!-- <label for="email" class="form-label">Email:</label> -->
                      <input type="text" value="" class="form-control" placeholder="Name" name="name" required>
                    </div>
                    <div class="mb-3">
                      <!-- <label for="pwd" class="form-label">Password:</label> -->
                      <input type="password" value="" class="form-control"placeholder="Password" name="pass" required>
                    </div>
                    <div class="form-check mb-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                      </label>
                    </div>
                    <div style="font-weight:bolder;color:red"><?php echo "$msg";?></div>
                    <button name="submit" class="btn btn-primary">Log In</button><br>
                    <a href="sign_up.php" class="CNA">Create New account</a>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>