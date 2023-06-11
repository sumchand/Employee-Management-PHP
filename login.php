<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <form  Method ="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="uno">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Pwd">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <label>Role:</label>
        <select name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br><br>
        <button type="submit" class="btn btn-primary" name ="login">Submit</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

<?php
include("connection.php");

if(isset($_POST['login']))
{
    $uno = $_POST['uno'];
    $Pwd = $_POST['Pwd'];
    $user =$_POST['role'];
    
    $qq = "SELECT * FROM harshit WHERE Email = '$uno' && Password ='$Pwd'";
    
    $dot = mysqli_query($conn, $qq);
    $tot1 = mysqli_num_rows($dot);
    echo $tot1;

    $qqq = "SELECT * FROM adminn WHERE Email = '$uno' && Password ='$Pwd'";
    $dott = mysqli_query($conn, $qqq);
    $tot11 = mysqli_num_rows($dott);
    echo $tot1;


    
    if($tot1 ==1  && $user == 'user')
    {
        header('location:dap.php');
    }
    if($tot11 ==1  && $user == 'admin')
    {
        header('location:admin.php');
    }
    else{
        echo "login fail";
    }
  

}
?>