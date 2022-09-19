
<?php
       
       include('connection.php');
       include('headerES.php');
       
        ?>  

<body>
<?php


					$query = 'DELETE FROM employee
							WHERE
							eid = "' . $_GET['eid'].'"';
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
	include('footer.php');					
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "viewEmployees.php";
			</script>				
		

</body>
</html>