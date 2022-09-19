<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>  
<body>

<?php include('header.php'); ?> 
<?php 
$query = 'SELECT * FROM department WHERE dept_name ="'.$_GET['dept_name'].'"';
			  echo $query;
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['dept_name'];
                $i= $row['building'];
                $a=$row['budget'];
                            
              }
              
              $dept_name = $_GET['dept_name'];
         
?>
  <main id="main">

    

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        

        <div class="row">

         
        <div id="page-wrapper">

            <div class="container-fluid">


             <div  style="min-width:400px;" class="col-lg-12">
                  <h2>Edit Department</h2>
                      <div style="margin:30px -10px;" class="col-lg-12">

                        <form role="form" method="post" action="updateDepartment.php">
                             <input type="hidden" name="dept_name" value="<?php echo $dept_name; ?>" />
                            <div class="form-group">
							<label>Name</label>
                              <input class="form-control" size="20" placeholder="Name" name="name" readonly value="<?php echo $dept_name; ?>" >
                            </div>
                            <div class="form-group">
							<label>Building</label>
                              <input class="form-control" size="15" required placeholder="Building" name="building" value="<?php echo $i; ?>" >
                            </div> 
                            <div class="form-group">
							<label>Budget in $</label>
                              <input type="number" class="form-control" required placeholder="Budget" name="budget" value="<?php echo $a; ?>"
							  >
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