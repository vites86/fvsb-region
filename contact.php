<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Контакти</title>
	<meta name="description" content="контакти, секції єдиноборств Київ">
    <?php require_once('blocks/head.php'); ?>	
    <script type="text/javascript">
     $(window).load(function(){  
       document.getElementById("contact_nav").className   = 'current';    
       document.getElementById("blog_nav").className   = '';  
       document.getElementById("main_nav").className   = '';    
       document.getElementById("about_nav").className   = '';    
       document.getElementById("gallery_nav").className   = '';    
    });
    </script>	
</head>
<body>
<header>
    <?php require_once('blocks/header.php'); ?>	
</header>

<!-- Content -->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block05">
			<div class="title"><span>Зв'яжіться із нами</span></div><br>
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
						<div class="comment">
							Ваша email-адреса не буде ніде опублікована. Обов'язкові поля позначені *
							<form>
								<div><input type="text" name="name" id="name"> Ім'я' *</div>
								<div><input type="email" name="email" id="email"> Email *</div>
								<div><input type="url" name="website" id="website"> Сайт</div>
								<div><textarea rows="10" name="comment" id="comment"></textarea></div>
								<div><input type="submit" name="submit" value="Відправити"></div>
							</form>
						</div>
					</article>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Знайдіть нас</h2></div>
						<div class="content">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10146.627662425926!2d30.227174095028907!3d50.52195014174128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcc2ed48e109e07f!2z0KPQvdGW0LLQtdGA0YHQuNGC0LXRgiDQtNC10YDQttCw0LLQvdC-0Zcg0YTRltGB0LrQsNC70YzQvdC-0Zcg0YHQu9GD0LbQsdC4INCj0LrRgNCw0ZfQvdC4!5e0!3m2!1sru!2sua!4v1469968099122" width="100%" frameborder="0" style="border:0" ></iframe>вулиця Університетська, 31, Ірпінь, Київська область, 08200
							<p></p>
							<p>Telephone : +38 (097) 405-31-93</p>
							<p>Cайт : www.msac.kiev.ua</p>
							<p>Email :  kiev_fvsm@mail.ru</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Footer-->
<footer>
	<?php require_once('blocks/footer.php'); ?>		
</footer>
</body></html>