<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <style>
/* Styling for the label */
label {
  display: block;
  margin-bottom: 5px;
}

/* Styling for the input field */
input[type="email"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Styling for the submit button */
button[type="submit"] {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

    </style>
  <body>
  <form Method ="post">
  <label for="email">Email:</label>
  <input type="number" name="uno" id="email" required >
  <button type="submit" name ="login">Submit</button>
</form>

  </body>
</html>

<?php
include("connection.php");
if(isset($_POST['login']))
{
    $uno = $_POST['uno'];
$sql = "DELETE FROM harshit WHERE EmpId = $uno";
$gott = mysqli_query($conn, $sql);
$tot11 = mysqli_num_rows($dott);
echo $tot11;

}
else{
    echo "fail";
}
// Close the connection
mysqli_close($conn);

?>