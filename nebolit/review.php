<?php
   	header("Content-Type: text/html; charset=utf-8");
	
	require "db.php";
	if (isset($_POST["send"])){
		if(trim($_POST["name"])==""  || trim($_POST["message"])==""){
			 echo "Заполните все поля!";
		}else{

	$comments=R::dispense("comments");
	$comments->name = $_POST["name"];
	// $comments->subject = $_POST["subject"];|| trim($_POST["subject"])==""
	$comments->message = $_POST["message"];
	
	
	
	R::store($comments);
	header('location: /');
	}   
	}
?> 
<!DOCTYPE html>

<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>НЕБОЛИТ</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
        <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
        <meta name="viewport" content="width=device-width" />

        <!--<div>Icons made by <a href="https://www.flaticon.com/authors/vectors-market" title="Vectors Market">Vectors Market</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>-->
    </head>
    <body>
        <header>
            <div class="header__cover">
                <div class="header__menu">
                    <div class="header__menu__item">
                        <a href="main.php">Главная</a>
                    </div>
                    <div class="header__menu__item">
                        <a href="service.php">Услуги и цены</a>
                    </div>
                    <div class="header__menu__item">
                        <a href="#">Отзывы</a>
                    </div>
                    <div class="header__menu__item">
                        <a href="doctor.php">Врачи</a>
                    </div>
                </div>
                <div class="header__info">
                    <div class="header__info__work-hours">
                        Пн - пт: 08:00 - 23:00<br>
                        Сб, вс: 10:00 - 17:00
                    </div>
                    <div class="header__info__phones">
                        <a href="telto:+375290000000">+375 (29) 000-00-00 MTC</a>
                        <a href="telto:+375290000000">+375 (44) 000-00-00 VELCOM</a>
                    </div>
                    <div class="header__info__email">
                        <a href="mailto:nebolit@gmail.com">nebolit@gmail.com</a>
                    </div>
                    <div class="header__info__payment">
                        <img src="images/payment.svg" alt="Мы принимаем Visa и Mastercard!">
                    </div>
                </div>
            </div>
        </header>
        <main>
            <br/><br/><br/>
		<a> ВСЕ ОТЗЫВЫ </a><br/>
		<?php $komen = mysqli_query($con, "SELECT * FROM `comments` ORDER BY `id`")?>
		<?php while($kom = mysqli_fetch_assoc($komen)){?>

		<div class="koment">
			<div class= "name_komment" style:"padding: 13px 30px;
			margin: 5px 0 20px 0;
			font-size: 15px;
			color: #fff;
			background-color: #2ca8c6;
			border: none;
			border-bottom: 4px solid #6ee9fd;
			cursor: pointer;"><?=$kom["name"]?></div>
			<hr>
			<div class= "message_komment"><?=$kom["message"]?></div>
			<br/>
		</div>	
		<?php } ?>
		<div class="komment_info">
			<form name="komments" action="" method="post">
			<input type = "text" name="name" placeholder="Имя" size="88"><br/><br/>
			<textarea type = "text" name="message" placeholder="Ваш комментарий" cols="80" rows="15"></textarea><br/><br/>
			<div class="button_submit"><input type = "submit" name = "send"></div>
			</form>
		</div>
		<br/>
        </main>
        <footer>
            <div class="footer__cover">
                <div class="header__info">
                    <div class="header__info__work-hours">
                        Пн - пт: 08:00 - 23:00<br>
                        Сб, вс: 10:00 - 17:00
                    </div>
                    <div class="header__info__phones">
                        <a href="telto:+375290000000">+375 (29) 000-00-00 MTC</a>
                        <a href="telto:+375290000000">+375 (44) 000-00-00 VELCOM</a>
                    </div>
                    <div class="header__info__email">
                        <a href="mailto:nebolit@gmail.com">nebolit@gmail.com</a>
                    </div>
                    <div class="header__info__payment">
                        <img src="images/payment.svg" alt="Мы принимаем Visa и Mastercard!">
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/login.js" charset="utf-8"></script>
    </body>
</html>
