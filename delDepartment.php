
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<body>
<?php


					$query = 'DELETE FROM department
							WHERE
							dept_name = "' . $_GET['dept_name'].'"';
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
	include('footer.php');					
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "viewDepartments.php";
			</script>				
		

</body>
</html>