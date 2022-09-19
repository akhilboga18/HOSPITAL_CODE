<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>  
<body>

<?php include('headerRDS.php'); ?> 

  <main id="main">

    

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        

        <div class="row">

          <div class="col-lg-12">
                        <h2>Bills</h2> 
						
						<div style="float:right;padding:30px 0"><a href="addBill.php?action=add" type="button" class="btn btn-xs btn-info">Add New Bill</a></div>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
									<th>Bill Num</th>
                                        <th>Patient Id</th>
                                        <th>cost</th>
                                        <th>Payment Mode</th>
										
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM bills';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
							echo '<td>'. $row['billnum'].'</td>';
                            echo '<td>'. $row['b_pid'].'</td>';
                            echo '<td>'. $row['cost'].'$</td>';
                            echo '<td>'. $row['paymentmode'].'</td>';
							
                            echo '<td>'; 
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="editBill.php?action=edit&billnum='.$row['billnum'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger delete" gotohref="delBill.php?billnum=' . $row['billnum'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
<?php include('footer.php'); ?> 
<script>
$(function(){
	$("a.delete").click(function(){
		var  link=$(this).attr("gotohref");
		var x= confirm("are you sure ?");
		if(x){
			window.location=link;
		}
	});
});
</script>
</body>

</html>