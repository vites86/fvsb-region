<?php 
/*include ("blocks/php.php");*/

class Adminka 
{	

 

 public function delGalleryFoto()
{
   if(!empty($_POST['gallery_list']))
   {
      $check_list=$_POST['gallery_list'];  
      $n = count($check_list);
      foreach ($_POST['gallery_list'] as $selected) {
             if (file_exists($selected)) @unlink($selected);  
           }        
   }
   else
   {
      return "<p style='color:red;'>   Вы не указали файлы для удаления!!!</p>";
   }
   return "<p style='color:blue;'>      Удалено $n фотографий</p>";
}

public function addFotoGallery()
{
     $fileName = time() . "_" . basename($_FILES["newFotoGallery"]["name"]);
     $file_path = $_SERVER['DOCUMENT_ROOT'] . "/images/gallery/other/" . $fileName;
     if(move_uploaded_file($_FILES['newFotoGallery']['tmp_name'], $file_path)){ return "<img style='margin:30px;' src='../images/gallery/other/$fileName' alt=''/><p style='color:blue;'>        Фото добалено успешно!</p>";}
     else {return "<p style='color:red;'>       Фото не добавлено!</p>";}
}



public function addVideo()
{ 
    $fileName = time() . "_" . basename($_FILES["videofileImg"]["name"]);  
    $file_path = $_SERVER['DOCUMENT_ROOT'] . "/images/gallery/video/" . $fileName;
    $directory = $_SERVER['DOCUMENT_ROOT'] . "/images/gallery/video/";    
    if (!is_dir($directory)) mkdir($directory,0777);    
    move_uploaded_file($_FILES['videofileImg']['tmp_name'], $file_path);
   
    $fileName1 = time() . "_" . basename($_FILES["videofile"]["name"]);  
    $file_path1 = $_SERVER['DOCUMENT_ROOT'] . "/images/gallery/video/" . $fileName1;
    $directory1 = $_SERVER['DOCUMENT_ROOT'] . "/images/gallery/video/";    
    if (!is_dir($directory1)) mkdir($directory1,0777);    
    move_uploaded_file($_FILES['videofile']['tmp_name'], $file_path1);
 
          $file_path_forBD1 = 'images/gallery/video/' . $fileName;
          $file_path_forBD2 = 'images/gallery/video/' . $fileName1;
          $result= mysql_query ("INSERT INTO video(img_src, video_src) VALUES ($file_path_forBD1, $file_path_forBD2)");
          if ($result == 'true') 
            {
              return "<img style='margin:30px;' src='../images/gallery/other/$fileName' alt=''/><p style='color:blue;'>    Добавлено успешно!</p>";
            }
          else 
            {
              return "<p style='color:red;'>   Не Добавлено!</p>";
          } 
}


public function delVideo($id,$img_src,$video_src)
{
 include ("blocks/php.php");
 if (isset($id) && isset($img_src) && isset($video_src))
 { 
    $result= mysql_query ("DELETE FROM video WHERE id='$id'");
    if ($result == 'true') 
    {
$file_path1 = $_SERVER['DOCUMENT_ROOT'] . "/" . $img_src;
$file_path2 = $_SERVER['DOCUMENT_ROOT'] . "/" . $video_src;    
    
      if(file_exists($file_path1)) @unlink($file_path1);
      if(file_exists($file_path2)) @unlink($file_path2);
      return "<p style='color:blue;'>        Программа удалена!</p>";
    }
    else {return "<p style='color:red;'>       Программа не удалена!</p>";}
 }
 else 
 {
 return "<p style='color:red;'>       Вы не указали программу для удаления!</p>";
 } 
}


          public function getPageTitle($id)
          {       
              include ("php.php");
              $result = mysql_query("SELECT * FROM pages WHERE id=$id",$db);
              if (!$result) { die('Неверный запрос: ' . mysql_error());}
              $myrow = mysql_fetch_array ($result); 
              do { $pageTitle = $myrow['title']; }
              while ($myrow = mysql_fetch_array($result));
              return $pageTitle;
          }

          public function pageSrc($id)
          {
                include ("blocks/php.php");
                $result = mysql_query("SELECT src as src FROM pages where id like '$id'",$db);  
                // if (!$result) {die('Ошибка выполнения запроса:' . mysql_error());}
                $myrow = mysql_fetch_array ($result); 
                do { $id= $myrow['id'];}
                while($myrow = mysql_fetch_array($result));      
                return $count_shou;
          }
          public function addNews($news_count, $title, $short_name,$meta_d, $meta_k, $description, $author, $text, $ext)
          {      
                include ("blocks/php.php");   
                $query = "INSERT INTO news(id, title, short_name, meta_d, meta_k, description, author, img, text_, date_ ) 
                  VALUES ($news_count, '$title','$short_name','$meta_d','$meta_k', '$description', '$author', 'img/news/$news_count.$ext', '$text', NOW())";
                //return "addNews() - ".$query;                 
                $result= mysql_query ($query);
                if (!$result)                   
                    return "addNews(): bad mysql_query(".mysql_error().")";
                else 
                    return "good";         
          }

          public function getNewsCount()
          {
                include ("blocks/php.php");
                $result = mysql_query("SELECT MAX(id) as id FROM news",$db);  
                $myrow = mysql_fetch_array ($result); 
                do { 
                  $count_news= $myrow['id'];
                }
                while($myrow = mysql_fetch_array($result));      
                return $count_news;
          }

          public function addArticle($events_count, $title, $meta_d, $meta_k, $description, $author, $text, $ext, $city, $date)
          {      
                include ("blocks/php.php");   
                $query = "INSERT INTO events(id, title, meta_d, meta_k, description, author, img, text_, city, date_ ) 
                  VALUES ($events_count, '$title','$meta_d','$meta_k', '$description', '$author', 'img/events/$events_count.$ext', '$text', '$city', '$date' )";
                //return "addNews() - ".$query;                 
                $result= mysql_query ($query);
                if (!$result)                   
                    return "addNews(): bad mysql_query(".mysql_error().")";
                else 
                    return "good";         
          }
          
          public function addSportsmen($sportsmen_count, $name, $rank, $description)
          {      
                include ("blocks/php.php");   
                $query = "INSERT INTO sportmen(id, name, rank,  description ) 
                  VALUES ($sportsmen_count, '$name','$rank', '$description')";
                //return "addNews() - ".$query;                 
                $result= mysql_query ($query);
                if (!$result)                   
                    return "addSportsmen(): bad mysql_query(".mysql_error().")";
                else 
                    return "good";         
          }
          public function getArticlesCount()
          {
                include ("blocks/php.php");
                $result = mysql_query("SELECT MAX(id) as id FROM events",$db);  
                $myrow = mysql_fetch_array ($result); 
                do { 
                  $count_news= $myrow['id'];
                }
                while($myrow = mysql_fetch_array($result));      
                return $count_news;
          }

          public function getSportsmenCount()
          {
                include ("blocks/php.php");
                $result = mysql_query("SELECT MAX(id) as id FROM sportmen",$db);  
                $myrow = mysql_fetch_array ($result); 
                do { 
                  $count_news= $myrow['id'];
                }
                while($myrow = mysql_fetch_array($result));      
                return $count_news;
          }

         public function imgResize($target, $newcopy, $w, $h, $ext) 
         {
               list($w_orig, $h_orig) = getimagesize($target);
               // $scale_ratio = $w_orig / $h_orig;
               // if (($w / $h) > $scale_ratio) {
               //        $w = $h * $scale_ratio;
               // } else {
               //        $h = $w / $scale_ratio;
               // }
               $img = "";
               $ext = strtolower($ext);
               if ($ext == "gif"){ 
               $img = imagecreatefromgif($target);
               } else if($ext =="png"){ 
               $img = imagecreatefrompng($target);
               } else { 
               $img = imagecreatefromjpeg($target);
               }
               $tci = imagecreatetruecolor($w, $h);
               // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
               imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
               if ($ext == "gif"){ 
                   imagegif($tci, $newcopy);
               } else if($ext =="png"){ 
                   imagepng($tci, $newcopy);
               } else { 
                   imagejpeg($tci, $newcopy, 84);
               }
          }
          public function delNews($id,$img_src)
          {
           include ("blocks/php.php");
           if (isset($id) && isset($img_src))
           { 
              $result= mysql_query ("DELETE FROM news WHERE id='$id'");
              if ($result == 'true') 
              {
                 $file_newsIcon = $_SERVER['DOCUMENT_ROOT'] . "/" . $img_src;
                 $news_directory = $_SERVER['DOCUMENT_ROOT'] ."/img/news/$id/";
                 Adminka::fullRemove_ff($news_directory, 1);
                 if(file_exists($file_newsIcon)) @unlink($file_newsIcon);                
                 return "good";
              }
              else {
                return "bad";
              }
           }
           else 
           {
              return "Вы не вказали новину для видалення!</p>";
           } 
          }

          function fullRemove_ff($path, $t="1") 
          {
            $rtrn="1";
            if (file_exists($path) && is_dir($path)) {
                $dirHandle = opendir($path);
                while (false !== ($file = readdir($dirHandle))) {
                    if ($file!='.' && $file!='..') {
                        $tmpPath=$path.'/'.$file;
                        chmod($tmpPath, 0777);
                        if (is_dir($tmpPath)) {
                            fullRemove_ff($tmpPath);
                        } else {
                            if (file_exists($tmpPath)) {
                                unlink($tmpPath);
                            }
                        }
                    }
                }
                closedir($dirHandle);
                if ($t=="1") {
                    if (file_exists($path)) {
                        rmdir($path);
                    }
                }
            } else {
                $rtrn="0";
            }
            return $rtrn;
          }          

        
public function updateNews($id, $title, $short_name, $meta_d, $meta_k, $description, $author, $date, $text, $img_src)
{ 
   include ("blocks/php.php");
   if (isset($title) && isset($meta_d) && isset($meta_k) && isset($description) && isset($date) && isset($author) && isset($text))
    {      
        $text = str_replace("'", "`", $text);
        $description = str_replace("'", "`", $description);
        $title = str_replace("'", "`", $title);
        $text = str_replace("``", "\"", $text);
        $description = str_replace("``", "\"", $description);
        $title = str_replace("``", "\"", $title);
        $result= mysql_query ("UPDATE news SET `title`='$title', `short_name` = '$short_name', `meta_d`='$meta_d', `meta_k`='$meta_k', 
          `description`='$description', `author` = '$author', `date_`='$date', `text_`='$text', `img`='$img_src' WHERE id='$id' ");
        if ($result) {
            return "good";
        }
        else{
            return "updateNews(): bad mysql_query(".mysql_error().")";;
        }
    }   
    else
    {
       return "Введена неповна інформація!!!";
    } 
}



public function delFotoNews()
{
   if(!empty($_POST['check_list']))
   {
      $check_list=$_POST['check_list'];  
      $n = count($check_list);
      foreach ($_POST['check_list'] as $selected) {
             if (file_exists($selected)) @unlink($selected);  
           }        
   }
   else
   {
      return "Ви не вказали жодного файлу для видалення!</p>";
   }
   return "good";
}
/*2016-02-11*/

public function updateArticle($id, $title, $meta_d, $meta_k, $description, $author, $date, $text, $img_src, $city)
{ 
   include ("blocks/php.php");
   if (isset($city) && isset($title) && isset($meta_d) && isset($meta_k) && isset($description) && isset($date) && isset($author) && isset($text))
    {      
        $text = str_replace("'", "`", $text);
        $description = str_replace("'", "`", $description);
        $title = str_replace("'", "`", $title);
        $text = str_replace("``", "\"", $text);
        $description = str_replace("``", "\"", $description);
        $title = str_replace("``", "\"", $title);
        $result= mysql_query ("UPDATE events SET `title`='$title', `meta_d`='$meta_d', `meta_k`='$meta_k', `description`='$description',
          `author` = '$author', `date_`='$date', `text_`='$text', `img`='$img_src', `city`='$city'  WHERE id='$id' ");
        if ($result) {
            return "good";
        }
        else{
            return "updateArticles(): bad mysql_query(".mysql_error().")";;
        }
    }   
    else
    {
       return "Введена неповна інформація!!!";
    } 
}

public function updateSportman($id, $name, $rank, $competitions)
{ 
   include ("blocks/php.php");
   if (isset($id) && isset($name) && isset($rank) && isset($competitions))
    {      
        $name = str_replace("'", "`", $name);
        $rank = str_replace("'", "`", $rank);
        $competitions = str_replace("'", "`", $competitions);
        
        $result= mysql_query ("UPDATE sportmen SET `name`='$name', `rank`='$rank', `description`='$competitions' WHERE id='$id' ");
        if ($result) {
            return "good";
        }
        else{
            return "updateSportman(): bad mysql_query(".mysql_error().")";;
        }
    }   
    else
    {
       return "Введена неповна інформація!!!";
    } 
}

public function delSportmen($id)
{
 include ("blocks/php.php");
 if (isset($id))
 { 
  $result= mysql_query ("DELETE FROM sportmen WHERE id='$id'");
  if ($result == 'true') 
  {
   $file_newsIcon = $_SERVER['DOCUMENT_ROOT'] . "/img/sportmen/$id.png";
   $news_directory = $_SERVER['DOCUMENT_ROOT'] ."/img/sportmen/$id/";
   Adminka::fullRemove_ff($news_directory, 1);
   if(file_exists($file_newsIcon)) @unlink($file_newsIcon);                
   return "good";
 }
 else {
  return "bad";
}
}
else 
{
  return "Вы не вказали для видалення!
</p>
";
} 
}



public function delArticle($id,$img_src)
{
 include ("blocks/php.php");
 if (isset($id) && isset($img_src))
 { 
  $result= mysql_query ("DELETE FROM events WHERE id='$id'");
  if ($result == 'true') 
  {
   $file_newsIcon = $_SERVER['DOCUMENT_ROOT'] . "/" . $img_src;
   $news_directory = $_SERVER['DOCUMENT_ROOT'] ."/img/events/$id/";
   Adminka::fullRemove_ff($news_directory, 1);
   if(file_exists($file_newsIcon)) @unlink($file_newsIcon);                
   return "good";
 }
 else {
  return "bad";
}
}
else 
{
  return "Вы не вказали подію для видалення!
</p>
";
} 
}

public function postInSocNetworks($news_count)
{
  $result = Adminka::putDataInBuffer($news_count,'news_id');
      //echo "result=$result";exit;
  if( $result=="bad") return "bad";
  if(!empty($_POST['soc_list']))
  {
    foreach ($_POST['soc_list'] as $selected) 
    {
      if($selected == "facebook")
      {
        Adminka::postInFacebook();
      }
      if($selected == "twitter")
      {
        Adminka::postInTwitter();
      }
    }
  }

}

public function putDataInBuffer($data,$category)
{
        include ("php.php");
        $result= mysql_query ("UPDATE buffer SET value='$data' WHERE description like '$category' ");
        if ($result == 'true') {return "good";}
        else {return "bad";}   
   
}

public function getDataFromBuffer($category)
{
    include ("php.php");
    $result = mysql_query("SELECT value as value FROM buffer WHERE description like '$category'",$db);  
    $myrow = mysql_fetch_array ($result); 
    do { $news_id = $myrow['value']; }
    while( $myrow = mysql_fetch_array($result) );      
    return $news_id;
}



public function postInFacebook()
{  
   require_once 'soc_config.php';
   $news_id = Adminka::getDataFromBuffer('news_id');        

               $news_param = Adminka::getNewsInfo($news_id);
               $long_access_token = Adminka::getUserAccessToken();
               // var_dump($news_param);
               $post_title="Тестування постингу повідомлень";
               $post_img_src_view = 'http://goo.gl/4XNU4c';
               $post_img_src_post = $post_img_src_view;
               $share_url = 'http://nrk.com.ua/index.php';
               $post_url ="https://graph.facebook.com/403426539822845/feed";
               $message = $news_param["text"];
               $params_fb = array(
                          'access_token'     =>  $long_access_token,
                          'message'          =>  strip_tags($message),
                          // 'from'             =>  $nrk_group_id,
                          // 'to'               =>  $nrk_group_id,
                          'caption'          =>  $news_param["title"],
                          'method'           =>  "post",                    
                          // 'display'          => 'popup',                    
                          'name'             =>  $news_param["title"],               
                          'picture'          =>  "http://nrk.com.ua/".$news_param["img"],
                          'link'             =>  "http://nrk.com.ua/news.php?id=".$news_id,
                          'redirect_uri'     =>  $my_url.'fb.php',
                          // 'post_id'          =>  9,
                          // 'value'            => 'EVERYONE',
                          'description'      => $news_param["descr"]
                          );                
               //echo "<br><br><br>params_fb:<br>access_token=$access_token<br>".var_dump($params_fb);exit;
               $ch = curl_init();
               curl_setopt($ch, CURLOPT_URL, $post_url);
               curl_setopt($ch, CURLOPT_POST, 1);
               curl_setopt($ch, CURLOPT_POSTFIELDS, $params_fb);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
               $return = curl_exec($ch);
               curl_close($ch);
               $json = json_decode($return);
               //echo $json->id;
               $fb_id = $json->id;
               Adminka::updateNewsFbId($news_id, $fb_id);

               $res_text = urlencode ( "Новину №$news_id <em>".$news_param["title"]."</em><br><br> <img src='../".$news_param["img"]."' alt=''><br><p>Добавлено успішно!</p>");
               header("HTTP/1.1 301 Moved Permanently");                    
               header("Location: ./tw.php?message=".$news_param["title"]."&img_path=../".$news_param["img"]."&result=$res_text");
               exit;
   // header("HTTP/1.1 301 Moved Permanently");                    
   // header("Location: $url_fb". urldecode(http_build_query($params_fb)));
   // exit;
}

public function postInTwitter()
{

}

public function getNewsInfo($id)
          {       
              include ("php.php");
              $result = mysql_query("SELECT * FROM news WHERE id=$id",$db);
              if (!$result) { die('Невірний запит: ' . mysql_error());}
              $myrow = mysql_fetch_array ($result); 
              do { 
                    $news_param = array(  
                      'news_count' => $id,
                      'title' => $myrow['title'],
                      'descr' => $myrow['description'],
                      'text' => $myrow['text_'],
                      'img' => $myrow['img']
                        );              
              }
              while ($myrow = mysql_fetch_array($result));
              return $news_param;
              exit;
          }


public function updateNewsFbId($news_id, $fb_id)
{ 
   include ("php.php");
   $result= mysql_query ("UPDATE news SET `fb_id`='$fb_id' WHERE id='$news_id' ");
        if ($result) 
        {
            return "good";
        }
        else
        {
            return "updateNews(): bad mysql_query(".mysql_error().")";;
        }
}      

public function  getUserAccessToken()
{
  include ("php.php");
  session_start();
  $login = $_SESSION["login"];
  $login = "vites";
  $result= mysql_query ("SELECT a.value as access_token FROM access_tokens as a 
                         LEFT OUTER JOIN userlist as b 
                         ON a.user_id = b.id WHERE b.login like '$login'");
  $myrow = mysql_fetch_array ($result); 
  $access_token =  $myrow['access_token']; 
  return $access_token;
  exit;
}








}

?>