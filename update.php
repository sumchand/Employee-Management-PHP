<!DOCTYPE html>
<html>
<head>
  <title>Employee Information</title>
  <style>
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    .container h2 {
      text-align: center;
    }

    .container label {
      display: block;
      margin-bottom: 10px;
    }

    .container input[type="text"],
    .container input[type="email"],
    .container input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
      margin-bottom: 20px;
    }

    .container button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .container button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Update Employee Information</h2>
    <form method ="post">
      <label for="employeeId">Employee ID:</label>
      <input type="text"  id="employeeId" name="employeeId" required>

      <label for="email">Email:</label>
      <input type="email"  id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="text" id="password" name="pass" required>

      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>

<?php
include("connection.php");
error_reporting(0);
$rollno =$_GET['rn'];
if(isset($_POST['pass']))
  {
    $f = $_POST["employeeId"];
    $ff = $_POST["email"];
    $fff = $_POST["pass"];
    $q = "UPDATE harshit SET EmpId = '$f', Email = '$ff', Password = '$fff' WHERE EmpId = $f";
    $data = mysqli_query($conn, $q);


  
  if($data)
  {
      echo "data inserted";
  }
  else{
      echo "failed";
  }
}
   
    
   


   
   




?>