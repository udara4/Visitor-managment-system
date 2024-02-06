

<!DOCTYPE html> 
<html>
<head>   
	  
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>
<style type="text/css">


</head>

 <body > 
 
		<label style="margin-left: 22px;">Department : </label><br>
		<div style="margin-top: -8px; margin-left: 60px;" required>                 
		<select name="department"  style="width: 80%; height: 30px; border-radius: 10px;border:none; margin-left: -40px; padding: 5px; margin-top: 10px; color: #000">
		<?php                          
		include ('dbconn.php');
		$sql="Select * from department";
		$query=mysqli_query($db,$sql);
						
			while($fetch=mysqli_fetch_array($query)) {
		?>
		<option value="<?php echo $fetch[1]?>"><?php echo $fetch[1]?></option>

		<?php
		}
		?>

		</select>
		
	

</body>
<script>
	function validateform()
	{
		var x= document.forms["myform"]["name1"].value;
		if(x=="")
		{
			alert("Name must be filled out");
			return false;
		}
	}
</script>
</html>
