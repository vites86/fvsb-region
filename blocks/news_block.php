<?php                  
$result = mysqli_query($db, "SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM news order by date_ desc limit 2");
while( $myrow = mysqli_fetch_assoc($result) )
     {         
     printf ("<div class='col-1-1'>
     		<div class='wrap-col' >
     			<div style='float:left; width:100%%'>
     			      <img src='%s' style='height:140px; width: 200px ; float:left; margin-right: 15px; margin-top:20px;'/>
     			      <h2 style='font-size: 20px; margin-top:15px; width:100%%;'>%s</h2>
     			      <p style='text-align:justify;'>%s<a href='news.php?id=%s&page=1' target='_blank'>   Детальніше...</a></p>
     		    </div>
     		</div>
     	</div>
    ", $myrow['img'], $myrow['title'], $myrow['description'], $myrow['id'], $myrow['eurodate'] );      	
}	mysqli_free_result($result); 
?> 		