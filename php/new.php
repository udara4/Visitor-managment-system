<?php
session_start();
$e=$_SESSION['qr'];

include('dbconn.php');
if(isset($_POST['submit']))
{
date_default_timezone_set('Asia/Kolkata');
$name=$_POST['name1'];
$address=$_POST['address1'];
$gender=$_POST['gender'];
$ic=$_POST['ic1'];
$phone=$_POST['phone'];
$department=$_POST['department'];
$person_meet=$_POST['person_meet'];
$in_time=date("h:i");
$date=date("Y-m-d");




$sql="insert into inquery(Name,Gender,Ic,Phone,Department,Person_Meet,In_Time,Date,Address,user) values(
'$name','$gender','$ic','$phone','$department','$person_meet','$in_time','$date','$address','".$_SESSION['user']."')"; 
$query=mysqli_query($db,$sql); 

if($query) 
		{     
			echo"<script>
		     	location.href='slip.php';
					</script>";	
		}
		else
		{
			echo "<br>";
			echo"<script>alert ('error');</script>";
		}

}

?>

