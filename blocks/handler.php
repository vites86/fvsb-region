<?php 
/*include ("blocks/php.php");*/

class Handler 
{	

public function getSportmenIds()
          {
                include ("php.php");
                $result = mysql_query("SELECT MAX(id)-4 as id FROM `sportmen`",$db);  
                $myrow = mysql_fetch_array ($result); 
                return $myrow['id'];                   
          }




}

?>