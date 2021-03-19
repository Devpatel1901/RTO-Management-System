<?php
include("config.php");

$aadhaar = $_POST['aadhaar'];
$Complaint_description = $_POST['complaint_desc'];
$city = $_POST['city'];
$date = date("Y-m-d");
$sql = "INSERT INTO COMPLAINT VALUES('$aadhaar','$date','$Complaint_description','$city')";
if (mysqli_query($link,$sql))
{
    echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Complaint Registered');
                                window.location.href='home.html';
                                </script>");
}
else
{
    echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Complaint is not Registered.Try Later!!!');
                                window.location.href='Complaint.php';
                                </script>");
}
?>
