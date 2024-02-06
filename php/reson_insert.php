<?php
include('dbconn.php');


$department_name=$_POST['department_name'];

$sql="select Name from department where Name='$department_name'";
$query=mysqli_query($db,$sql);
$count=mysqli_num_rows($query);
if($count>0)
{
	echo"<script>
		alert('Reson already Exist');
		location.href='reson.php'; 
					</script>";	
}
else
{
	$sql="insert into reson (Name) values('$department_name')";
	$query=mysqli_query($db,$sql); 
		if($query) 
		{     
			echo"<script>alert('Inserted'); 
			location.href='../index_1.php';
					</script>";	
		}
		else
		{
			echo"<script>alert ('error');
				</script>";
		}

}

?>

