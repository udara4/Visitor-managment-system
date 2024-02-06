
<!-- print with id
    <?php /*
include('dbconn.php');
session_start();
$ic11=$_SESSION['id'];
$sql="Select * from inquery Where Id =$ic11";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);
*/
?>--> 
<?php
include('dbconn.php');
session_start();
$ic11=$_SESSION['id'];
$sql="Select * from inquery ORDER BY id DESC LIMIT 1";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SLIP</title>
        <link rel="stylesheet" type="text/css" href="../css/custom_1.css">
    </head>
    <body>
    <form action="../index_1.php" method="post">
        <div class="ticket">
            
            <p class="centered"><b>District Secretariat
                
                <br>Kurunegala</b></p>
            <table class="centered">
                
                <tbody>
                   <tr>
                        <td align='left'class="quantity">S/N</td>
                        <td class="description"><input type="text" name="name" value="<?php echo "$fetch[0]";?>" readonly="readonly"></td>
                        
                    </tr>
                    <tr>
                        <td align='left'class="quantity">Name</td>
                        <td class="description"><input type="text" name="name" value="<?php echo "$fetch[1]";?>" readonly="readonly"></td>
                        
                    </tr>
                    <tr>
                        <td align='left'class="quantity">ID</td>
                        <td class="description"><input type="text" name="ic1" value="<?php echo "$fetch[3]";?>" readonly="readonly"></td>
                       
                    </tr>
                    <tr>
                        <td align='left'class="quantity">Phone Number</td>
                        <td class="description"><input type="text" name="phone" readonly="readonly" value="<?php echo "$fetch[4]";?>" readonly="readonly"></td>
                       
                    </tr>
               
                    <tr>
                        <td align='left'class="quantity"  >Date</td>
                        <td class="description"><input type="text" name="date" value="<?php echo "$fetch[11]";?>" readonly="readonly"></td>
                        
                    </tr>
                    <tr>
                        <td align='left'class="quantity">Check IN Time</td>
                        <td class="description"><input type="text" name="in_time" value="<?php echo "$fetch[8]";?>" readonly="readonly"></td>
                        
                    </tr>
                    <tr>
                        <td align='left'class="quantity">Address</td>
                        <td class="description"><input type="text" name="address" value="<?php echo "$fetch[12]";?>" readonly="readonly"></td>
                       
                    </tr>
                    <tr>
                        <td align='left'class="quantity">Department</td>
                        <td class="description"><input type="text" name="department" value="<?php echo "$fetch[6]";?>" readonly="readonly"></td>
                        
                    </tr>
                    <tr>
                        <td align='left'class="quantity">Reson</td>
                        <td class="description"><input type="text" name="person_meet" value="<?php echo "$fetch[7]";?>" readonly="readonly"></td>
                        
                    </tr>
                    <tr>
                        <td align='left'class="quantity"  >&nbsp;</td>
                       
                        
                    </tr>
                    <tr>
                        <td class="quantity"></td>
                       
                    </tr> 

                        <tr><td colspan="2"class="quantity"><b>සේවා ඇගයීම</b></td>
                        <td class="description"></td>
                    </tr> 

                        <tr> <td align='left'class="quantity">විශිෂ්ඨයි</td>
                        <td class="description">&#x2610;</td>

                    </tr> 

                        <tr><td align='left'class="quantity">හොදයි</td>
                        <td class="description">&#x2610;</td>
                    </tr> 

                        <tr><td align='left'class="quantity">සාමාන්‍යයි</td>
                        <td class="description">&#x2610;</td>
                    </tr> 

                        <tr> <td align='left'class="quantity">දුර්වලයි</td>
                        <td class="description">&#x2610;</td>
                    </tr> 

                        <td class="quantity">&nbsp;</td>
                        <td class="quantity">&nbsp;</td>
                    </tr> 

                        
                    </tr>
                </tbody>
            </table>
            <p class="centered"><b>Thanks for visiting us</b></p>
        </div>
        <!--<button id="p1" class="hidden-print">Print</button>-->
        <input type="button" class="hidden-print" id="p1" value="Print"  onclick="print1()" ><br><br>
        <a href="../dashboard.php">	<input type="button"  class="hidden-print" id="p2" value="Back"  ></a><br><br>
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
</html>
