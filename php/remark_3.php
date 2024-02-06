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
<form action='remarkD_1.php' method="post">
<table>
<tr>    
		<td colspan="5"><input type="submit" name="submit1" value="Submit"></td>
		
	</tr>
<tr>    <td style="margin-center: 22px;" align="right">S/N:</td>
        <td style="margin-center: 22px;" align="right">NAME:</td>
		<td style="margin-center: 22px;" align="right">ID NO :</td>
		<td style="margin-center: 22px;" align="right">DEPARTMENT :</td>
		<td style="margin-center: 22px;" align="right">REMARK :</td>
		<td style="margin-center: 22px;" align="right"></td>
		
	</tr>

<?php

session_start();
if(isset($_POST['submit']))
{

	$id=$_SESSION['user'];
include('dbconn.php');
$sql="select * from inquery where Department = '$id' ";
$query=mysqli_query($db,$sql);

 while ($fetch=mysqli_fetch_array($query)) { 
    $id = $fetch[0]; 
	$Name = $fetch[1]; 
	$idty = $fetch[3]; 
	$Department = $fetch[6]; 
	?>
	
<tr> 
<td ><input type="number" name="id[]"  placeholder="S/N" value="<?php echo $fetch[0]; ?>"  style="width: 40%; height:30px; border-radius: 10px;border:none; margin-center: 22px; padding: 5px;margin-top: 10px;" ></td>
<td ><input type="text" name="name[]"  placeholder="Name" value="<?php echo $fetch[1]; ?>"  style="width: 100%; height:30px; border-radius: 10px;border:none; margin-center: 22px; padding: 5px;margin-top: 10px;" ></td>
<td ><input type="number" name="idty[]"  placeholder="ID" value="<?php echo $fetch[3]; ?>"  style="width: 70%; height:30px; border-radius: 10px;border:none; margin-center: 22px; padding: 5px;margin-top: 10px;" ></td>
<td ><input type="text" name="department[]"  placeholder="Department" value="<?php echo $fetch[6]; ?>"  style="width: 100%; height:30px; border-radius: 10px;border:none; margin-center: 22px; padding: 5px;margin-top: 10px;" ></td>

<td ><input type="text" name="remark[]"  placeholder="ADD REMARK" style="width: 100%; height:30px; border-radius: 10px;border:none; margin-center: 22px; padding: 5px;margin-top: 10px;" ></td>



<?php }  ?> 

<td colspan="5"><input type="submit" name="submit1" value="Submit"></td>
</tr>
</table>
<?php }  ?> 
</form>
</head>
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
