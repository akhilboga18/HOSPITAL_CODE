<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>  
<body>

<?php include('headerPD.php'); ?> 
<?php 
$query = 'SELECT * FROM patient WHERE pid ="'.$_GET['pid'].'"';
			  echo $query;
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $pname= $row['pname'];
                $gender= $row['gender'];
                $dob=$row['dob'];
				$age=$row['age'];
				                            
              }
              
              $pid = $_GET['pid'];
         
?>
  <main id="main">

    

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        

        <div class="row">

         
        <div id="page-wrapper">

            <div class="container-fluid">


             <div  style="min-width:400px;" class="col-lg-12">
                  <h2>Edit Patient</h2>
                      <div style="margin:30px -10px;" class="col-lg-12">

                        <form role="form" method="post" action="updatePatient.php">
                             <input type="hidden" name="pid" value="<?php echo $pid; ?>" />
                            <div class="form-group">
							<label>Name</label>
                              <input class="form-control" size="20" placeholder="Name" name="pname" readonly value="<?php echo $pname; ?>" >
                            </div>
                            <div class="form-group">
							<label>Gender</label>
                              <input class="form-control" size="15" required placeholder="Gender" name="gender" value="<?php echo $gender; ?>" >
                            </div> 
                            <div class="form-group">
							<label>DOB</label>
                              <input type="date" class="form-control" required placeholder="DOB" name="dob" value="<?php echo $dob; ?>"
							  >
                            </div> 
                      <div class="form-group">
              <label>Age</label>
                              <input type="number" class="form-control" placeholder="Age" required name="age" value="<?php echo $age; ?>">
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