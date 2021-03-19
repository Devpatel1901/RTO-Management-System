<?php
include("config.php");
session_start();
if (isset($_POST['submit']))
{
    $_SESSION['r_id'] = $_POST['r_id'];
    $id = $_SESSION['r_id'];
    $sql3="SELECT reg_status from registration where r_id = '$id'";
	$result3=$link->query($sql3);
	if ($row3=mysqli_fetch_row($result3))
    {
        $status = $row3[0];
        if ($status == 1)
        {

            echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Your application is Approved');
                                window.location.href='Vehicle_RC_book.php';
                                </script>");
        }
        else if ($status == 0)
        {
            echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Your Application still under process');
                                window.location.href='Vehicle_status.php';
                                </script>");
        }
        else
        {
            echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Your Application is Rejected');
                                window.location.href='Status.php';
                                </script>");
        }
    }
    else
    {
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('No Such ID is exist');
                window.location.href='Vehicle_status.php';
                </script>");
    }
}
?>