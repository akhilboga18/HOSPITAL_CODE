<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>  
<body>

<?php include('headerPD.php'); ?> 

  <main id="main">

    

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        

        <div class="row">

          <div class="col-lg-12">
                        <h2>Patients</h2> 
						
						<div style="float:right;padding:30px 0"><a href="addPatient.php?action=add" type="button" class="btn btn-xs btn-info">Add New Patient</a></div>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
									<th>Id</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>DOB</th>
										<th>Age</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM patient';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
							echo '<td>'. $row['pid'].'</td>';
                            echo '<td>'. $row['pname'].'</td>';
                            echo '<td>'. $row['gender'].'</td>';
                            echo '<td>'. $row['dob'].'</td>';
							echo '<td>'. $row['age'].'</td>';
                            echo '<td>'; 
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="editPatient.php?action=edit&pid='.$row['pid'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger delete" gotohref="delPatient.php?pid=' . $row['pid'] . '">DELETE </a> </td>';
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