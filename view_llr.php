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

    <title>View LLR</title>
    <style>
    td {
        border: solid 2px lightgrey;
    }
    </style>
  </head>
<body>
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
      <h3 style="text-align:center;margin-left:50px;margin-top:80px;font-size:45px;color:darkgreen;"><u>RTO Gujarat: LLR Application Details</u></h3>
      <br/><br/><br/><br/>
      <a href="admin_page.php" style="margin-left:480px;">Back</a>
      <a href="signout.php" style="margin-left:520px;">Signout</a><br><br>
      <?php
        include("config.php");
        $sql = "SELECT * FROM LLR";
        $body="body";
        $subject="LLR Update";
        if($result = mysqli_query($link, $sql))
        {
            if(mysqli_num_rows($result) > 0)
            {
                echo "<table border='2' style='margin-left:183px;border-color:lightgrey;border-collapse: collapse;'>";
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>LLR ID</th>";
                            echo "<th>Name</th>";
                            echo "<th>Aadhaar Number</th>";
                            echo "<th>Address</th>";
                            echo "<th>COV</th>";
                            echo "<th>Email_id</th>";
                            echo "<th>City</th>";
                            echo "<th>LLR Status</th>";
                            echo "<th>LLR Registation Date</th>";
                            echo "<th>LLR Expiry Date</th>";
                            echo "<th>Action</th>";
                        echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while($row = mysqli_fetch_array($result)){
                        $link = $row['email_id'];
                        echo "<tr>";
                            echo "<td>" . $row['llr_id'] . "</td>";
                            echo "<td>" . $row['Name'] . "</td>";
                            echo "<td>" . $row['AadhaarNumber'] . "</td>";
                            echo "<td>" . $row['Address'] . "</td>";
                            echo "<td>" . $row['cov'] . "</td>";
                            echo "<td>" . '<a href="mailto:'.$row['email_id'].'?subject='.$subject.'&body='.$body.'">'.$row['email_id'].'</a>' . "</td>";
                            echo "<td>" . $row['City'] . "</td>";
                            echo "<td>" . $row['llr_status'] . "</td>";
                            echo "<td>" . $row['llr_reg_date'] . "</td>";
                            echo "<td>" . $row['llr_expiry_date'] . "</td>";
                            echo "<td>";
                              if($row['llr_status'] == 0)
                              {
                                echo "<a href='approve_application.php?id=" . $row['llr_id'] . "'>Approve Application</a>";
                                echo "&nbsp;";
                              }
                              else
                              {
                                echo "&nbsp;";
                              }
                            echo "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";                            
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else{
                echo "<p><em>No records were found.</em></p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        //mysqli_close($link);
      ?>
</body>
</html>