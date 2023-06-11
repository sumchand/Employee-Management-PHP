<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Update User</h2>

    <?php
    include("connection.php");

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dep = $_POST['department'];
        $sal = $_POST['salary'];
        $pass = $_POST['password'];

        $updateQuery = "UPDATE empdetails SET EmployeeName = '$name', EmployeeEmail = '$email', Department = '$dep', salary = '$sal', Password = '$pass' WHERE EmpId = $id";
        mysqli_query($conn, $updateQuery);

        // Redirect back to user list after update
        header("Location: display.php");
        exit();
    }

    // Check if ID is provided in the URL
    if (isset($_GET['rn'])) {
        $id = $_GET['rn'];
        $query = "SELECT * FROM empdetails WHERE EmpId = $id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $name = $row['EmployeeName'];
            $email = $row['EmployeeEmail'];
            $dep = $row['Department'];
            $sal = $row['salary'];
            $pass = $row['Password'];
        } else {
            echo "User not found.";
            exit();
        }
    } else {
        echo "Invalid request.";
        exit();
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Employee Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>"><br><br>
        <label for="email">Employee Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>"><br><br>
        <label for="department">Employee Department:</label>
        <input type="text" name="department" id="department" value="<?php echo $dep; ?>"><br><br>
        <label for="salary">Employee Salary:</label>
        <input type="text" name="salary" id="salary" value="<?php echo $sal; ?>"><br><br>
        <label for="password">Employee Password:</label>
        <input type="password" name="password" id="password" value="<?php echo $pass; ?>"><br><br>
        <input type="submit" value="Update">
    </form>

    <?php
    // Close the database connection
    mysqli_close($conn);
    ?>
</body>
</html>
