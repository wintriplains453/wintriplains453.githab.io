<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voice</title>
	<link rel="stylesheet" type="text/css" href="css/demo1.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body class="demo-1">
	<div class="scroll"></div>
	<div id="fullview">
		<div class="screenFClick"></div>
		<header>
		
		<div class="logo">SR</div>
		<?php 
			if($_COOKIE['user'] == ''):
		?>
		<div class="sign">
			<a href="enter.html">Войти</a>
			/
			<a href="registration.html">Зарегестрироваться</a>
		</div>

		<?php else: ?>

		<div class="sign">
			<div class="menu">
				<div class="itemMenu"></div>
				<div class="itemMenu"></div>
				<div class="itemMenu"></div>				
			</div>
		</div>
			<div class="wrapperMenuProf">
				<p><?= $_COOKIE['user']?></p>
				<ul>
					<li><a href="#">Профиль</a></li>
					<li><a href="#">Лента</a></li>
					<li><a href="#">Настройка</a></li>
					<li><a href="validation-form/exit.php">Выйти</a></li>
				</ul>					
			</div>	

		<?php endif; ?>	

		<div class="content">
			<div class="imgageBackGlitch"></div>
			<div class="glitch">
				<div class="glitch__img"></div>
				<div class="glitch__img"></div>
				<div class="glitch__img"></div>
				<div class="glitch__img"></div>
				<div class="glitch__img"></div>
			</div>
			<h2 class="content__title">voice recognition</h2>
			<p class="content__text">Информационный блог, в котором публикуются новости веб-дизайна, а так же информация и советы по созданию сайтов, шаблонов,и многое другое интересное с интернет мира.</p>
		</div>
		</header>
		<content class="contentOne">

			<div class="gradient">
				<div class="wrapperGradCon">
					<div class="gradientHeader">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
					<div class="gradientContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores corrupti perferendis natus excepturi incidunt recusandae.</div>
					<button class="gradBtn">more</button>					
				</div>

			</div>
			<div class="blurRight">
					<div class="panel accuracyPanel">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Id optio cum maxime quisquam delectus, quam.</p>
					</div>
			</div>			
			<div class="gradientBack"></div>
		</content>
		<content class="contentTwo">
			<div class="leftBlockCT">
				<div class="wrapperGradCon">
					<div class="gradientHeader">Ipsum dolor sit amet consectetur adipisicing elit.</div>
					<div class="gradientContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores corrupti perferendis natus excepturi incidunt recusandae.</div>
				</div>
			</div>
			<div class="rightBlockCT">
				<video class="video_file"autoplay muted loop>
				 <source src="video/SRR.webm" >
				</video>
			</div>
		</content>
		<footer>
			<div class="imgFooter"></div>
			<div class="wrapperfooter">
				<div class="wrapperTopFooter">
					<div><p>LOGO</p><p>sologan company</p></div>
					<div><p>weebly thems</p><p>pre-sale faqs</p><p>submit a ticket</p></div>
					<div><p>services</p><p>theme tweak</p></div>
					<div><p>showcase</p><p>widgetkit</p><p>support</p></div>
					<div><p>about us</p><p>contact us</p><p>affiliates</p><p>resourxes</p></div>
				</div>
				<div class="wrapperBottomFooter">
					Copyright.All rights reserved.
				</div>				
			</div>

		</footer>			
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/fullview/dist/fullview.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
