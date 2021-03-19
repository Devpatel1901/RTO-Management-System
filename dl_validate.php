<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>DL Application</title>
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
                <a class="nav-link" href="vehicle_registration.php">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="DL.php">DL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Status.php">Check status</a>
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
      <h3 style="text-align:center;margin-left:70px;margin-top:80px;font-size:45px;color:darkgreen;">Driving License's Registration</h3>
      <br/><br/><br/>
      <?php
                $id = $_POST['ID'];
                $_SESSION['id'] = $id;
                $sql = "SELECT AadhaarNumber,Name,cov,email_id,llr_status,llr_reg_date,llr_expiry_date,City,Address,Gender FROM LLR WHERE llr_id = '$id'";
                $result1 = $link->query($sql);
                $row1 = mysqli_fetch_row($result1);
                $Aadhaar = $row1[0];
                $name = $row1[1];
                $cov = $row1[2];
                $email_id = $row1[3];
                $llr_status = $row1[4];
                $llr_reg_date = $row1[5];
                $llr_expiry_date = $row1[6];
                $city = $row1[7];
                $gender = $row1[9];
                $date = date("Y-m-d");
                $date1 = date('Y-m-d', strtotime($date. ' + 1 month'));
                if ($llr_status == 1)
                {
                    if ($llr_reg_date < $date AND $llr_expiry_date > $date1)
                    {
                        echo ("<script LANGUAGE='JavaScript'>
                                window.alert('You are eligible to apply for DL license');
                                window.location.href='dl_insert.php';
                                </script>");                            
                    }
                    else
                    {
                        echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Your LLR is expired or Apply DL after 1 month of LLR license issue');
                                window.location.href='DL.php';
                                </script>");
                    }
                }
                else
                {
                    echo ("<script LANGUAGE='JavaScript'>
                                window.alert('You have not learner license');
                                window.location.href='DL.php';
                                </script>");
                }
      ?>
      
</body>
</html>