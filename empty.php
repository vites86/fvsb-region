<!DOCTYPE html>
<html lang="en">
<head>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate" />
 <?php 
include ("blocks/php.php");
$id=$_GET["id"];
$result = mysql_query("SELECT meta_k, meta_d, title FROM mane_page_animators_slider where id = $id ",$db);
$myrow = mysql_fetch_array($result);
do {         
printf ("
  <meta name='keywords' content='%s' />
  <meta name='description' content='%s' />
  <title>%s</title>", $myrow['meta_k'], $myrow['meta_d'], $myrow['title']);      
    }
while ($myrow = mysql_fetch_array($result));
?> 

<link href="styles/style_forMainPage.css" rel="stylesheet" />
<link href="images/favicon.ico" rel="icon"/>

</head>

<body class="home" >
   <?php include ("blocks/header_slider.php"); ?>
   <header>   
   <?php include ("blocks/header_menu.php"); ?>
   </header> 

<!--========================================================================-->
<div id="container">  
  <div class="wrapper1">       
        <section id="menu2">    
          <?php include ("blocks/header_menu_containerAboveMain.php"); ?>          
        </section> 
          <?php include ("blocks/page_attr.php"); ?>
     <div class="wrapper2" style="padding-top:5px;">  
         <script src="js/jquery.js" type="text/javascript"></script>
         <script src="js/jquery.fancybox-1.3.4.js" type="text/javascript"></script>
         <script src="js/script.js" type="text/javascript"></script>
         <link type="text/css" href="styles/jquery.fancybox-1.3.4.css" rel="stylesheet">
         <?php 
              include ("blocks/php.php");
              $id=$_GET["id"];
              $result = mysql_query("SELECT id, title, img_src, description FROM mane_page_animators_slider where id = $id ",$db);
              $myrow = mysql_fetch_array($result);
              $title="";
              do {   
              $title = $myrow['title'];     
              printf ("<h1 style='font-size:30px'>%s</h1><br>
                <p style='text-align:justify; padding-left:20px;'>%s</p><br><br><br>
                       <img src='%s' style='height:350px; box-shadow: 7px 7px 5px rgba(0,0,0,0.6);' alt='%s'/><br><br><br> 
              ",$myrow['title'], $myrow['description'], $myrow['img_src'], $myrow['title']);      
                  }
              while ($myrow = mysql_fetch_array($result));
                $dir = "images/gallery/animators/$id/"; // Папка с изображениями  
                $files = scandir($dir); // Берём всё содержимое директории
                echo "<div id='gallery'><p>"; 
                $k = 0; // Вспомогательный счётчик для перехода на новые строки
                for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
                  if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
                    $path = $dir.$files[$i]; // Получаем путь к картинке        
                    echo "<a rel='flowers' title='$title' href='$path'>"; 
                    echo "<img style='top:10px; box-shadow: 2px 2px 1px rgba(0,0,0,0.6);' height='80px;' src='$path' alt='ромашка'></a>&nbsp&nbsp "; 
                    $k++; // Увеличиваем вспомогательный счётчик
                  }
                }
                echo "</p></div>"; 
         ?>  <br><br><br><br><br><br><br><br><br><br><br><br>
      <div id="empty"></div>  
    </div><!--===== wrapper2  ======-->
  </div><!--===== wrapper1  ======-->
</div><!--===== container  ======-->

 <footer> 
   <div class="wrapper">  
     <?php include ("/blocks/footer.php"); ?>
   </div>
 </footer>    

</body>
</html>