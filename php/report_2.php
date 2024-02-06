

4
</body>
<!DOCTYPE html>
<html>
<head>
  <title>Departments Report</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>
<style type="text/css">
    body
    {

      background-repeat: no-repeat;
      background-size: cover;
      margin: 0px;
      font-family: verdana;
    }
  </style>
</head>
<body>
	
<form action='reportD.php' method="post">
       
	<div class="left">
	<table style="width:100%" cellspacing="5px" cellpadding="5%"; align="center">
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
        <td style="margin-left: 22px;" align="right">Department :</td>
        <td style="width: 70%; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required><div style="margin-top: -8px; margin-left: 60px;" required>                 
		<select name="department"  style="width: 80%; height: 30px; border-radius: 10px;border:none; margin-left: -40px; padding: 5px; margin-top: 10px; color: #000">
		<?php  
		 $id=$_SESSION['user'];                         
		include ('dbconn.php');
		$sql="Select * from department where department_name= '".$_SESSION['user']."' ";
		$query=mysqli_query($db,$sql);
						
			while($fetch=mysqli_fetch_array($query)) {
		?>
		<option  value="<?php echo $fetch['department_name']?>"><?php echo $fetch['department_name']?></option>

		<?php
		}
		?>

		</select>
		</div><br></td></tr>
    <tr>
	    <td style="margin-left: 22px;" align="right"></td>
        <td style="width: 70%; height:30px; border-radius: 10px;border:none; margin-left: 22px; padding: 5px;margin-top: 10px;" required><input type="submit" name="submit" value="SUBMIT"  style="width: 40%; height: 26px; border-radius: 10px;border:none; margin-left: 100px; padding: 5px; margin-top: 35px; cursor: pointer; color: #000"></td>
</tr>
	</tbody>
</table>
</form>
</body>
</html>
 
 

