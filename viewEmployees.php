<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>  
<body>

<?php include('header.php'); ?> 

  <main id="main">

    

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        

        <div class="row">

          <div class="col-lg-12">
                        <h2>Employees</h2> 
						
						<div style="float:right;padding:30px 0"><a href="addEmp.php?action=add" type="button" class="btn btn-xs btn-info">Add New Employee</a></div>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>DOB</th>
										 <th>Salary</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM employee';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['ename'].'</td>';
                            echo '<td>'. $row['gender'].'</td>';
                            echo '<td>'. $row['dob'].'</td>';
							 echo '<td>'. $row['salary'].'</td>';
                            echo '<td>'. $row['address'].'</td>';
                            echo '<td>'. $row['phoneno'].'</td>';
                            echo '<td>'; 
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="editEmp.php?action=edit&eid='.$row['eid'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger delete" gotohref="delEmp.php?eid=' . $row['eid'] . '">DELETE </a> </td>';
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