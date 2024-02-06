<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SLIP</title>
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
		height: 50px;
		width: 150px;
		color: black;
	}
	img
	{
		border: none;
	}
	.new th
	{
		font-family: verdana;
		font-size: 18px;
		color: skyblue;
	}
</style>
    </head>

<?php 
	
include('dbconn.php');
$dat = date("d/m/Y");

$name_for_project="VMS_Record_Count(".$dat.")";

	header('Content-Type: application/xls');
	header("content-disposition: attachment;filename=".$name_for_project.".xls");	
$sqlQuery = "SELECT Department, COUNT(*) FROM inquery where MONTH(Date) = Month(CURRENT_DATE()) GROUP BY Department";
$resultSet = mysqli_query($db, $sqlQuery) or die("database error:". mysqli_error($db));
$inquerydata = array();
while( $inquery = mysqli_fetch_assoc($resultSet) ) {
	$inquerydata[] = $inquery;
}	
?>
			  
	<table id="excelData" class="table table-striped table-bordered" border=1>
		<tr>
			<th>Department</th>
            <th>Count</th>
			
		</tr>
		<tbody>
			<?php foreach($inquerydata as $inquery) { ?>
			   <tr>
			   <td><?php echo $inquery ['Department']; ?></td>
               <td><?php echo $inquery ['COUNT(*)']; ?></td>
		 
    
			   </tr>
			<?php } ?>
		</tbody>
    </table>		
</div><br><br>


<?php
if(isset($_POST["excelData"])) {	
	


	$showColoumn = false;
	 
	
	exit;  
}
?>

</html>

