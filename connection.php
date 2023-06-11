<?php
error_reporting(0);
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    //echo "connection ok";
}
else{
    echo "connection failed";
}
?>