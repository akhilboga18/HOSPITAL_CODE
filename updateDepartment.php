<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  
<?php
			$dname = $_POST['dept_name'];
			$bname = $_POST['building'];
		    $budget = $_POST['budget'];
			
			
	   
	 			$query = 'UPDATE department set 
					building ="'.$bname.'", budget="'.$budget.'" WHERE
					dept_name ="'.$dname.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
	include('footer.php');							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "viewDepartments.php";
		</script>
 </body>
</html>