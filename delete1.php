<?php
include("connection.php");
error_reporting(0);
$rollno =$_GET['rn'];
echo rn;
$query = "DELETE FROM empdetails WHERE EmpId = '$rollno'";
$data = mysqli_query($conn, $query);
if($data)
{
    echo "Recods are delete from data base";
}
else{
    echo " Records are not deleted";
}
?>