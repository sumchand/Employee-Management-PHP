<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
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

    .container button {
      display: block;
      margin-bottom: 10px;
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
    <h2>Admin Dashboard</h2>
   <a href = "display.php"> <button onclick="getEmployeeDetails()">Get Employee Details</button></a>
    <a href="add.php"><button onclick="addEmployee()">Add Employee</button></a>
    <a href="attendence.php"><button>View Attendance</button></a>
    <a href="har.pdf"><button onclick="addEmployee()">Add Notice</button></a>
    <a href="holiday.php"><button onclick="addEmployee()">Add Holidays</button></a>
  </div>

  <script>
    function getEmployeeDetails() {
      // Implement the logic to retrieve employee details here
      alert("Retrieving employee details...");
    }

    function addEmployee() {
      // Implement the logic to add an employee here
      alert("Adding an employee...");
    }
  </script>
</body>
</html>
<?php



session_start();

if(isset($_SESSION['email']))
{
    $email = $_SESSION['email'];
    echo "Email: " . $email;
}
else
{
  header('location:login1.php');
}


?>