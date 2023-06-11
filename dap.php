<!DOCTYPE html>
<html>
<head>
  <title>Employee Dashboard</title>
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
    }

    .container h2 {
      text-align: center;
    }

    .container input[type="email"],
    .container input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
      margin-bottom: 20px;
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

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table td, table th {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      color:white;
    }

    table th {
      background-color: #4CAF50;
      color: white;
    }
    h3{
      color:white;
    }
  </style>
</head>
<body>

<div class="log">
<form method="post" action="logout.php">
      <button type="submit" name="logout">Logout</button>
    </form>
</div>
  <div class="container">
    <h2 style="color:white">Employee Dashboard</h2>
    
    <!-- Logout button -->
   

    <form method="post">
      <button type="submit" name="att">Mark Attendance</button>
    </form>
    <form method="post">
      <button type="submit" name="view">View Employee Details</button>
    </form>
    <form method="post">
    <button onclick="viewHolidays()" name ="vieww">View Holidays</button>
    </form>
    <form method="post">
    <a href="har.pdf" target="_blank"><button><a href="har.pdf" target="_blank">View Notice</a></button>
</form>
  </div>

  <script>
    function viewHolidays() {
      // Implement the logic for viewing holidays here
      alert("Viewing holidays...");
    }

    function viewNotices() {
      // Implement the logic for viewing notices here
      alert("Viewing notices...");
    }

    // Function to set default view as Holidays and Notices
    function setDefaultView() {
      // Implement the logic to set the default view here
    }

    // Call the function to set the default view
    setDefaultView();
  </script>
</body>
</html>


<?php
include("connection.php");
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

if(isset($_POST['att']))
{
    $email = $_SESSION['email']; // Retrieve email from session
    $q = "INSERT INTO employeeattendence (Email, Date, IsPresent, Currt) VALUES ('$email',CURDATE() , 1,CURTIME())";
    $data = mysqli_query($conn, $q);
    if($data)
    {
        echo "<script>alert('Attendance marked successfully.');</script>";
    }
    else
    {
        echo "<script>alert('Attendance for today has already been marked.');</script>";
    }
}

if(isset($_POST['view']))
{
    $email = $_SESSION['email']; // Retrieve email from session
    $q = "SELECT * FROM empdetails WHERE EmployeeEmail = '$email'";
    $result = mysqli_query($conn, $q);

    if(mysqli_num_rows($result) > 0)
    {
        echo "<table>";
        echo "<tr><th>Name</th><th>Email</th><th>Department</th><th>Salary</th></tr>";

        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>" . $row['EmployeeName'] . "</td>";
            echo "<td>" . $row['EmployeeEmail'] . "</td>";
            echo "<td>" . $row['Department'] . "</td>";
            echo "<td>" . $row['salary'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo '<button onclick="document.execCommand(\'copy\')">Cut</button>';
    }
    else
    {
        echo "No employee details found.";
    }
}

if(isset($_POST['vieww']))
{


  $q = "SELECT * FROM holiday";
  $result = mysqli_query($conn, $q);

  if(mysqli_num_rows($result) > 0) {
      echo "<h3>Holidays</h3>";
      echo "<table>";
      echo "<tr><th>Month</th><th>Date</th><th>Description</th></tr>";

      while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['Month'] . "</td>";
          echo "<td>" . $row['Date'] . "</td>";
          echo "<td>" . $row['Description'] . "</td>";
          echo "</tr>";
      }

      echo "</table>";
  } else {
      echo "No holidays found.";
  }

}
?>
