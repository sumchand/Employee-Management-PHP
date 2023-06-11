<!DOCTYPE html>
<html>
<head>
  <title>Add Holiday</title>
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

    .container input[type="text"],
    .container textarea {
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
    h2{
        color:white;
    }

    .container button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Add Holiday</h2>
    
    <form method="post" >
      <input type="text" name="month" placeholder="Month" required>
      <input type="date" name="date" placeholder="Date" required>
      <textarea name="description" placeholder="Description" required></textarea>
      <button type="submit" name="submit">Add Holiday</button>
    </form>
  </div>
</body>
</html>

<?php
// Connection details
include("connection.php");

if (isset($_POST['submit'])) {
    $month = $_POST['month'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    // Prepare the SQL statement
    $sql = "INSERT INTO holiday (Month, Date, Description) VALUES ('$month', '$date', '$description')";

    $data = mysqli_query($conn, $sql);
    if($data)
    {
        echo "Data inserted successfully.";
    }
    else{
        echo "Failed to insert data.";
    }
}

// Close the database connection
$conn->close();
?>

