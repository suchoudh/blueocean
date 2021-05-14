<?php
$msg = '';
session_start();
if(isset($_SESSION["login"]))
{
  header ('location: post.php');
}
   include ('connection.php');
    if(isset($_POST['login']))
    {
     $username = $_POST['username'];
     $password = $_POST['password'];
    
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
    
       $_SESSION["login"] = "loging_blueocean"; 
       header ('location: post.php');
    
    }
    else {
        $msg = "Credentials do not match";
    }
}

?>

<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4"> 
                    <a href='../index.php'>                  
                        <img class="logo" src="images/logo.png">  
                    </a>                     
                        <!-- <h3 class="heading">Admin</h3> -->
                        <!-- Form Start -->
                        <form  action="" method ="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="" required>
                                <span style="color:red; font-weight: 600; display: block; margin-top: 10px;"> <?php echo $msg; ?> </span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-primary" value="login" />
                        </form>
                    
                        <!-- /Form  End -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
