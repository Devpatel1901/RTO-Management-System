<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Add Inspector</title>
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
      <h3 style="text-align:center;margin-left:50px;margin-top:80px;font-size:45px;color:darkgreen;"><u>RTO Gujarat:Add Inspector</u></h3>
      <br/><br/>
      <a href="admin_page.php" style="margin-left:480px;">Back</a>
      <a href="home.html" style="margin-left:520px;">Signout</a><br><br>
      <p style="text-align:center;color:red;font-size:20px;"> Remember the username and password for admin access </p>
      <form action="inspector_validate.php" method="post">
      <label for="username" style="margin-left:590px;">Username: </label>
      <input type="text" name="username" placeholder="Enter Username" style="width:230px;height:35px;" required/><br/><br/>
      <label for="password" style="margin-left:590px;">Password: </label>
      <input type="password" name="password" placeholder="Enter Password" style="width:230px;height:35px;" required/><br/><br/>
      <label for="re_password" style="margin-left:590px;">Re-enter Password: </label>
      <input type="password" name="re_password" placeholder="Enter Password" style="width:230px;height:35px;" required/><br/><br/>
      <input type="submit" class="btn btn-secondary" style="margin-left:590px;width:300px;height:40px;"><br/>
      </form>
</body>
</html>