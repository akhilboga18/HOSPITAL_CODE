<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
       
       include('connection.php');
       include('headerRDS.php');
       
        ?>  
<?php      $billnum= $_POST['billnum'];
			$b_pid= $_POST['b_pid'];
                $cost= $_POST['cost'];
                $paymentmode=$_POST['paymentmode'];
			
			
	   
	 			$query = 'UPDATE bills set 
					 cost="'.$cost.'",paymentmode ="'.$paymentmode.'" WHERE
					billnum ="'.$billnum.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
	include('footer.php');							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "viewBIlls.php";
		</script>
 </body>
</html>