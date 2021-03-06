<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Bronze Snake</title>
	<meta content="Restoran" name="description">
	<meta content="clipPath, svg, effect, layout, expansion, images, grid, polygon" name="keywords">
	<meta content="My Name" name="author">
	<link href="img/cobra_snake.jpg" rel="shortcut icon">
	<link href="css/normalize.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/demo-contact.css" rel="stylesheet" type="text/css">
	<link href="css/preloader.css" rel="stylesheet" type="text/css">
	<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
	<link href="css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css">
	<link href="css/jquery-ui.theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/jquery.fancybox.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css"><!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<script>
	      if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
	          var root = document.getElementsByTagName('html')[0];
	          root.setAttribute('class', 'ff');
	      };
	</script>
	<style>
	   .gm-style-pbc{
	   display:none !important;
	   
	   }

	</style>
</head>
<body class="demo-4">
	<div id="preloader">
		<div id="loader"></div>
	</div>
	<header class="codrops-header">
		<div id="menu" role='navigation'>
			<div class="nav-toggle">
				<span></span>
			</div>
			<ul>
				<li>
					<a href="index.html">Главная</a>
				</li>
				<li>
					<a href="about.html">О нас</a>
				</li>
				<li>
					<a href="menu.html">Меню</a>
				</li>
				<li>
					<a class="go_tocontacts" href="#contacts">Контакты</a>
				</li>
				<li>
					<a class="register" href="#">Бронировать</a>
				</li>
				<li>
					<a href="gallery.html">Галерея</a>
				</li>
				<li>
					<a class="current-demo" href="contact%20us.html">Связь</a>
				</li>
			</ul><span class="translate"><a href="contact%20us_eng.html">EN</a></span>
		</div>
		<div class="logoName">
			<h1>Свяжитесь с нами</h1>
		</div>
		<div class="menu2">
			<div class="nav-toggle">
				<span></span>
			</div>
			<ul>
				<li>
					<a href="index.html">Главная</a>
				</li>
				<li>
					<a href="about.html">О нас</a>
				</li>
				<li>
					<a href="menu.html">Меню</a>
				</li>
				<li>
					<a class="go_tocontacts" href="#contacts">Контакты</a>
				</li>
				<li>
					<a class="register" href="#">Бронировать</a>
				</li>
				<li>
					<a href="gallery.html">Галерея</a>
				</li>
				<li>
					<a class="current-demo" href="contact%20us.html">Связь</a>
				</li>
			</ul><span class="translate"><a href="contact%20us_eng.html">EN</a></span>
		</div>
		<div id="menu3">
			<ul>
				<li>
					<a href="index.html">Главная</a>
				</li>
				<li>
					<a href="about.html">О нас</a>
				</li>
				<li>
					<a href="menu.html">Меню</a>
				</li>
				<li>
					<a class="go_tocontacts" href="#contacts">Контакты</a>
				</li>
				<li>
					<a class="register" href="#">Бронировать</a>
				</li>
				<li>
					<a href="gallery.html">Галерея</a>
				</li>
				<li>
					<a class="current-demo" href="contact%20us.html">Связь</a>
				</li>
			</ul>
		</div>
	</header>
	<div id="box"></div>
	<div class="content">
		<div class="contact-box">
			<div id="gmap"></div>
			<div class="contact-selector">
				<h2>Свяжитесь с нами</h2>
				<form action="send.php" id="contact-form" method="POST" name="contact-form" novalidate="novalidate">
					<div class="form-group">
						<label>Имя *</label> <input name="username" placeholder="" required="" type="text">
					</div>
					<div class="form-group">
						<label>Email *</label> <input name="email" placeholder="" required="" type="email">
					</div>
					<div class="form-group">
						<label>Сообщение *</label> 
						<textarea name="message" placeholder=""></textarea>
					</div>
					<div class="form-group">
						<button class="theme-btn btn-style-two" name="submit-form" type="submit">Отправить</button>
					</div>
				</form>
			</div>
		</div>
		<div class="contact-number" id="contacts">
			<h3>Телефон для контакта</h3>
			<h4>+375 29 136 60 29</h4>
		</div>
	</div>
	<footer id="footer">
		<div>
			<p>Ресторан "Bronze Snake"<br>
			ООО «Поливектор», УНП: 190476301<br>
			Юридический адрес: г.Минск,<br>
			пл.Свободы, 23, каб.325 (пом.2)<br>
			Зарегистрирован в Торговом реестре<br>
			26.07.2006, №36395</p>
		</div>
	</footer><!-- /container -->
	<!-- JS -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSpCsqQB2kIqmRDqDf3Jx_TxbfuzXwRe8&callback=initMap">
	</script> 
	<script src="js/jquery-3.2.1.min.js">
	</script> 
	<script src="js/jquery-ui.min.js">
	</script> 
	<script src="js/jquery.fancybox.min.js">
	</script> 
	<script src="js/script.js">
	</script> 
	<script>
	 $(window).on('load', function () {
	   $preloader = $('#preloader'),
	     $loader = $preloader.find('#loader');
	   $loader.fadeOut();
	   $preloader.delay(350).fadeOut('slow');
	 });
	</script>
</body>
</html>