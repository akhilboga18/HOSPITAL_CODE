<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
       
       include('connection.php');
       include('headerES.php');
       
        ?>  
<?php      $eid= $_POST['eid'];
			$ename= $_POST['ename'];
                $gender= $_POST['gender'];
                $dob=$_POST['dob'];
				$salary=$_POST['salary'];
				$address=$_POST['address'];
				$phoneno=$_POST['phoneno'];
			
			
	   
	 			$query = 'UPDATE employee set 
					ename ="'.$ename.'", gender="'.$gender.'",dob ="'.$dob.'", phoneno="'.$phoneno.'",salary ="'.$salary.'", address="'.$address.'" WHERE
					eid ="'.$eid.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
	include('footer.php');							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "viewEmployees.php";
		</script>
 </body>
</html>