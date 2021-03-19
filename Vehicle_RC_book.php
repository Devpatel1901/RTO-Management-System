<html>
<title>Print LLR</title>
<body>
<?php
session_start();
include("config.php");

$id = $_SESSION['r_id'];


$sql1 = "SELECT AadhaarNumber,Name,cov,model,company,reg_issue_date,reg_expiry_date,Gender FROM REGISTRATION WHERE r_id = '$id'";

$result1 = $link->query($sql1);
$row1 = mysqli_fetch_row($result1);
$AadhaarNumber = $row1[0];
$Name = $row1[1];
$cov = $row1[2];
$model = $row1[3];
$company = $row1[4];
$reg_issue_date = $row1[5];
$reg_expiry_date = $row1[6];
$gender = $row1[7];
$image = "Images/Car.WEBP";

?>

<br><br><br>
<table border ="1" cellpadding="10" cellspacing="5" align="center">
<tr>
  <td align = "center" colspan="3" ><b>RTO Gujarat</br> Learner's License</b></td>
</tr>

<tr>
  <td>Aadhar Number</td>
  <td width="200px"><?php echo $AadhaarNumber ?></td>
  <td width="100px" rowspan="3">  <img src="<?php echo $image ?>" height="100px" width="100px">    </td>   
</tr>
<tr>
  <td>Name  </td>
  <td><?php echo $Name ?></td>
  
</tr>
<tr>
<td>COV</td>
<td><?php echo $cov ?></td>
</tr>
<tr>
<td>Model</td>
<td colspan="2"><?php echo $model ?> </td>
</tr>
<tr>
<td>Company</td>
<td colspan="2"><?php echo $company ?> </td>
</tr>

<tr>
<td>Vehicle's RC Issue-Date</td>
<td colspan="2"><?php echo $reg_issue_date ?></td>
</tr>


<tr>
<td>Vehicle's RC Expiry-Date</td>
<td colspan="2"><?php echo $reg_expiry_date ?></td>
</tr>

<tr >
<td  colspan="3" height=100px align=center>
<img src="Images/Gujarat_goverment_logo.jpeg" height="100px" width="100px">
</td>
</tr>

<tr>
<td colspan="3" align="center">
This is the PROVISIONAL Vehicle's RC book
</td>
</tr>

</table>
<br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button onclick="myFunction()" align="center">Print</button>
<a href="Vehicle_status.php" align="center">Back</a>

<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>