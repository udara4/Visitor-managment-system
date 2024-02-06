<?php
include('dbconn.php');
session_start();
$ic11=$_SESSION['ic1'];
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
       
    </head>
    <body>
    <form action="../index_1.php" method="post">
        <div class="ticket" id="pdata">
            
            <p class="centered"><b>District Secretariat Kurunegala</b></p>
            <table class="centered">
                
                <tbody>
                   <tr>
                        <td align='left'class="quantity" style="width:10%">S/N</td>
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
                        <td align='left'class="quantity"  >Date</td>
                        <td class="description"><input type="text" name="date" value="<?php echo "$fetch[11]";?>" readonly="readonly"></td>
                        
                    </tr>  
                    <tr>
                        <td align='left'class="quantity">Department</td>
                        <td class="description"><input type="text" name="department" value="<?php echo "$fetch[6]";?>" readonly="readonly"></td>
                        
                    </tr>
                    
                   
                    <tr>
                        <td class="quantity"></td>
                       
                    </tr> 

                        <tr><td colspan="2"class="quantity"><b>සේවා ඇගයීම</b></td>
                    </tr> 

                        <tr> <td align='left'class="quantity">විශිෂ්ඨයි </td><td>&#x2610;</td> </tr>  
                        <tr><td align='left'class="quantity">හොදයිි </td> <td>&#x2610;</td> </tr>       
                        
                        <tr> <td align='left'class="quantity">සාමාන්‍යයි </td><td>&#x2610;</td>   </tr>  
                        <tr><td align='left'class="quantity">දුර්වලයි </td> <td>&#x2610;</td> </tr> 
                        
                     <tr> <td colspan="2" align='left'class="quantity"><b>Thanks for visiting us</b></td>
        
                    </tr>
                </tbody>
            </table>
            <p class="centered"><b></b></p>
        </div></form>
        
        <a href="../dashboard.php">	<input type="button"  class="hidden-print" id="p2" value="Back"  ></a><br><br>
		</div>
        <script src="script.js"></script>
        
        <script type="text/javascript">
	function print1()
	{
		w1=document.getElementById('p2');
		w1.style.display='none';
		w1.style.display='block';
	}

</script>

<script type="text/javascript">

    function printDiv() {
    var divToPrint = document.getElementById('pdata');
    var popupWin = window.open('', '_blank', 'width=1100,height=400');
        popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
    window.onfocus=function(){ window.close();}
        popupWin.document.close();
        }
       

    </script>

    <script>
    printDiv();
    </script>



    </body>
</html>
