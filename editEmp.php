<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>  
<body>

<?php include('headerES.php'); ?> 
<?php 
$query = 'SELECT * FROM employee WHERE eid ="'.$_GET['eid'].'"';
			  echo $query;
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $ename= $row['ename'];
                $gender= $row['gender'];
                $dob=$row['dob'];
				$salary=$row['salary'];
				$address=$row['address'];
				$phoneno=$row['phoneno'];
                            
              }
              
              $eid = $_GET['eid'];
         
?>
  <main id="main">

    

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        

        <div class="row">

         
        <div id="page-wrapper">

            <div class="container-fluid">


             <div  style="min-width:400px;" class="col-lg-12">
                  <h2>Edit Employee</h2>
                      <div style="margin:30px -10px;" class="col-lg-12">

                        <form role="form" method="post" action="updateEmp.php">
                             <input type="hidden" name="eid" value="<?php echo $eid; ?>" />
                            <div class="form-group">
							<label>Name</label>
                              <input class="form-control" size="20" placeholder="Name" name="ename" readonly value="<?php echo $ename; ?>" >
                            </div>
                            <div class="form-group">
							<label>Gender</label>
                              <input class="form-control" size="15" required placeholder="Gender" name="gender" value="<?php echo $gender; ?>" >
                            </div> 
                            <div class="form-group">
							<label>DOB</label>
                              <input type="text" class="form-control" required placeholder="YYYY-mm-dd" name="dob" value="<?php echo $dob; ?>"
							  >
                            </div> 
                      <div class="form-group">
              <label>Salary</label>
                              <input type="number" class="form-control" placeholder="Salary" required name="salary" value="<?php echo $salary; ?>">
                            </div>
							<div class="form-group">
              <label>Address</label>
                              <input class="form-control" placeholder="Address" required name="address" value="<?php echo $address; ?>">
                            </div>
							<div class="form-group">
              <label>Phone_number</label>
                              <input type="number" class="form-control" placeholder="Phone_number" required name="phoneno" value="<?php echo $phoneno; ?>">
                            </div>
                            <button type="submit" class="btn btn-xs btn-info">Update Record</button>
                           


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        </div>

      </div>
    </section><!-- End Contact Us Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
<?php include('footer.php'); ?> 

</body>

</html>
<script>
$().ready(function() {
		// validate the comment form when it is submitted
		$("#submitForm").validate();
		
});
</script>