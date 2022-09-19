<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
       
       include('connection.php');
       include('headerPD.php');
       
        ?>  
<?php      $pid= $_POST['pid'];
			$pname= $_POST['pname'];
                $gender= $_POST['gender'];
                $dob=$_POST['dob'];
				$age=$_POST['age'];
			
			
	   
	 			$query = 'UPDATE patient set 
					pname ="'.$pname.'", gender="'.$gender.'",dob ="'.$dob.'", age="'.$age.'" WHERE
					pid ="'.$pid.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
	include('footer.php');							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "viewPatients.php";
		</script>
 </body>
</html>