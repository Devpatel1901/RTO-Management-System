<?php
session_start();
include("config.php");
$user = "Admin";
$username = $_POST['username'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];
//$query = "SELECT ID FROM INSPECTOR WHERE Username='$user'";
//$result=$link->query($query);
//$row=mysqli_fetch_row($result);
//$id = $row[0];
//$id = $id+1; 
$sql = "INSERT INTO INSPECTOR(Username,Password) VALUES('$username','$password')";
if ($username == $password)
{
    echo ("<script LANGUAGE='JavaScript'>
              window.alert('Username and password can not be same');
              window.location.href='inspector_add.php';
              </script>");
}
if ($password == $re_password)
{
    if(mysqli_query($link,$sql))
    {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('Inspector added successfully');
              window.location.href='admin_page.php';
              </script>");
    }
    else
    {
        echo ("<script LANGUAGE='JavaScript'>
              window.alert('Try sometimes later!!!');
              window.location.href='admin_page.php';
              </script>");
    }
}
else
{
    echo ("<script LANGUAGE='JavaScript'>
              window.alert('Password and Re-enter password must be same');
              window.location.href='inspector_add.php';
              </script>");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Inspector Validation</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>
  </head>
<body style="background-color:mintcream">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="background-color: skyblue;">
          <a class="navbar-brand" href="#" style="margin-left: 200px;height:auto"><h1 style="margin-right: 500px;">RTO Gujarat</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="llr.php">LLR</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Regstration.php">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="DL.php">DL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Status.php">Check Status</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Admin.php">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Complaint.php">Complaint</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>