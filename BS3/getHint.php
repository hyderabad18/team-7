   <?php                        
                                    $sql="select * from vacancies ";
                                    $result=$conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        ?>
                                  
    
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Organization Name</th>                                
                                    	<th>Role</th>
										<th>Description</th>
										<th>Vacancies</th>
										<th>Last Date to Apply</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    
                                      while($row = $result->fetch_assoc())
                                      { 
                                      ?>
                                      <tr>
                                       <td><?php echo $row['org_name'];?> </td>                                       
                                       <td><?php echo $row['role'];?> </td>
									    <td><?php echo $row['descr'];?> </td> 
										<td><?php echo $row['vacancies'];?> </td>
										<td><?php echo $row['date'];?> </td>
                                      </tr> 
                                      <?php }//while 
                                  }//if
                                  ?> 
                                    </tbody>
                                </table>
