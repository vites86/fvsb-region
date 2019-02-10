<?php require_once('blocks/php.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <!-- Basic Page Needs
  ================================================== -->	
  <meta name="description" content="Kiev Region Federation of Military and Sport All-round Compatition." />
  <meta name="keywords" content="msac, всб, військово-спортивні багатоборства, стрільба, бій, всестильовий бій, Київ" />
 	<link rel="canonical" href=http://fvsb.kiev.ua />
    <meta name="robots" content="index.php">
 	<meta property="og:site_name" content="Kiev Region Federation of Military and Sport All-round Compatition">
	<meta property="og:title" content="Київ ВСБ | MSAC" />
	<meta property="og:description" content="Kiev Region Federation of Military and Sport All-round Compatition." />
	<meta property="og:image" content="http://fvsb.kiev.ua/img/shevron.png" />
	<meta property="og:url" content=http://fvsb.kiev.ua />
	<meta property="og:type" content="website" />
	<meta name="description" content="">
	<title>Київ ВСБ | MSAC</title>
	<?php require_once('blocks/head.php'); ?>
</head>
<body>
<!-- Header -->
<header>
	<?php require_once('blocks/header.php'); ?>
	<?php require_once('blocks/handler.php'); ?>
</header>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					<li><img src="img/slides/slide1.png"/></li>
					<li><img src="img/slides/slide2.png"/></li>
					<li><img src="img/slides/slide3.png"/></li>
					<li><img src="img/slides/slide4.png"/></li>
					<li><img src="img/slides/slide5.png"/></li>
					<li><img src="img/slides/slide6.png"/></li>
					<li><img src="img/slides/slide7.png"/></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--Content -->
<section id="content">
	<div class="wrap-content zerogrid">

	<hr style="width: 90%;" align="center">
		
		<div class="row block03">
			<div class="title"><span>Відео</span></div>
			<?php include("blocks/video.php"); ?>
		</div>
		
		<div class="row block01"><h2><a href="http://fvsm.org.ua/" target="_blank">Військово-спортивні багатоборства</a> - неолімпійський вид спорту</h2>
		<p> який має два розділи: бойове двоборство (стрільба + всестильовий бій) та військово-прикладне семиборство.</p></div>
		<hr style="width: 90%;" align="center">
		<div class="divider"></div>
		
		<div class="row block02">
			<div class="col-1-3">
				<div class="wrap-col">
					<a href="belts.php"><h2><span>С</span>система поясів</h2></a>
					<p>Існує система учнівських та майстерських ступенів. Кожному ступеню відповідає пояс відповідного кольору.</p>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<a href="military.php"><h2><span>С</span>иловi структури</h2></a>
					<p>Силові структури активно співрацюють із федерацію у питаннях проведення зборів, тренувань, змагань тощо.</p>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<a href="struktura.php"><h2><span>С</span>труктурні підрозділи</h2></a>
					<p>До складу федерації входить величезна кількість команд навчальних закладів, силових струкрур, охороних відомств тощо.</p>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<a href="ukraine_federation.php"><h2><span>В</span>сеукраїнська федерація</h2></a>
					<p>Має статус "Націанальної" відповідно до Наказу Міністерства України у справах молоді, сім`ї та спорту від 08.20.2010 №3531</p>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<a href="world_chemp.php"><h2><span>М</span>іжнародні змагання</h2></a>
					<p>Київська обласна федерація ВСБ щорічно готує своїх спортсменів до участі у міжнародних змагань по ВСБ.</p>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<a href="zvannja.php"><h2><span>С</span>портивні звання</h2></a>
					<p>Спортивні звання з ВСБ спортсменам присвоююся наказом Мінмолодьспорту України.</p>
				</div>
			</div>
		</div>

		<hr style="width: 90%;" align="center">		
	
		<div class="row block03">
			
			<link rel="stylesheet" href="css/anons.css">
		    <div class="col-1-3">
						<div class="left-block">	
                            <div class="left-block-title">Анонс подій</div>
							<div class="left-block-content">
								<div class="tt-tabs skr2">									
									<div class="index-panel">
										<div class="tt-panel" style="display: block;">
		                                   <ul class="skr">
										      <?php include("blocks/anons_block.php"); ?>	
		                                   </ul>
		                                </div>
										
									</div>
								</div>
							</div>
						</div>
			</div>
			<div class="col-2-3">
			   <div style="padding-left: 5%;">
                      <div class="left-block-title">Останні Новини</div>                
					  <?php include("blocks/news_block.php"); ?>	
               </div>		
			</div>
		</div>		

		<hr style="width: 90%;" align="center">
		
		<div class="row block03">
			<div class="title"><span>Найкращі спортсмени</span></div>
			<?php include("blocks/sportmen.php"); ?>
		</div>

		<hr style="width: 90%;" align="center">
		
		<div class="row block03 gallery">
			<div class="title"><span>Галерея</span></div><br>
			<div class="col-1-2">
				<div class="wrap-col">
					<a href="gallery.php" target="_blank"><img src="img/pro1.png" class="grayscale"/></a>
				</div>
			</div>
			<div class="col-1-2">
				<div class="wrap-col">
					<a href="gallery.php" target="_blank"><img src="img/pro2.png" class="grayscale"/></a>
				</div>
			</div>
			<div class="col-1-2">
				<div class="wrap-col">
					<a href="gallery.php" target="_blank"><img src="img/pro3.png" class="grayscale"/></a>
				</div>
			</div>
			<div class="col-1-2">
				<div class="wrap-col">
					<a href="gallery.php" target="_blank"><img src="img/pro4.png" class="grayscale"/></a>
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