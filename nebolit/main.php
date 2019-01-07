<?php
    header("Content-Type: text/html; charset=utf-8");
?> 
<!DOCTYPE html>

<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>НЕБОЛИТ</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
        <meta name="viewport" content="width=device-width" />

        <!--<div>Icons made by <a href="https://www.flaticon.com/authors/vectors-market" title="Vectors Market">Vectors Market</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>-->
    </head>
    <body>
        <header>
            <div class="header__cover">
                <div class="header__menu">
                  <div class="header__menu__item">
                      <a href="#">Главная</a>
                  </div>
                  <div class="header__menu__item">
                      <a href="service.php">Услуги и цены</a>
                  </div>
                  <div class="header__menu__item">
                      <a href="review.php">Отзывы</a>
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
            <div class="main" id="main">
                <div class="main__about animated fadeInUp">
                    <span class="main__about__title">НЕБОЛИТ - Tractata sunt!</span>
                    <span class="main__about__text">«НЕБОЛИТ» — клиника, предоставляющая полный комплекс диагностических, консультативных и лечебных услуг. Прием ведут у нас высококвалифицированные врачи первой и высшей категории, накопившие огромный практический опыт и крепкие знания теории в своей сфере. Работают они «на совесть» и несут ответственность за пациента. Медицинские услуги помогают эффективно решить в оптимальные сроки любую проблему, сопряженную со здоровьем, предусмотреть, организовать необходимые диагностические мероприятия, назначить грамотное, эффективное и своевременное лечение. Ждём Вас!</span>
                </div>
            </div>
            <div class="map" id="map">
              <div class="map__title animated fadeInUp">
                Карта проезда
              </div>
              <div id='gmap_canvas'>
                <script src="js/main.js" charset="utf-8"></script>
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                <script type='text/javascript' src="js/map.js"></script>
              </div>
            </div>
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
    </body>
</html>
