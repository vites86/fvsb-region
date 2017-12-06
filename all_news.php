<?php require_once('blocks/php.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta name="description" content="єдиноборства, бойове двоборство, Київ, київська обласна федерація, ВСБ">
	<title>Новини ВСБ</title>
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
                                     $max_posts=3; 
                                     $num_posts=mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM news")) or die(mysql_error());
                                     $num_posts = $num_posts["COUNT(*)"]; 
                                     $num_pages=ceil($num_posts/$max_posts);  
                                     if (isset($_GET['page']))  {$page=$_GET['page'];} else {$page=1;}
                                     if ($page>$num_pages) {$page=$num_pages;}
                                     if ($page<1) {$page=1;}
                                      $result=mysql_query("SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM news order by date_ desc LIMIT ".($page-1)*$max_posts.",". $max_posts ); 
                                      $myrow = mysql_fetch_array($result);
									do {         
				                            printf ("      <article>
				                           						<div>
				                           			 			    <a href='news.php?id=%s'>
				                           			 			          <img style='width:30%%; float: left; margin:10px;' src='%s'/>
				                           			 			          <h2 ><a style='margin-top:15px;' href='news.php?id=%s'>%s</a></h2>
				                           			 			          <div class='info'>[Додав Admin  %s, <a href='#'>0 Коментарів</a>]</div>
				                           			 			    </a>
				                           						    <p style='font-size:1.3em;'>%s... <a href='news.php?id=%s'>Детальніше</a></p>
				                           					    </div>
				                           					</article>
				                           ", $myrow['id'], $myrow['img'], $myrow['id'], $myrow['title'], $myrow['eurodate'], $myrow['description'], $myrow['id']);      
				                           }
									while($myrow = mysql_fetch_array($result));   				                      
				            ?> 					
					
				</div>				
			</div>
			
			<div style="width:100%; text-align: center;">
	    		<ul id="pagi">
	    		      <?php 
                            for($i=1; $i <= $num_pages; $i++) 
                            	{
                            		if ($page==$i) echo "<li><a class='current' href='all_news.php?page=$i'> $i </a></li>"; 
                            		else
                            		echo "<li><a href='all_news.php?page=$i'> $i </a></li>"; 
                            	}  
	    		      ?>	    			
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