<?php

$server_name="localhost";
$user_name='root';
$user_pass='';
$database_name='music1_user';
$conn= mysqli_connect($server_name,$user_name,$user_pass,$database_name);
if (!$conn) {
    die('connection failed'.mysql_error());
}

// else{
//     echo('Database successfully Connected');
// }

?>