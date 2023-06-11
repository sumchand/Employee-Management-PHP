<!DOCTYPE html>
<html>
<head>
    <title>Attendance</title>
    <style>
        body{
            background: rgb(3,2,20);
background: linear-gradient(90deg, rgba(3,2,20,1) 0%, rgba(7,41,51,1) 0%, rgba(92,116,122,1) 61%, rgba(100,127,133,1) 100%);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td {
            border: 1px solid black;
            padding: 5px;
            color:white;
        }
         th {
            border: 1px solid black;
            padding: 5px;
            color:#00CCFF;
        }
        label{
            color:white;
        }
        h1{
            color:#00CCFF;
        }
    </style>
</head>
<body>
    <h1>Attendance</h1>
    <form method="POST">
        <label for="email">Enter Email:</label>
        <input type="text" name="email" id="email" required>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>

    <?php
    include("connection.php");
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];


        // Query to fetch attendance data based on the email
        $sql = "SELECT * FROM employeeattendence WHERE Email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Attid</th><th>Email</th><th>Date</th><th>Is Present</th><th>Current Date</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['Attid'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Date'] . "</td>";
                echo "<td>" . $row['IsPresent'] . "</td>";
                echo "<td>" . $row['Currt'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No attendance data found for the given email.";
        }

        // Close the database connection
        $conn->close();
    }
    ?>
</body>
</html>
