<!DOCTYPE html>
<html>
<head>
  <title>Employee Information</title>
  <style>
    body{
      background: rgb(3,2,20);
background: linear-gradient(90deg, rgba(3,2,20,1) 0%, rgba(7,41,51,1) 0%, rgba(92,116,122,1) 61%, rgba(100,127,133,1) 100%);
    }
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
      color:white;
    }

    .container input[type="text"],
    .container input[type="email"],
    .container input[type="password"],
    .container input[type="number"] {
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
    <h2>Add Employee Information</h2>
    <form method="post">

    
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="department">Department:</label>
      <input type="text" id="department" name="department" required>

      <label for="salary">Salary:</label>
      <input type="number" id="salary" name="salary" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="pass" required>
     

    

      <button type="submit" name="sub">Add</button>
    </form>
  </div>
</body>
</html>

<?php
include("connection.php");
if(isset($_POST['sub']))
{
    $email = $_POST["email"];
    $name = $_POST["name"];
    $department = $_POST["department"];
    $salary = $_POST["salary"];
    $password = $_POST["pass"];
    
   
    
   
    $query = "INSERT INTO empdetails ( EmployeeName,EmployeeEmail, Department, salary, Password) 
              VALUES ( '$name',  '$email',  '$department' , '$salary', '$password')";
    $data = mysqli_query($conn, $query);
    if($data)
    {
        echo "Data inserted successfully.";
    }
    else{
        echo "Failed to insert data.";
    }
}
?>
