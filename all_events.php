<?php require_once('blocks/php.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta name="description" content="єдиноборства, бойове двоборство, Київ, київська обласна федерація, ВСБ">
	<title>Події ВСБ</title>
	<?php require_once('blocks/head.php'); ?>
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


<!-- Content -->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block05">
			<div class="title"><span>НОВИНИ</span></div><br>
			<div class="col-1-1">
				<div class="wrap-col">

							<?php                  
				                       $result = mysql_query("SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM events order by date_ desc limit 3",$db);
				                       $myrow = mysql_fetch_array ($result);
				                       do {         
				                            printf ("      <article>
				                           						<h2><a href='events.php?id=%s'>%s</a></h2>
				                           						<div class='info'>[Додав Admin  %s, <a href='#'>0 Коментарів</a>]</div>
				                           			 			<a href='events.php?id=%s'><img src='%s'/></a>
				                           						<p>%s...</p>
				                           					</article>
				                           ", $myrow['id'],  $myrow['title'], $myrow['eurodate'], $myrow['id'], $myrow['img'], $myrow['description']);      
				                           }
				                       while ($myrow = mysql_fetch_array($result));
				                 ?> 					
					
				</div>				
			</div>
			
			<div style="width:100%; text-align: center;">
	    		<ul id="pagi">
	    			<li><a class="current" href="#">1</a></li>
	    			<li><a href="#">2</a></li>
	    			<li><a href="#">3</a></li>
	    			<li><a href="#">4</a></li>
	    			<li><a href="#">next</a></li>
	    		</ul>	
	    	</div>	

		</div>
	</div>
</section>
<!-- Footer -->
<footer>
	<?php require_once('blocks/footer.php'); ?>	
</footer>
</body></html>