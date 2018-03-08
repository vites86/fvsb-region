<?php                  
   $result = mysqli_query($db, "SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM events where NOW() < date_ order by date_");
   while( $myrow = mysqli_fetch_assoc($result) )
   {         
   printf (" <li class='tcarusel-item'>
   <a href='events.php?id=%s&page=1'>
   <img class='news_img' src='%s' alt='%s' tooltip='%s'><br>				 
   <b>%s</b> // %s //   <br>%s
   </a>
   </li>	   				                                                    	      
   ", $myrow['id'], $myrow['img'], $myrow['title'], $myrow['title'], $myrow['eurodate'], $myrow['city'], $myrow['title']  );
   }
   mysqli_free_result($result); 
?> 		