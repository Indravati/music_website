<?php
session_start();
include('db_connect.php');

$msg=false;
if(isset($_POST['user_name'])){
  $user_name=$_POST['user_name'];
$user_password =$_POST['user_password'];

$query="select * from user1 where user ='".$user_name."' AND password='".$user_password."' limit 1";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result)==1) {
  header('Location:welcome.php');
} else {
  $msg="Incorrect password";
}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style4.css">
    <title>Music Website Login</title>
</head>

<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h3>Login</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter your Usersname...." required>
                    </div>
                    <div class="card">
                        <label for="password">password</label>
                        <input type="password" name="user_password" placeholder="Enter your password...." required>
                    </div>
                    <input type="submit" value="Login" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id=""><span> Remember Me</span>
                    </div>
                    <p>Don't have an account?<a href="signup.php"> SignUp</a></p>
                </form>
            </div>
        </div>
        <div class="right_bx1">
            <img src="login_png.jpg" alt="">
            <!-- <h3>Incorrect password </h3> -->
            <?php

        echo('<h3>'.$msg.'</h3>');
        ?>
        </div>
    </header>
</body>

</html>