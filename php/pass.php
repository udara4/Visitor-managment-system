<?php

session_start();
include('dbconn.php');
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");


$ic1=$_POST['ic1'];
$sql="select * from inquery where Ic='$ic1'";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);
$id = $fetch['Id'];
$count=mysqli_num_rows($query);


if($count>0)
{	
	if($fetch[8]=="")
	{
		echo"<script>alert('Out time'); 
		location.href='../dashboard.php';
		</script>";
	}
	else
	{

		$_SESSION['id']=$id;
		echo"<script>alert('ID number already exist'); 
		location.href='createpass_0_1.php';
		</script>";
	}
}
else
{
		$_SESSION['ic1']=$ic1;
		echo "<script>
			location.href='createpass_0.php';	
				</script>";
}
?>
