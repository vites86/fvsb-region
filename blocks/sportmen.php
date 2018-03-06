<?php      

							$id0 = Handler::getSportmenIds();	
							$id = rand(0, $id0);						
							$id1 = $id + 1;
							$id2 = $id + 2;
							$id3 = $id + 3;
							$id4 = $id + 4;
							if ($result = mysqli_query($db, "SELECT * FROM sportmen WHERE id in ($id1,$id2,$id3,$id4)")) 
	                        {		   
							    while( $myrow = mysqli_fetch_assoc($result) )
	                            {							       
							    printf (" 
							    <div class='col-1-4'>
							    <div class='wrap-col' style='width:100%%; text-align:center'>
							    <img src='img/sportmen/%s.png' alt='img/sportmen/%s.png' style='margin-top:20px;'/>
							    <h2 style='width:100%%; text-align:center'>%s</h2>
							    <p style='width:100%%; text-align:center'><strong>%s</strong></p>
							    <p style='width:100%%; text-align:center'>%s</p>
							    </div>
							    </div>
							    ", $myrow['id'], $myrow['id'], $myrow['name'], $myrow['rank'], $myrow['description'] );      
								 }mysqli_free_result($result); 
							}
?> 				