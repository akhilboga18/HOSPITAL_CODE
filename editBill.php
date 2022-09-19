<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>  
<body>

<?php include('headerRDS.php'); ?> 
<?php 
$query = 'SELECT * FROM bills WHERE billnum ="'.$_GET['billnum'].'"';
			  echo $query;
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $b_pid= $row['b_pid'];
                $cost= $row['cost'];
                $paymentmode=$row['paymentmode'];
				                            
              }
              
              $billnum = $_GET['billnum'];
         
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

                        <form role="form" method="post" action="updateBill.php">
                             <input type="hidden" name="billnum" value="<?php echo $billnum; ?>" />
                            <div class="form-group">
							<label>Patient Id</label>
                              <input class="form-control" readonly size="20" placeholder="Name" name="b_pid" readonly value="<?php echo $b_pid; ?>" >
                            </div>
                            <div class="form-group">
							<label>Cost ($)</label>
                              <input type="number" class="form-control" size="15" required placeholder="Cost" name="cost" value="<?php echo $cost; ?>" >
                            </div> 
                            <div class="form-group">
							
							<label>Payment Mode </label>
                              <select class="form-control" id="paymentmode" name="paymentmode">
							  <option <?php  if($paymentmode=="Debit Card") echo "selected"; ?> value="Debit Card">Debit Card</option>
							  <option <?php  if($paymentmode=="Credit Card") echo "selected"; ?> value="Credit Card">Credit Card</option>
							  <option <?php  if($paymentmode=="Cash") echo "selected"; ?> value="Cash">Cash</option>
							  </select>
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