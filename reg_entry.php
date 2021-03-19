<?php
include("config.php");
$name= $_POST['name'];
$password = $_POST['pass'];
$email_id = $_POST['email'];
$aadhaar = $_POST['aadhaar'];
$company_name = $_POST['company'];
$model = $_POST['model'];
$birthdate = $_POST['birthdate'];
$city = $_POST['city'];
$rdate = date("Y-m-d");
$id = uniqid();
$fuel_type = null;
$COV = null;
$Gender = $_POST['gender'];
if (isset($_POST['radio'])){
    $fuel_type = $_POST['radio'];
}
if (isset($_POST['checkbox'])){
    $COV = $_POST['checkbox'];
}
$sql = "INSERT INTO REGISTRATION(AadhaarNumber,name,COV,model,company,rdate,r_id,password,mail_id,Gender) VALUES('$aadhaar','$name','$COV','$model','$company_name','$rdate','$id','$password','$email_id','$Gender')";
if (mysqli_query($link,$sql))
{
    echo "<script>window.alert('Application Submited successfully')</script>";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
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

    <title>Vehicle Registration</title>
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
      <h3 style="text-align:center;margin-left:70px;margin-top:80px;font-size:45px;color:darkgreen;">Vehicle Registration</h3>
      <br/><br/><br/>
      <table border ="1" cellpadding="10" cellspacing="5" align="center">
        <tr>
        <td align = "center" colspan="2" ><b>VERIFICATION DETAILS</b></td>
        </tr>
        <tr>
            <td>your Application ID</td>
            <td>
                <?php 
                    $password1 = $_POST['pass'];
                    $sql="SELECT r_id from registration where password='$password1'";
				            $result=$link->query($sql);
					          $row=mysqli_fetch_row($result);
					          $r_id = $row[0];
                    echo $r_id;
                ?>
            </td>
        </tr>
        <tr>
            <td>Verification Date</td>
            <td>
                <?php 
                    $Date = date("Y-m-d");
                    echo date('Y-m-d', strtotime($Date. ' + 5 days'));
                ?>
            </td>
        </tr>
        <tr>
            <td>Vehicle Verification Venue</td>
            <td>
                <?php
                    $city1 = $_POST['city'];
                    $sql3="SELECT Location from offices where City='$city1'";
				            $result3=$link->query($sql3);
					          $row3=mysqli_fetch_row($result3);
					          $rto_address = $row3[0];
                    echo $rto_address;
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
            
            <p>
            Please be at 10:00 am on given date and venue </br>
            Bring Aadhar card,2 passport size photographs</br>DOB proof and Address Proof,and vehicle to be registered</br>
            </p>
            </td>
        </tr>
      </table>
      <p align="center"><a href="home.html"><h2 align="center">Exit</h2></a>
      <br/>
      <button onclick="myFunction()" style="margin-left:740px;">Print</button>
<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>