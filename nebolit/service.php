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
        <link rel="stylesheet" href="css/login.css">
        <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
        <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
        <meta name="viewport" content="width=device-width" />

        <!--<div>Icons made by <a href="https://www.flaticon.com/authors/vectors-market" title="Vectors Market">Vectors Market</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>-->
    </head>
    <body>
        <header>
          <div class="main__authorization__field main__authorization__field--login" id="loginField">
              <div>
                  <div class="main__authorization__field__close" id="closeLogin">×</div>
                  <span>Оставьте свои контактные данные и мы вам обязательно перезвоним.</span>
                  <form action="">
                      <label for="email">E-mail:</label>
                      <input type="email" name="" id="email">
                      <label for="password" id="fio">ФИО:</label>
                      <input type="password" name="" id="password">
					  <label for="phone">Номер телефона:</label>
                      <input type="phone" name="" id="phone">
                      <button type="submit">Подтвердить</button>
                  </form>
              </div>
          </div>

            <div class="header__cover">
                <div class="header__menu">
                    <div class="header__menu__item">
                        <a href="main.php">Главная</a>
                    </div>
                    <div class="header__menu__item">
                        <a href="#">Услуги и цены</a>
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
            <div class="services" id="services">
                <div class="services__title animated fadeInUp">Услуги и цены</div>
                <div class="services__menu animated fadeInUp">
                    <table class="services__table">
                        <thead>
                            <tr>
                                <th>Название услуги</th>
                                <th>Цена</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Осмотр врача-специалиста</td>
                                <td>32 р.</td>
                            </tr>
                            <tr>
                                <td>Анализы</td>
                                <td>28 р.</td>
                            </tr>
                            <tr>
                                <td>УЗИ</td>
                                <td>54 р.</td>
                            </tr>
                            <tr>
                                <td>МРТ</td>
                                <td>50 р.</td>
                            </tr>
                            <tr>
                                <td>КТ</td>
                                <td>49 р.</td>
                            </tr>
                        </tbody>
                    </table>
                    <img src="images/service.jpg" alt="Наши услуги">
                </div>
            </div>
            <div class="login">
              <div id="login">
                 Записаться на прием
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
        <script src="js/login.js" charset="utf-8"></script>
    </body>
</html>
