<?php
include('dbconn.php');
session_start();
$phone=$_SESSION['phone'];
$sql="Select * from inquery where Phone='$phone'";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>SLIP</title>
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>
<body>
<form action="../index_1.php" method="post">
	<div class="slip_main">
	<!--<img src="../images/header.jpg" height="165px" width="100%"> -->
<!--Left box in the main form-->
		<div class="slip_left">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo "$fetch[1]";?>" readonly="readonly" style="height: 6px; width: 50%; border-radius: 10px;border-color: black; padding: 10px; margin-left: 87px;"><br><br>
			<label>ID no</label>
			<input type="Text" name="ic1" placeholder="Id" readonly="readonly" value="<?php echo "$fetch[3]";?>" style="height: 6px; width: 50%; border-radius: 10px;border-color: black; padding: 10px; margin-left: 61px;"><br><br>
			<label style="word-spacing: -2px;">Address</label>
			<input type="text" name="address" readonly="readonly" value="<?php echo "$fetch[12]";?>" style="height: 6px; width: 50%; border-radius: 10px;border-color: black; padding: 10px; margin-left: 22px;"><br><br>
			<label>Gender : </label>
			<?php 
				if($fetch[2]=="male")
				{
			 ?>
					<input type="text" name="gender" value="Male" readonly="readonly" style="height: 6px; width: 50%; border-radius: 10px;border-color: black; padding: 10px; margin-left: 62px;">
					<br><br>
			<?php	}
				else
				{
			?>	
					<input type="text" name="gender" value="Female" style="height: 6px; width: 50%; border-radius:10px;border-color: black; padding: 10px; margin-left: 62px;">
					<br><br>
			<?php
				}
			?>
			

			
			<label>Phone no</label>
			<input type="text" name="phone" readonly="readonly" value="<?php echo "$phone";?>" style="height: 6px; width: 50%; border-radius: 10px;border-color: black; padding: 10px; margin-left: 61px;"><br><br>
			<label>Department</label>
			<input type="text" name="department" readonly="readonly" value="<?php echo "$fetch[6]";?>" style="height: 6px; width: 50%; border-radius: 10px;border-color: black; padding: 10px; margin-left: 41px;"><br><br>
			<label style="word-spacing: -2px;">Whom To Meet</label>
			<input type="text" name="person_meet" readonly="readonly" value="<?php echo "$fetch[7]";?>" style="height: 6px; width: 50%; border-radius: 10px;border-color: black; padding: 10px; margin-left: 22px;"><br><br>
			<label style="word-spacing: -2px;">Check In</label>
			<input type="text" name="in_time" readonly="readonly" value="<?php echo "$fetch[8]";?>" style="height: 6px; width: 50%; border-radius: 10px;border-color: black; padding: 10px; margin-left: 67px;"><br><br>

			<label style="word-spacing: -2px;">Date</label>
			<input type="text" name="date" value="<?php echo "$fetch[11]";?>" style="height: 6px; width: 50%; border-radius: 10px;border-color: black; padding: 10px; margin-left: 95px;"><br><br>
			<input type="button" id="p1" value="Print" style="height: 35px; width: 50%; border-radius: 10px;border-color: black; margin-left: 100px;" onclick="print1()"><br><br>
		<a href="../dashboard.php">	<input type="button" id="p2" value="Back" style="height: 35px; width: 50%; border-radius: 10px;border-color: black; margin-left: 100px;" ></a><br><br>
		</div>
<!--Right box in the main form-->
		<div class="slip_right">
			<div class="image_box">	
            
			</div>

			<div class="image_box">	
            
    
			</div>
			<div class="qr">
				<img src="<?php echo $fetch[9] ?>" height="200px" width="100%">
			</div>
            <div class="qr">
				<img src="<?php echo $fetch[4] ?>" height="200px" width="100%">
			</div>
		</div>
<!--Instruction box in the main form-->
		
		<div class="slip_instruction">
			
		</div>
	</div>
</form>
<script type="text/javascript">
	function print1()
	{
		w=document.getElementById('p1');
		w.style.display='none';
		w1=document.getElementById('p2');
		w1.style.display='none';
		window.print();
		w.style.display='block';
		w1.style.display='block';
	}

</script>
</body>
</html>