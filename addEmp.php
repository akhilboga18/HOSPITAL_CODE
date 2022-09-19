<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>  
<body>

<?php include('headerES.php'); ?> 

  <main id="main">

    

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        

        <div class="row">

         
        <div id="page-wrapper">

            <div class="container-fluid">


             <div  style="min-width:400px;" class="col-lg-12">
                  <h2>Add new Employee</h2>
                      <div style="margin:30px -10px;" class="col-lg-12">

                        <form id="submitForm" role="form" method="post" action="transac.php?action=add">
                            
                            <!--div class="form-group">
							<label>Employee ID</label>
                              <input class="form-control" size="20" placeholder="ID" required name="Employee_ID">
                            </div-->
                            <div class="form-group">
							<label>Name</label>
                              <input class="form-control" size="15" placeholder="Name" required name="Name">
                            </div> 
                            <div class="form-group">
							<label>Gender</label>
                              <input class="form-control" placeholder="Gender" required name="Gender">
                            </div>
              <div class="form-group">
			  <label>DOB </label>
                              <input type="date" class="form-control" placeholder="Date"  required name="DOB">
                            </div>
							<div class="form-group">
              <label>Salary</label>
                              <input type="number" class="form-control" placeholder="Salary" required name="Salary">
                            </div>
							<div class="form-group">
              <label>Address</label>
                              <input class="form-control" placeholder="Address" required name="Address">
                            </div>
							<div class="form-group">
              <label>Phone_number</label>
                              <input type="number" class="form-control" placeholder="Phone_number" required name="Phone_number">
                            </div>
      
              <button type="submit" class="btn btn-xs btn-info">Save Record</button>
              <button type="reset" class="btn btn-xs btn-info">Clear Entry</button>


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