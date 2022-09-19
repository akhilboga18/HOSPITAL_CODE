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
                        <h2>Instructors</h2> 
						
						
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr><th>Id</th>
									<th>Name</th>
                                        <th>Department Name</th>
                                        
                                        <th>Salary</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM instructor';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
							echo '<td>'. $row['ID'].'</td>';
							echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['dept_name'].'</td>';
                            
                            echo '<td>'. $row['salary'].'</td>';
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

</body>

</html>