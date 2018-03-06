      <br><br><form action="handler.php" method="post"> 
                   <input type="hidden" name="handler"  id="handler" value="del_sportmen"/>
                   <?php 
                   $result = mysqli_query($db,"SELECT * FROM sportmen");
                   while( $myrow = mysqli_fetch_assoc($result) )
                  {
                   printf ("<p><input name='id' type='radio' value='%s'>
                            <lable>%s</lable></p>
                            <input name='img_src' type='hidden' value='%s'>",
                            $myrow["id"],$myrow["name"],$myrow["rank"]);
                   }
                   mysqli_free_result($result);
                   ?>
                   <br>
                   <p><input name="submit" type="submit" value="Видалити"></p>
                   </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>