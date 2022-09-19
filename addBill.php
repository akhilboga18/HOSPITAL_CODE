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
                  <h2>Add new Bill</h2>
                      <div style="margin:30px -10px;" class="col-lg-12">

                        <form id="submitForm" role="form" method="post" action="transacBill.php?action=add">
                            
                            <!--div class="form-group">
							<label>Employee ID</label>
                              <input class="form-control" size="20" placeholder="ID" required name="Employee_ID">
                            </div-->
                            <div class="form-group">
							 <?php                  
                $query = 'SELECT * FROM patient';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));?>
                  
                       
							<label>Patient Id</label>
                              <select class="form-control" id="b_pid" name="b_pid">
							   <?php     while ($row = mysqli_fetch_assoc($result)) {?>
							  <option value="<?php echo $row['pid'] ?>"><?php echo $row['pid'] ?></option>
							   <?php } ?>
							  </select>
                            </div> 
                                          
							<div class="form-group">
							<label>Cost($)</label>
                              <input type="number" class="form-control" placeholder="Cost" required name="cost">
                            </div>
							
						<div class="form-group">
							<label>Payment Mode </label>
                              <select class="form-control" id="paymentmode" name="paymentmode">
							  <option value="Debit Card">Debit Card</option>
							  <option value="Credit Card">Credit Card</option>
							  <option selected value="Cash">Cash</option>
							  </select>
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