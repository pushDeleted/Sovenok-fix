<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/normalize.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<script src="https://api-maps.yandex.ru/2.1/?apikey=<test>&lang=ru_RU" type="text/javascript">
    </script>
    <script src='https://www.google.com/recaptcha/api.js?render=6LcdjZ0UAAAAAPHkDJXTbbO0Z4f-tRHBxpYefJ7G'></script>

</head>
<body style="background-color: #80b3ff;">
	<div class="container" >
		<div class="row">
				<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-4" id="logo">
					<img src="img/logo.jpg" alt="" style="width: 150px; height: 150px" >
				</div>
				<div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-8" id="name">
					<h1 id="lagname">Детский оздоровительный лагерь "Совёнок"</h1>
					<ul>
						<div><li><a href="index.php">Главная</a></li></div>
						<div><li><a href="lager.php">О лагере</a></li></div>
						<div><li><a href="contact.php">Контакты</a></li></div>
						<div><li><a href="excursion.php">Краткий экскурс</a></li></div>
					</ul>
				</div>
		</div>
		<div class="row">
		<div class="col-xl-12 col-lg-12 col-sm-12 col-12" id="putevka">
		<br>
			<div id="inline">
			<h2>Онлайн заявка</h2>
				<form id="contact" action="php/process.php" method="post" name="contact">
					<input type="hidden" name="token" id="token">
            <input type="hidden" name="action" id="action">
					<input id="name" class="txt" name="name" type="name" placeholder="Ваше имя">
					<input id="phone" class="txt" name="phone" type="phone" placeholder="Ваш телефон"> 
					<input id="email" class="txt" name="email" type="email" placeholder="Ваш e-mail"> 
					<textarea id="msg" class="txtarea" name="mess" placeholder="Ваше сообщение:"></textarea>		
					<button id="send" name="submit">Отправить</button>
				</form>		
			</div>

			<script>
        let captcha_action = 'add_comment';
     
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcdjZ0UAAAAAPHkDJXTbbO0Z4f-tRHBxpYefJ7G', {action: captcha_action})
                .then(function(token) {
                    if (token) {
                        document.getElementById('token').value = token;
                        document.getElementById('action').value = captcha_action;
                    }
                });
        });
    </script>
		</div>
		</div>	
		<div class="row">
		<div class="col-xl-12 col-lg-12 col-sm-12 col-12" id="foot">
		<br>
    	<footer id="myFooter">
     		<div id="map" style="width: 100%; height: 400px"></div>
		
		<div class="social-networks">
     		<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
     		<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
     		<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
 		</div>
  		<div class="footer-copyright">
            <p>© 2019 Copyright Text </p>
        </div>
	</footer>
	</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script src="script/script.js"></script>	
</body>
</html>