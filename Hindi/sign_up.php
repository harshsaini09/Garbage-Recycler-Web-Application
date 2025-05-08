<?php
    session_Start();
    if(isset($_SESSION['sid']) && !empty($_SESSION['sid']))
    {
        header("Location: index.html");
    }
?>
<?php
    $msg="";
    if(isset($_POST['submit']))
    {
        $conn = mysqli_connect ('localhost','root','','garbage_db');
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $type = $_POST['signupas'];
        if($conn) 
        {
            if($pass == $cpass)
            {
                $pass=md5($pass);
                $sql = "INSERT INTO users VALUES (DEFAULT,'$name', '$pass','$type')";
                if(mysqli_query($conn, $sql))
                {
                    $msg="Signed Up Successfully!!";
                    if($type==1)
                    {
                        $id=$conn->insert_id;
                        mysqli_query($conn, "INSERT INTO junk_man (id,name) values ($id,'$name')");
                    }
                    else
                    {
                        $id=$conn->insert_id;
                        mysqli_query($conn, "INSERT INTO usettings (id) values ($id)");
                    }
                    echo "<script>
                        setTimeout(redirect,2000);
                        function redirect(){
                            location.assign('log_in.php');
                        }
                    </script>";
                }
                else
                {
                    if(mysqli_errno($conn)==1062)
                    {
                        $msg="This Name is Taken!! Choose Another";
                    }
                }
            }
            else
            {
                echo 'Password not same';
            }
        }
        else
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        $conn->close();
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
    <!-- <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 block">
                <h1>/harshsaini</h1>
                <h4>IF YOU good at something</h4>
            </div>
            <div class="col-12 col-lg-6 block">
                <div class="box">
                    <label>Name</label>
                    <input type="text" id="name" placeholder="Name">
                    <label>Email</label>
                    <input type="email" id="email" placeholder="Email">
                </div>
            </div>
        </div>
    </div> -->
    <div class="container">
        <div class="row main d-flex justify-content-center">
            <div class="col-6 col-lg-6">
                <img src="Style\Resources\Logo.png" style="display: block; margin-left: auto; margin-right: auto; width: 90%;">
            </div>
            <div class="col-6 col-lg-6">
                <h1 style="font-family: Georgia, serif; weight: bold;">BYE BYE JUNK</h1>
                <h4 style="font-family: Georgia, serif; weight: bold;">Recycle today for a better tomorrow</h4>
            <form method="post" action="sign_up.php" class="form">
                    <div class="mb-3 mt-3">
                      <!-- <label for="email" class="form-label">Email:</label> -->
                      <input type="text" value="" class="form-control" placeholder="Name" name="name" required>
                    </div>
                    <div class="mb-3">
                      <!-- <label for="pwd" class="form-label">Password:</label> -->
                      <input type="password" value="" class="form-control" placeholder="Password" name="pass" required>
                    </div>
                    <div class="mb-3">
                      <!-- <label for="pwd" class="form-label">Password:</label> -->
                      <input type="password" value="" class="form-control"placeholder="Confirm Password" name="cpass" required>
                    </div>
                    <label class="form-check-label">
                        SingUp As:
                        <select name="signupas">
                            <option value="0">User</option>
                            <option value="1">Junk Man</option>
                        </select>
                    </label>
                    <div style="font-weight:bolder;color:lime"><?php echo "$msg";?></div>
                    <button name="submit" class="btn btn-primary">Create Acoount</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>