<?php session_start(); ?>
 <?php
        if  ($_SESSION['id'] != "") {
         echo "the page is unavailable";
        }else {
   
?>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/fav_ico.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Главная</title>
</head>
<body>
    <canvas id="canvas" style="position: absolute;" ></canvas>
    <header class="header" style="background: white;">
		<div class="container header-container">
			<a class="logo">
				<img src="img/logo.png"  style="max-width: 65px; margin-top: 0px; transform: rotate(90deg);" alt="Inso logo">
			</a>
			<div class="menu-dek" style="margin-top: 0px;">
				
				<a href="login/login.php" style="text-decoration: none;  color: #1f1f1f; font-weight: 700; ">Вход</a>
				<a href="login/signin.php"><button class="header-btn header-btn-sig" style="font-weight: 700">Регистрация</button></a>
			</div>
		</div>
	</header>
	<main>
		<section class="hero">
			<div class="container2"   >
				<div class="hero-content2"  >
					
					<h1 class="hero-title">Помоги начинающим стартаперам</h1>
					<p class="hero-descr" style="color:fff; font-size:24px">
					Вкладывайся в будущее
					</p>
					<a href="login/signin.php" class="link hero-link">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 494.148 494.148" style="enable-background:new 0 0 494.148 494.148;" xml:space="preserve">
							<g>
								<g>
   									<path d="M405.284,201.188L130.804,13.28C118.128,4.596,105.356,0,94.74,0C74.216,0,61.52,16.472,61.52,44.044v406.124
	   								c0,27.54,12.68,43.98,33.156,43.98c10.632,0,23.2-4.6,35.904-13.308l274.608-187.904c17.66-12.104,27.44-28.392,27.44-45.884
	   								C432.632,229.572,422.964,213.288,405.284,201.188z"/>
								</g>
							</g>
						</svg>
						<span>Присоединиться</span>
					</a>
					
				</div>
				<div class="hero-logo-box" style="">
					<img class="hero-logo" src="../img/logo_big.png" alt="">
				</div>
				
			</div>
		</section>
		<section class="service">
			<div class="container">
				<h2 class="service-title">
					Что предлагает наш сервис?
				</h2>
				<ul class="service-list list-reset">
					<li class="service-item">
						<h3 class="service-subtitle">
						 	Предлагайте события 
						</h3>
						<p class="service-descr">
							Вы можете предложить мероприятие и собрать группу людей на нашем сервисе, чтобы решить эту проблему
						</p>
						
					</li>
					<li class="service-item">
						<h3 class="service-subtitle">
							Система рейтингов
						</h3>
						<p class="service-descr">
							Если вы каждый раз добросовестно выполняете свою роботу, вам будут повышать рейтинг и выдавать баллы
						</p>
						
					</li>
					<li class="service-item">
						<h3 class="service-subtitle">
							Получайте бонусы
						</h3>
						<p class="service-descr">
							Заработанные баллы вы можете обменять на купоны и скидки от спонсоров или отправить их в благотворительные фонды
						</p>
						
					</li>
					<li class="service-item">
						<h3 class="service-subtitle">
							Нет времени?
						</h3>
						<p class="service-descr">
							Не проблема.Вы можете отправлять пожертвования, которые пойдут на закупку расходных материалов
						</p>
						
					</li>
				</ul>
			</div>
		</section>
		
	</main>
</body>
<?php }; ?>
</script>
</html>