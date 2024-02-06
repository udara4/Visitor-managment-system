<?php
include('dbconn.php');
$id=$_GET['id'];

$sql="delete from reson where id='$id'";
$query=mysqli_query($db,$sql);

if($query)
{
	echo "<script>
		alert('data deleted');
		location.href='reson_delete_0.php';
			</script>";
}
else
{
	echo "Error";
}
?>