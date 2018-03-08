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
  $result = mysqli_query($db,"SELECT meta_k, meta_d, title FROM news where id = $id ");
  while( $myrow = mysqli_fetch_assoc($result) )
  {  
    $title=$myrow['title'];       
    printf ("
    <meta name='keywords' content='%s' />
    <meta name='description' content='%s' />
    <title>%s</title>", $myrow['meta_k'], $myrow['meta_d'], $myrow['title']);      
  }
  mysqli_free_result($result); 

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
                        $result = mysqli_query($db,"SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM news WHERE id=$id");
                        if (!$result) { die('Неверный запрос: ' . mysqlш_error());}
                        $current_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        while( $myrow = mysqli_fetch_assoc($result) ) 
                        {         
                          printf ("   <article>                                      
                                      <div class='info'>[Додав Admin  %s, <a href='#'>0 Коментарів</a>]</div>
                                      <img style='width:30%%; float:left; margin: 8px 8px 8px 0px;' src='%s'/>
                                      <p>%s</p>
                                      <p>%s</p>
                                      <div class='fb-share-button' data-href='$current_link' data-layout='button'></div>
                                    </article>
                          ",  $myrow['eurodate'], $myrow['img'], $myrow['description'], $myrow['text_']);      
                        }
                         mysqli_free_result($result); 
                    ?> 
                    <hr style="width: 90%;" align="center">
                    <div class="title"><span>Галерея</span></div>
                            <div class="wrapper2" style="padding-top:5px;">  
                                <script src="js/jquery.js" type="text/javascript"></script>
                                <script src="js/jquery.fancybox-1.3.4.js" type="text/javascript"></script>
                                <script src="js/script.js" type="text/javascript"></script>
                                <link type="text/css" href="styles/jquery.fancybox-1.3.4.css" rel="stylesheet">
                                   <?php 
                                          $dir = "img/news/".$id."/"; // Папка с изображениями  
                                          $files = scandir($dir); // Берём всё содержимое директории
                                          

                                            echo "<div id='gallery'><p>"; 
                                            $k = 0; // Вспомогательный счётчик для перехода на новые строки
                                            for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
                                              if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
                                                $path = $dir.$files[$i]; // Получаем путь к картинке        
                                                echo "<a rel='flowers' title='$title' href='$path'>"; 
                                                echo "<img style='margin-top:10px; box-shadow: 2px 2px 1px rgba(0,0,0,0.6);height:80px;width:120px;' src='$path' alt='ромашка'></a>&nbsp&nbsp "; 
                                                $k++; // Увеличиваем вспомогательный счётчик
                                              }
                                            }
                                            echo "</p></div>";                          
                                   ?> 
                                 <div id="empty"></div>  
                            </div>
                         
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