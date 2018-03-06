<?php 
/*include ("blocks/php.php");*/

class Handler 
{	

public function getSportmenIds()
          {
                include ("php.php");
                $result = mysqli_query($db,"SELECT MAX(id)-4 as id FROM `sportmen`");  
                $myrow = mysqli_fetch_assoc($result); 
                return $myrow['id'];                   
          }




}

?>