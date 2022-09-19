
<?php
       
       include('connection.php');
       include('headerRDS.php');
       
        ?>  

<body>
<?php


					$query = 'DELETE FROM bills
							WHERE
							billnum = "' . $_GET['billnum'].'"';
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
	include('footer.php');					
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "viewBills.php";
			</script>				
		

</body>
</html>