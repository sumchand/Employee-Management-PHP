<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        body{
            background: rgb(3,2,20);
background: linear-gradient(90deg, rgba(3,2,20,1) 0%, rgba(7,41,51,1) 0%, rgba(92,116,122,1) 61%, rgba(100,127,133,1) 100%);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

         td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color:white;
        }
            th {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color:#00CCFF;
        }
        a{
            color:white;
        }
    </style>
</head>
<body>
    <h2 style="color: #00CCFF;">User List</h2>


    <table style =" border: 2px solid black;">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Department</th>
            <th>Salary</th>
            <th>password</th>
            <th colspan="2" allign="center">Operations</th>
        </tr>
        

        <?php
       include("connection.php");
               // Query to retrieve data from the database
        $qq = "SELECT * FROM  empdetails
        ";
        $result = mysqli_query($conn, $qq);

        if (mysqli_num_rows($result) > 0) {
            // Loop through each row
            while ($row = mysqli_fetch_assoc($result)) {
                // Access individual columns using $row['column_name']
                $id = $row['EmpId'];
                $name = $row['EmployeeName'];
                $email = $row['EmployeeEmail'];
                $dep = $row['Department'];
                $sal = $row['salary'];
                $pass = $row['Password'];
        
                // Do something with the data (e.g., display it)
             
                echo "<tr>
                <td>".$id."</td>
                <td>".$name."</td>
                <td>".$email."</td>
                <td>".$dep."</td>
                <td>".$sal."</td>
                <td>".$pass."</td>
                <td><a href = 'update1.php?rn=$row[EmpId]& fn=$row[EmployeeName]& jn = $row[EmployeeEmail] & ja = $row[Department] & jb = $row[salary]& jc = $row[Password] '>Update</a></td>
                <td><a href = 'delete1.php?rn=$row[EmpId]'>Delete</a></td>";
            }
        } else {
            echo "No results found.";
        }
        // Close the database connection
        $mysqli->close();
        ?> 
    </table>
</body>
</html>