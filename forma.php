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
	<link rel="stylesheet" href="./Elixir - HTML Template_files/bootstrap.min.css">
	<link href="css/demo-gallery.css" rel="stylesheet" type="text/css">
	<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
	<link href="css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css">
	<link href="css/jquery-ui.theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/jquery.fancybox.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<script>
	   if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
	       var root = document.getElementsByTagName('html')[0];
	       root.setAttribute('class', 'ff');
	   };
	</script>
</head>
<body class="demo-4">
	<header class="codrops-header">
	
		<div id="menu" role='navigation'>
		<div class="nav-toggle">
				<span></span>
			</div>
			<ul>
				<li>
					<a  href="index.html">Главная</a>
				</li>
				<li>
					<a href="about.html">О нас</a>
				</li>
				<li>
					<a  href="menu.html">Меню</a>
				</li>
				<li>
					<a class="go_tocontacts" href="#contacts">Контакты</a>
				</li>
				<li>
					<a class="register" href="#">Бронировать</a>
				</li>
				<li>
					<a  class="current-demo" href="gallery.html">Галерея</a>
				</li>
				<li>
					<a  href="#">Связь</a>
				</li>
				
			</ul>
				<span  class="translate"><a href="#">EN</a></span>
		</div>
		
		<div class="logoName"><h1>Галерея</h1></div>
		
		
		
		
		
		
		
		
		
		<div class="menu2" >
			<div class="nav-toggle">
				<span></span>
			</div>
			<ul>
				<li>
					<a  href="index.html">Главная</a>
				</li>
				<li>
					<a href="about.html">О нас</a>
				</li>
				<li>
					<a  href="menu.html">Меню</a>
				</li>
				<li>
					<a class="go_tocontacts" href="#contacts">Контакты</a>
				</li>
				<li>
					<a class="register" href="#">Бронировать</a>
				</li>
				<li>
					<a class="current-demo" href="#">Галерея</a>
				</li>
				<li>
					<a  href="#">Связь</a>
				</li>
			</ul>
			<span  class="translate"><a href="#">EN</a></span>
		</div>
		
		
		
		
		
		
		
		
		<div id="menu3">
		
			<ul>
				<li>
					<a  href="index.html">Главная</a>
				</li>
				<li>
					<a href="about.html">О нас</a>
				</li>
				<li>
					<a  href="menu.html">Меню</a>
				</li>
				<li>
					<a class="go_tocontacts" href="#contacts">Контакты</a>
				</li>
				<li>
					<a class="register" href="#">Бронировать</a>
				</li>
				<li>
					<a  class="current-demo" href="gallery.html">Галерея</a>
				</li>
				<li>
					<a  href="#">Связь</a>
				</li>
				
			</ul>
		</div>
		
	</header>
	<div id="box" >
			
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="content">
<script type="text/javascript">
$(document).ready(function(){
    $("#form").submit(function() { 
            var form_data = $(this).serialize(); 
            $.ajax({
            type: "POST", 
            url: "send.php", 
            data: form_data,
            success: function() {
       
                   alert("Ваше сообщение отпрвлено!");
				}
            });
    });
});    
</script>


<form id="form">
    <input type="text" name="name" required="required"/>
    <input type="text" name="phone" required="required"/>
    <input type="submit" value="Заказать звонок"/>
</form>








	</div>	
	<!-- /container -->
	<!-- JS -->
	
	<script src="js/jquery-3.2.1.min.js">
	</script> 
	<script src="js/jquery-ui.min.js">
	</script>
	<script src="js/jquery.fancybox.min.js">
	</script> 
	<script src="js/script.js">
	</script>
</body>
</html>