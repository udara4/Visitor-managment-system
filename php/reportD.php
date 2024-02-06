<head>
<title>Report</title>

<link rel="stylesheet" type="text/css" href="../css/custom_1.css">
<style>
	body
	{
		text-align: center;
		background-image: url(../images/blurred-background-2.jpg);
		background-size: cover;
		background-repeat: no-repeat;
	}

	table
	{

		border-collapse: collapse;
		border:none;
	}
	td
	{
		text-align: center;
		font-size: 16px;
		height: 50px;
		width: 150px;
		color: white;
	}
	img
	{
		border: none;
	}
	.new th
	{
		height: 50px;
		width: 150px;
		font-size: 18px;
		color: skyblue;
	}

</style>
</head>
<body>
4
  
</head>
<?php

include('dbconn.php');
session_start();
if(isset($_POST['submit']))
{

	$id=$_SESSION['user'];


$sql="select * from inquery where Department ='$id' and Date > DATE_ADD(NOW(), INTERVAL -365 DAY)";
$query=mysqli_query($db,$sql);
echo "<table align='center' border='1' class='new'>";
	echo "<tr>";
	echo "<th> S/N</th>";
		echo "<th> Name</th>";
		echo "<th> Gender</th>";
		echo "<th> Phone</th>";
		echo "<th> ID number</th>";
		echo "<th> Department</th>";
		echo "<th> Person Meet </th>";
		echo "<th> In Time</th>";
		echo "<th> Out Time</th>";
	
		echo "<th> Date</th>";
		echo "<th> Remark</th>";

	echo "</tr>";


while ($fetch=mysqli_fetch_array($query))
{
	echo "<tr>";
	echo "<td> $fetch[Id]</td>";
		echo "<td> $fetch[Name]</td>";
		echo "<td> $fetch[Gender]</td>";
		echo "<td> $fetch[Phone]</td>";
		echo "<td> $fetch[Ic]</td>";
		echo "<td> $fetch[Department]</td>";
		echo "<td> $fetch[Person_Meet]</td>";
		echo "<td> $fetch[In_Time]</td>";
		echo "<td> $fetch[Out_Time]</td>";
		echo "<td> $fetch[Date]</td>";
		echo "<td> $fetch[remark]</td>";

	echo "</tr>";
}

}
echo "</table>";
echo "<br><br>";


?>
<input type="button" class="hidden-print" id="p1" value="Print"  onclick="print1()"><br><br>
        <a href="../php/report_3.php">	<input type="button" class="hidden-print" id="p2" value="Back"  ></a><br><br>
		</div>
        <script src="script.js"></script>
        </form>
        <script type="text/javascript">
	function print1()
	{
		w=document.getElementById('p1');
		w.style.display='none';
		w1=document.getElementById('p2');
		w1.style.display='none';
		
		w.style.display='block';
		w1.style.display='block';
	}

</script>


</body>
