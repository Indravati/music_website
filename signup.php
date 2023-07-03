<?php
session_start();

include('db_connect.php');


$msg = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$user_name =$_POST['user_name'];
$user_email =$_POST['user_email'];
$user_password =$_POST['user_password'];
$user_re_password=$_POST['user_re_password'];
}

if (!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)) {
if($user_password === $user_re_password) {
$query="insert into user1 (user, email, password) VALUES ('$user_name','$user_email','$user_password')";
mysqli_query($conn, $query);
header("Location: index.php");
}
else{
  $msg="Password Not Match";
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
    <title>Music Website SignUp</title>
</head>
<body>
    <header>
      <div class="left_bx1">
        <div class="content">
            <form method="post">
                <h3>SignUp</h3>
                <div class="card">
                  <label for="name" >Name</label>
                  <input type="text" name="user_name" placeholder="Enter your Username...." required>
                </div>
                <div class="card">
                    <label for="email" >Email</label>
                    <input type="email" name="user_email" placeholder="Enter your Email...." required>
                  </div>
                <div class="card">
                  <label for="password" >password</label>
                  <input type="password" name="user_password" placeholder="Enter your Password...." required>
                </div>
                <div class="card">
                    <label for="Re-password" >Re-password</label>
                    <input type="password" name="user_re_password" placeholder="Enter your Re-Password...." required>
                  </div>
                <input type="submit" value="SignUp" class="submit">
                <div class="check">
                  <input type="checkbox" name=""  id="" ><span> Remember Me</span>
                </div>
                <p>you have a account?<a href="index.php">Login</a></p>
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