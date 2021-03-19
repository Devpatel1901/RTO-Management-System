<?php
include("config.php");
session_start();
$_SESSION['id'] = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Approve Application</title>
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
      <h3 style="text-align:center;margin-left:50px;margin-top:80px;font-size:45px;color:darkgreen;"><u>RTO Gujarat:Approve Vehicle Registration Application</u></h3>
      <br/><br/>
      <form action="#" method="post">
      <label for="ID" style="margin-left:200px;">Registration ID: </label>
      <input type="text" name="ID" placeholder="<?php echo $_GET['id'];?>"/><br/><br/>
      <label for="application" style="margin-left:200px;">Approve the application(1 or -1)?: </label>
      <input type="number" name="approve" min="-1" max="1"><br/><br/>
      <p style="margin-left:200px;">NOTE: 1 for approve the application and -1 for reject the application</p>
      <button type="submit"  name="submit" class="btn btn-primary" style="margin-left:200px;">Approve</button><br><br>
      <a href="admin_page.php" style="margin-left:200px;">Back</a><br><br>
      <a href="signout.php" style="margin-left:200px;">Signout</a><br><br>
      </form>
      <?php
              if(isset($_POST['submit']))
              {  
                $id = $_GET['id'];
                $approve = $_POST['approve'];
                $reg_issue = date("Y-m-d");
                $reg_expiry = date('Y-m-d', strtotime($reg_issue. ' + 20 years'));
                $sql = null;
                if ($approve == 1)
                {
                    $sql = "UPDATE REGISTRATION SET reg_status = '1' , reg_issue_date = '$reg_issue' , reg_expiry_date = '$reg_expiry' WHERE r_id = '$id'";
                    if (mysqli_query($link,$sql))
                    {
                        echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Application Approved');
                                window.location.href='Vehicle_RC_book.php';
                                </script>");
                    }
                    else
                    {
                        echo "Error: " . $sql . "<br>" . mysqli_error($link);
                    }
                }
                else
                {
                  $sql = "UPDATE LLR SET llr_status = '-1' WHERE llr_id = '$id'";
                    if (mysqli_query($link,$sql))
                    {
                        echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Application Rejected');
                                window.location.href='admin_page.php';
                                </script>");
                    }
                }
              }
?>
</body>
</html>