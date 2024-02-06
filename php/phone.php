
<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
if(isset($_POST['ic1']))
$_SESSION['myValue'] = $_POST['$ic1'];

?>
<!DOCTYPE html>
<html>
<head>
 <script>        
           function idno(){          
            $('#ic1').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 46; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }
       </script>
	<title>ID Number</title>
	<link rel="stylesheet" href="../css/custom.css">
	<style type="text/css">
		body
		{
			margin:0px;
	background:-webkit-linear-gradient(#384e72, #4b648c ,#60789e,#4b648c, #384e72);
		}
	</style>
</head>
<body>
 <form action="pass.php" method="post">
                        <div class="main">
                        <h2>ID Number</h2>
                        <input id="ic1" type="text" pattern="\d{12}" title="Please enter exactly 12 digits" onkeypress="idno()" maxlength="12" name="ic1" style="width: 300px; height: 12px; border-radius: 10px; padding: 10px; color: black;" required>
                        <span id="message"></span><br><br>
                        <input type="submit" value="Create" style="width: 150px; height: 25px; border-radius: 10px; border: none;">
                        </div>
                </form>
</body>
</html>
