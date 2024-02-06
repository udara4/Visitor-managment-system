<?php
 $ic11=$_SESSION['ic1']; 
include('dbconn.php');
$sql="Select * from inquery where Phone='$ic11'";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);
?>

<!DOCTYPE html> 
<html>
<head>     
<script>
function onlyAlphabets(evt) {
        var charCode;
        if (window.event)
            charCode = window.event.keyCode;  //for IE
        else
            charCode = evt.which;  //for firefox
        if (charCode == 32) //for &lt;space&gt; symbol
            return true;
        if (charCode > 31 && charCode < 65) //for characters before 'A' in ASCII Table
            return false;
        if (charCode > 90 && charCode < 97) //for characters between 'Z' and 'a' in ASCII Table
            return false;
        if (charCode > 122) //for characters beyond 'z' in ASCII Table
            return false;
        return true;
    }
	function checkLength(len,ele){
  var fieldLength = ele.value.length;
  if(fieldLength <= len){
    return true;
  }
  else
  {
    var str = ele.value;
    str = str.substring(0, str.length - 1);
    ele.value = str;
  }
}
	</script>
	
<title>Create pass</title>     
<link rel="stylesheet" href="../css/createpass_1.css">

 </head>
 <body onload='document.form1.text1.focus()'> 
 <form action="new.php" method="post" name="form1">
<div class="back_ground">     
<h1>Create Pass</h1>         
	<div class="left">
	<table style="width:1500px" cellspacing="5px" cellpadding="5%"; align="center">
<!--<thead>
    <tr>
        <th style="margin-left: 22px;">Name</th>
        <th style="margin-left: 22px;">Address</th>
        <th>Gender</th>
		<th>ID no :</th>
        <th >Phone no :</th>
        <th>Department :</th>
    </tr>
</thead>
-->
<tbody>
<tr>
        <td style="margin-left: 22px;" align="right">ID no :</td>
        <td style="width: 400px; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required><input type="Number" value="<?php echo $ic11 ?>" name="ic1" readonly="readonly" placeholder="Id" style="width: 70%; height: 30px; color: #000; border-radius: 10px;border:none;margin-left: 22px; padding: 5px; margin-top: 18px;" required></td>
</tr>
    <tr>
	    <td style="margin-left: 22px;" align="right">Name :</td>
        <td style="width: 400px; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required><input type="text" name="name1"  placeholder="Name" value="<?php isset($name);?>"  style="width: 70%; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required></td>
</tr>
	<tr>
        <td style="margin-left: 22px;" align="right">Address :</td>
        <td style="width: 400px; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required><input type="text" name="address1" placeholder="Address" style="width: 70%; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required></td>
</tr>
	<tr>
	    <td style="margin-left: 22px;" align="right">Phone no : </td>
        <td style="width: 400px; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required><input type="Number" name="phone"  placeholder="Phone No" onKeyPress="return check(event,value)" onInput="checkLength(10,this)" style="width: 70%; height: 30px; color: #000; border-radius: 10px;border:none;margin-left: 22px; padding: 5px; margin-top: 18px;"required></td>
</tr>
	<tr>
        <td style="margin-left: 22px; width: 400px" align="right">Department:</td>
        <td style="width: 300px; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required><div style="margin-top: -8px; margin-left: 60px;" required>                 
		<select name="department"  style="width: 300px; height: 30px; border-radius: 10px;border:none; margin-left: -40px; padding: 5px; margin-top: 10px; color: #000">
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
		</div><br></td>
    </tr>
	<tr>
        <td style="margin-left: 22px;" align="right">Reson :</td>
        <td style="width: 300px; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required><div style="margin-top: -8px; margin-left: 60px;" required>                 
		<select name="person_meet"  style="width: 400px; height: 30px; border-radius: 10px;border:none; margin-left: -40px; padding: 5px; margin-top: 10px; color: #000">
		<?php                          
		include ('dbconn.php');
		$sql="Select * from reson";
		$query=mysqli_query($db,$sql);
						
			while($fetch=mysqli_fetch_array($query)) {
		?>
		<option value="<?php echo $fetch[1]?>"><?php echo $fetch[1]?></option>

		<?php
		}
		?>

		</select>
		</div><br></td>
    </tr>
	
	
	<tr>
	    <td style="margin-left: 22px;" align="right">Gender :</td>
        <td style="width: 70%; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required><div style="margin-center: -8px;margin-left: 46px;"> 
		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked";?> value="male" required>Male
		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked";?> value="female">Female
		<br><br></div></td>
</tr>

	<tr>
	<th colspan="3" align="center"><input type="submit" name="submit" value="Create"  style="width: 40%; height: 26px; border-radius: 10px;border:none; margin-left: 100px; padding: 5px; margin-top: 35px; cursor: pointer; color: #000"></th>
       
       
    </tr>
	
</tbody>
</table>
<!--		
	<label >Name : </label><br>
		<input type="text" name="name1" onkeypress="return onlyAlphabets(event);"  placeholder="Name" value="<?php isset($name);?>"  style="width: 70%; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required><br><br>
		<label style="margin-left: 22px;">Address : </label><br>	
		<input type="text" name="address1" placeholder="Address" style="width: 70%; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required><br><br>             
		<label style="margin-left:22px;">Gender </label><br>
		<div style="margin-top: -8px;margin-left: 46px;"> 
		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked";?> value="male">Male
		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked";?> value="female">Female
		<br><br></div>
		<label style="margin-left: 22px;">ID no : </label><br>
		<input type="Number" value="<?php echo $ic11 ?>" name="ic1" readonly="readonly" placeholder="Id" style="width: 70%; height: 30px; color: #000; border-radius: 10px;border:none;margin-left: 22px; padding: 5px; margin-top: 18px;" required><br><br>
		<label style="margin-left: 22px;">Phone no : </label><br>
		<input type="Number" name="phone"  placeholder="Phone No" onKeyPress="return check(event,value)" onInput="checkLength(10,this)" style="width: 70%; height: 30px; color: #000; border-radius: 10px;border:none;
		margin-left: 22px; padding: 5px; margin-top: 18px;"><br><br>
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
		</div><br>
			<label style="margin-left: 22px;">Reason : </label><br>
				<input type="text" name="person_meet" placeholder="Reason" style="width: 70%; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required><br><br>             

			<input type="submit" name="submit" value="Create"  style="width: 40%; height: 26px; border-radius: 10px;border:none; margin-left: 100px; padding: 5px; margin-top: 35px; cursor: pointer; color: #000">
		</div>
		<div class="right">
			<!--<div class="image_box">	
            
					<?php include('livevideo.php'); ?>
<input type="hidden" id="a" name="image">
            
			</div>
			<input type="submit" value="capture" style="width: 80%; height: 25px; border-radius: 10px;border:none; margin-left: 10px; padding: 5px; margin-top: 10px;">
			<div class="image_box" style="margin-top:75px">	
            
		<?php include('takephoto.php'); 

			 ?>
    
			</div>
			<div class="qr">
				<?php include('qr.php'); 

				$_SESSION['qr']=$e;?>
			</div>-->
		</div>
	</div>
</form>
	

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
