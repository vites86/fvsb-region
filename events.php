<?php require_once('blocks/php.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
  <?php require_once('blocks/head.php'); ?>
  <?php 
  $id=$_GET["id"];
  $result = mysql_query("SELECT meta_k, meta_d, title FROM events where id = $id ",$db);
  $myrow = mysql_fetch_array($result);
  do {      
  $title=$myrow['title'];   
  printf ("
    <meta name='keywords' content='%s' />
    <meta name='description' content='%s' />
    <title>%s</title>", $myrow['meta_k'], $myrow['meta_d'], $myrow['title']);      
      }
  while ($myrow = mysql_fetch_array($result));
  ?> 
<style type="text/css">
  p {text-align: justify;}
</style>

</head>
<body>
<!-- Header -->
<header>
  <?php require_once('blocks/header.php'); ?>

<script type="text/javascript">
 $(window).load(function(){  
   document.getElementById("blog_nav").className   = 'current';  
   document.getElementById("main_nav").className   = '';    
   document.getElementById("about_nav").className   = '';    
   document.getElementById("gallery_nav").className   = '';    
   document.getElementById("contacts_nav").className   = '';    
});
</script>
</header>
<section id="content">
  <div class="wrap-content zerogrid">
    <div class="row block05">
      <div class="title"><span><?php echo $title ?></span></div><br>
        <div class="col-1-1">
           <div class="wrap-col">

                   <?php         
                        $result = mysql_query("SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM events WHERE id=$id",$db);
                        if (!$result) { die('Неверный запрос: ' . mysql_error());}
                        $myrow = mysql_fetch_array ($result);
                        $current_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        do {         
                        printf ("   <article>
                                      <div class='info'>[Додав Admin  %s, <a href='#'>0 Коментарів</a>]</div>
                                      <img src='%s'/>
                                      <p>%s</p>
                                      <p>%s</p>
                                      <div class='fb-share-button' data-href='$current_link' data-layout='button'></div>
                                    </article>
                          ",  $myrow['eurodate'], $myrow['img'], $myrow['description'], $myrow['text_']);      
                            }
                        while ($myrow = mysql_fetch_array($result));
                    ?> 
                    
                         
           </div>        
        </div>
      </div>
    </div>
  </section>
                            <!-- Footer -->
<footer>
                              <?php require_once('blocks/footer.php'); ?> 
</footer>
</body></html>       