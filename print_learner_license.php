<html>
<title>Print LLR</title>
<body>
<?php
session_start();
include("config.php");

$id = $_SESSION['id'];


$sql1 = "SELECT AadhaarNumber,Name,cov,Address,llr_reg_date,llr_expiry_date,Gender FROM LLR WHERE llr_id = '$id'";

$result1 = $link->query($sql1);
$row1 = mysqli_fetch_row($result1);
$AadhaarNumber = $row1[0];
$Name = $row1[1];
$cov = $row1[2];
$Address = $row1[3];
$llr_issue_date = $row1[4];
$llr_expiry_date = $row1[5];
$gender = $row1[6];
if($gender=='Male')
	$image = "Images/Male.png";
else $image = "images/Female.png";

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
<td>Address</td>
<td colspan="2"><?php echo $Address ?> </td>
</tr>

<tr>
<td>LLR Issue-Date</td>
<td colspan="2"><?php echo $llr_issue_date ?></td>
</tr>


<tr>
<td>LLR Expiry-Date</td>
<td colspan="2"><?php echo $llr_expiry_date ?></td>
</tr>

<tr >
<td  colspan="3" height=100px align=center>
<img src="Images/Gujarat_goverment_logo.jpeg" height="100px" width="100px">
</td>
</tr>

<tr>
<td colspan="3" align="center">
This is the PROVISIONAL Learner's License
</td>
</tr>

</table>
<br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button onclick="myFunction()" align="center">Print</button>
<a href="ll_status.php" align="center">Back</a>

<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>