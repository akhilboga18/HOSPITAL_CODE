
<?php
       
       include('connection.php');
       include('headerPD.php');
       
        ?>  

<body>
<?php


					$query = 'DELETE FROM patient
							WHERE
							pid = "' . $_GET['pid'].'"';
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
	include('footer.php');					
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "viewPatients.php";
			</script>				
		

</body>
</html>