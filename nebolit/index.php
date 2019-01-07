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
                      <button type="submit">submit</button>
                  </form>
              </div>
          </div>

            <div class="header__cover">
                <div class="header__menu">
                    <div class="header__menu__item">
                        <a href="main.php">Главная</a>
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
            <div class="reviews" id="reviews">
                <div class="reviews__title animated fadeInUp">
                    Отзывы
                </div>
                <div class="reviews__cards animated fadeInUp">
                    <div class="reviews__card">
                        <div class=" ">
                            Не так давно посетили клинику "НЕБОЛИТ". Были на приеме впервые. Впечатление произвела и сама клиника и врач очень хорошее. Все очень вежливые и приветливые, обстановка располагающая. Врач долго и тщательно изучал результаты предыдущих обследований, ответил на все интересующие вопросы Надеемся, что результат не заставит себя долго ждать. Спасибо за такое отношение к своим пациентам.
                        </div>
                        <div class="reviews__card__author">
                            Марина
                        </div>
                    </div>
                    <div class="reviews__card">
                        <div class="reviews__card__text">
                            Добрый день.Хочу поделиться своей историей.Я не гражданин вашей страны,поэтому когда у жены возникла необходимость воспользоваться услугами гинеколога,нам пришлось искать клинику среди частных медицинских центров,начитавшись отзывов ,определили для себя клинику Неболит.Были там впервые и остались очень довольны и жена и я качеством обслуживания,всем рекомендую,если не знаете куда обратиться первый раз,то начните с клиники Неболит,мы теперь там постоянно.
                        </div>
                        <div class="reviews__card__author">
                            Давид
                        </div>
                    </div>
                    <div class="reviews__card">
                        <div class="reviews__card__text">
                            Здравствуйте уважаемые посетители сайта. Хочу поделиться с вами своими впечатлениями о посещении клиники Неболит. Была в первый раз, пользовалась до этого другой клиникой, но по объективным причинам пришлось сменить. Все очень понравилось, ежесекундная забота о клиенте, домашний уют и комфортная атмосфера позволяют расслабиться и даже на некотое время забыть что ты находишься в мед. учреждении, добавим к этому профессионализм специалистов и современное оборудование, и вот на выходе довольная я, в полной мере удовлетворенная оказанной услугой. Спасибо ребята, так держать.
                        </div>
                        <div class="reviews__card__author">
                            Оксана
                        </div>
                    </div>
                </div>
            </div>
            <div class="doctor" id="doctor">
              <div class="doctor__title animated fadeInUp">
                Врачи
              </div>
              <div class="doctors">
                <div class="img_doctor">
                  <img src="images/kashevarova.jpg" alt="Кашеварова Лариса Михайловна" class="image">
                  <div class="middle">
                    <p class="text">Кашеварова Лариса Михайловна</p>
                  </div>
                </div>
                <div class="img_doctor">
                  <img src="images/volodin.png" alt="Володин Валентин Валерьевич" class="image">
                  <div class="middle">
                    <p class="text">Володин Валентин Валерьевич</p>
                  </div>
                </div>
                <div class="img_doctor">
                  <img src="images/koshkin.jpg" alt="Кошкин Акакий Сигизмундович" class="image">
                  <div class="middle">
                    <p class="text">Кошкин Акакий Сигизмундович</p>
                  </div>
                </div>
                <div class="img_doctor">
                  <img src="images/hvorostov.png" alt="Хворостов Павел Романович" class="image">
                  <div class="middle">
                    <p class="text">Хворостов Павел Романович</p>
                  </div>
                </div>
                <div class="img_doctor">
                  <img src="images/kudak.jpg" alt="Кудак Елена Ольговна" class="image">
                  <div class="middle">
                    <p class="text">Кудак Елена Ольговна</p>
                  </div>
                </div>
                <div class="img_doctor">
                  <img src="images/albert.jpg" alt="Альберт Жанна Альбертовна" class="image">
                  <div class="middle">
                    <p class="text">Альберт Жанна Альбертовна</p>
                  </div>
                </div>
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
        <script src="js/login.js" charset="utf-8"></script>
    </body>
</html>
