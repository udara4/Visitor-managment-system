<?php
// including the database connection file
include('dbconn.php');

?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM inquery WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['Name'];
	$ic = $res['Ic'];
	$reson= $res['Person_Meet'];
    $remark= $res['remark'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br><br>
	
	<form name="form1" method="post" >
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="ic" value="<?php echo $ic;?>"></td>
			</tr>
		<tr> 
				<td>Email</td>
				<td><input type="text" name="reson" value="<?php echo $reson;?>"></td>
			</tr>
            <tr> 
				<td>remark</td>
				<td><input type="text" name="remark" value="<?php echo $remark;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
include('dbconn.php');
if(isset($_POST['update']))
{

    $result = mysqli_query($db, "update inquery set remark='$remark' WHERE id=$id");
}
?>