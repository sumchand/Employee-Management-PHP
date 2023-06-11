<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      background: rgb(3,2,20);
background: linear-gradient(90deg, rgba(3,2,20,1) 0%, rgba(7,41,51,1) 0%, rgba(92,116,122,1) 61%, rgba(100,127,133,1) 100%);
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      background-color: #fff;
    }

    .container h2 {
      text-align: center;
    }

    .container label {
      display: block;
      margin-bottom: 10px;
    }

    .container input[type="email"],
    .container input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
      margin-bottom: 20px;
    }

    .container select {
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
    <h2>Login</h2>
    <form method="post">
      <label for="employeeId">Employee Email</label>
      <input type="email" id="employeeId" name="uno" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="Pwd" required>

      <label for="userType">User Type:</label>
      <select id="userType" name="role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>

      <button type="submit" name="login">Login</button>
    </form>
  </div>
</body>
</html>

<?php
include("connection.php");

if(isset($_POST['login']))
{
    $uno = $_POST['uno'];
    $Pwd = $_POST['Pwd'];
    $user =$_POST['role'];
    
    $qq = "SELECT * FROM empdetails WHERE EmployeeEmail = '$uno' && Password ='$Pwd'";
    
    $dot = mysqli_query($conn, $qq);
    $tot1 = mysqli_num_rows($dot);
    echo $tot1;

    $qqq = "SELECT * FROM adminn WHERE Email = '$uno' && Password ='$Pwd'";
    $dott = mysqli_query($conn, $qqq);
    $tot11 = mysqli_num_rows($dott);
    echo $tot1;


    
    if($tot1 ==1  && $user == 'user')
    {
      session_start();
      $_SESSION['email'] = $uno; // Storing email in session variable
      header('location:dap.php');
      exit(); // Add this line to prevent further execution of the script
  }
  
    if($tot11 ==1  && $user == 'admin')
    {
      session_start();
      $_SESSION['email'] = $uno; // Storing email in session variable
      header('location:admin.php');
      exit(); // Add this line to prevent further execution of the script
  }
    else{
       // echo "login fail";
    }
  

}