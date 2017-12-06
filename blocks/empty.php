<?php require_once('blocks/php.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
  <meta name="description" content="єдиноборства, бойове двоборство, Київ, київська обласна федерація, ВСБ">
  <?php require_once('blocks/head.php'); ?> 


</head>
<body>
<!-- Header -->
<header>
  <?php require_once('blocks/header.php'); ?>

<script type="text/javascript">
 $(window).load(function(){  
   document.getElementById("gallery_nav").className   = '';  
   document.getElementById("blog_nav").className   = '';  
   document.getElementById("main_nav").className   = '';    
   document.getElementById("about_nav").className   = 'current';    
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