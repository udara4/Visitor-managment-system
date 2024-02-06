<?php
include('dbconn.php');
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");
$out_time=date("h:i");

$result = array_filter($_POST['remark']);
if (isset($result)) {
    foreach ($result as $i => $remark) {
		
        $id = intval($_POST['id'][$i]);
        $name = mysqli_real_escape_string($db,$_POST['name'][$i]);
        $idty = mysqli_real_escape_string($db,$_POST['idty'][$i]);
        $department = mysqli_real_escape_string($db,$_POST['department'][$i]);
		$remark = mysqli_real_escape_string($db,$remark);
	
		$sql="UPDATE inquery SET remark='$remark' WHERE id=$id";
		$query=mysqli_query($db,$sql);
        
		if($query)
{
	echo "<script>
		alert('Visitor Remark Sucessfully Updated');
		location.href='../php/remark_1.php';
		</script>";
}
else
{
	echo "<script>
		alert('Error');
	
		</script>";
}
		
    }   
}

?>



 