<?php include ("blocks/php.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Галерея</title>
	<meta name="description" content="Галерея, федерація військово-спортивних багатоборств, бойове двоборство">
    <?php require_once('blocks/head.php'); ?>
    <script type="text/javascript">
     $(window).load(function(){  
       document.getElementById("gallery_nav").className   = 'current';         	
       document.getElementById("blog_nav").className   = '';  
       document.getElementById("main_nav").className   = '';    
       document.getElementById("about_nav").className   = '';    
       document.getElementById("contacts_nav").className   = '';    
    });
    </script>
</head>
<body>
<!-- Header -->
<header>
	<?php require_once('blocks/header.php'); ?>	
</header>

<!--Content-->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03 gallery">
			<div class="title"><span>Галерея</span></div><br>

			<?php                  
			   $result = mysql_query("SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM news order by date_ desc",$db);
			   $myrow = mysql_fetch_array ($result);
			   do {         
			   printf ("
			   	<div class='col-1-4'>
				  <div class='wrap-col'>
					  <a href='photo.php?id=%s'><img src='%s' class='grayscale'/></a>
					  <center><h2>%s</h2></center>
				  </div>
			    </div> ",$myrow['id'], $myrow['img'], $myrow['short_name']);      
                           }
               while ($myrow = mysql_fetch_array($result));
                 ?> 
			
			
		</div>
	</div>
</section>
<!-- Footer -->
<footer>
	<?php require_once('blocks/footer.php'); ?>	
</footer>
</body></html>