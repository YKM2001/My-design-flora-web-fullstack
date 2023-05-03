<?php
    session_start();
    require_once('../crud/db/db.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <!-- ? fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- ? Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- ? styles -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    <header>
        <section class="header">
            <div class="header__container container">
                <div class="header__item">
                    <a href="index.php">
                        <img src="./images/icons/лого.png" alt="logo">
                    </a>
                    <p class="header__logo">камелия</p>
                </div>
                <div class="header__user">
                    
<?php
    $_SESSION = $_GET['name'];
    $name = $_GET['name'];
    if($_SESSION) {
        echo '
        Hello, '.$_SESSION.'
        ';
    } else {
        echo '
        <a href="user.php">Зарегестрироваться</a>
        ';
    }
?>


                </div>
            </div>
        </section>
    </header>


    <main class="main">
        <section class="hero" id="hero">
            <div class="hero__container container">
                <div class="hero__left">
                    <h1 class="hero__title">цветы - стихи природы</h1>
                    <p class="hero__subtitle">наш онлайн-магазин предоставляет возможность
                        заказа и доставки свежих цветов, букетов
                        и композиций. круглосуточная работа и быстрая
                        доставка в любые точки позволяет сделать
                        приятный сюрприз в любое время и в любом месте
                    </p>
                </div>
                <div class="hero__right">
                    <a href="assortment.php" class="hero__link">выбрать букет</a>
                        <!-- Swiper -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="./images/перваяСтраницаБукеты/1.jpg" alt="picture">
                            </div>
                            <div class="swiper-slide">
                                <img src="./images/перваяСтраницаБукеты/2.jpg" alt="picture">
                            </div>
                            <div class="swiper-slide">
                                <img src="./images/перваяСтраницаБукеты/3.jpg" alt="picture">
                            </div>
                            <div class="swiper-slide">
                                <img src="./images/перваяСтраницаБукеты/4.jpg" alt="picture">
                            </div>
                            <div class="swiper-slide">
                                <img src="./images/перваяСтраницаБукеты/5.jpg" alt="picture">
                            </div>
                            <div class="swiper-slide">
                                <img src="./images/перваяСтраницаБукеты/6.jpg" alt="picture">
                            </div>
                            <div class="swiper-slide">
                                <img src="./images/перваяСтраницаБукеты/7.jpg" alt="picture">
                            </div>
                            <div class="swiper-slide">
                                <img src="./images/перваяСтраницаБукеты/8.jpg" alt="picture">
                            </div>
                            <div class="swiper-slide">
                                <img src="./images/перваяСтраницаБукеты/9.jpg" alt="picture">
                            </div>
                            </div>
                            <div class="swiper-button-next"></div>
                        </div>
                </div>
            </div>
        </section>

        <section class="whyus" id="whyus">
            <div class="whyus__container container">
                <div class="whyus__left">
                    <img src="./images/втораяСтраница/ellie-ellien-hLk0isV8Us4-unsplash.jpg" alt="">
                </div>
                <div class="whyus__right">
                    <h2 class="whyus__title">Почему именно мы?</h2>
                    <ul class="whyus__list">
                        <li class="whyus__item">
                            <img src="./images/icons/цветы.png" alt="picture">
                            <p class="whyus__text"> <span class="black">большой выбор цветов и букетов.</span> в магазине "камелия"
                                представлен огромный ассортимент цветов разных видов
                                и цветов, а также уникальные букеты, специально
                                созданные для разных тематических событий и поводов
                            </p>
                        </li>
                        <li class="whyus__item">
                            <p class="whyus__text"> <span class="black"> положительные отзывы. </span>интернет-магазин цветов
                                "камелия" имеет множество положительных отзывов
                                от клиентов, которые оценивают качество цветов,
                                удобство интернет-заказа и надежность доставки
                            </p>
                            <img src="./images/icons/отзывы.png" alt="picture">
                        </li>
                        <li class="whyus__item">
                            <img src="./images/icons/флорист.png" alt="picture">
                            <p class="whyus__text"> <span class="black">профессионализм и опыт.</span> наши флористы проходили отбор
                                и профессиональные тренинги, поэтому мы ручаемся
                                за создание уникальных композиций для любого случая
                                
                            </p>
                        </li>
                        <li class="whyus__item">
                            <p class="whyus__text"> <span class="black">быстрая и надежная доставка. </span>наш магазин
                                обеспечивает надежную и безопасную доставку, что
                                позволяет клиентам быть уверенными в получении
                                высококачественных цветов
                            </p>
                            <img src="./images/icons/доставка.png" alt="picture">
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="discount" id="discount">
            <div class="discount__container container">
                <h3 class="discount__title">Скидки недели</h3>
                <ul class="discount__list">
                    <li class="discount__item">
                        <article class="discount__card">
                            <div class="discount__name">
                                <p class="discount__text">БУКЕТ <br>
                                    "ЛУГОВОЙ"</p>
                            </div>
                            <div class="discount__image">
                                <img src="./images/скидкиНедели/cont.jpg" alt="discount picture">
                            </div>
                            <div class="discount__price">
                                <span class="discount__price-new">2 999</span>
                                <span class="discount__price-old">3400</span>
                            </div>
                        </article>
                    </li>
                    <li class="discount__item">
                        <article class="discount__card">
                            <div class="discount__name">
                                <p class="discount__text">НАБОР <br>
                                    "CONTEMPORARY"
                                </p>
                            </div>
                            <div class="discount__image">
                                <img src="./images/скидкиНедели/безе.jpg" alt="discount picture">
                            </div>
                            <div class="discount__price">
                                <span class="discount__price-new">11 599</span>
                                <span class="discount__price-old">13 500</span>
                            </div>
                        </article>
                    </li>
                    <li class="discount__item">
                        <article class="discount__card">
                            <div class="discount__name">
                                <p class="discount__text">МОНО-БУКЕТ <br>
                                    "БЕЗЕ"</p>
                            </div>
                            <div class="discount__image">
                                <img src="./images/скидкиНедели/луговой.jpg" alt="discount picture">
                            </div>
                            <div class="discount__price">
                                <span class="discount__price-new">999</span>
                                <span class="discount__price-old">1500</span>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
        </section>

        <section class="about" id="about">
            <div class="abount__container container">
                <h4 class="about__title">Покупатели <br>
                о нас</h4>
                <!-- Swiper -->
                <div class="swiper mySwiper mySwip">
                    <div class="swiper-wrapper mySwipWrap">
                    <div class="swiper-slide mySwipSlide">
                        <article class="reviews__card">
                            <div class="reviews__left">
                                <p class="reviews__text">Я заказала букет на свадьбу в магазине цветов
                                    "камелия" осталась очень довольна результатом! Букет
                                    был красивым, свежим и точно соответствовал моим
                                    запросам. Работа сотрудников магазина была быстрой и
                                    профессиональной. Они выслушали мои пожелания и смогли
                                    создать букет моей мечты. Благодаря им, мой свадебный
                                    день был еще ярче и красивее. Очень рекомендую этот
                                    магазин цветов для заказа букетов на свадьбу или любое
                                    другое мероприятие</p>
                                <p class="reviews__author">Анастасия Давыдова, Москва</p>
                            </div>
                            <div class="reviews__right">
                                <img src="./images/покупателиОнас/москва.jpg" alt="picture about">
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide mySwipSlide">
                        <article class="reviews__card">
                            <div class="reviews__left">
                                <p class="reviews__text">Я заказывал букет для моей мамы на День Матери
                                    и остался полностью доволен. Букет был красивым,
                                    насыщенным цветом и доставлен вовремя. Я обязательно
                                    буду заказывать у этого магазина еще раз.</p>
                                <p class="reviews__author">Андрей Яхонтов, Калуга</p>
                            </div>
                            <div class="reviews__right">
                                <img src="./images/покупателиОнас/калуга.jpg" alt="picture about">
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide mySwipSlide">
                        <article class="reviews__card">
                            <div class="reviews__left">
                                <p class="reviews__text">Я заказывала букет для своей подруги на ее день
                                    рождения. В магазине было очень много вариантов и я
                                    выбрала один из красивых букетов. Он был доставлен
                                    вовремя и был точной копией того, что я заказала.
                                    Большое спасибо за отличный сервис!</p>
                                <p class="reviews__author">Ирина Родионова, Казань</p>
                            </div>
                            <div class="reviews__right">
                                <img src="./images/покупателиОнас/казань.jpg" alt="picture about">
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide mySwipSlide">
                        <article class="reviews__card">
                            <div class="reviews__left">
                                <p class="reviews__text">Я переезжала в новый дом и желала немного украсить
                                    его. Я заказала несколько букетов для разных комнат
                                    и была приятно удивлена качеством и красотой, которые
                                    были предложены. Букеты были доставлены быстро</p>
                                <p class="reviews__author">Татьяна Сахарова, Астрахань
                                </p>
                            </div>
                            <div class="reviews__right">
                                <img src="./images/покупателиОнас/астрахань.jpg" alt="picture about">
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide mySwipSlide">
                        <article class="reviews__card">
                            <div class="reviews__left">
                                <p class="reviews__text">Я заказала букет цветов в магазине и осталась
                                    полностью довольна качеством продукции и
                                    обслуживанием! Букет был просто очарователен - цветы
                                    были свежими, насыщенными и органично сочетались друг
                                    с другом. Я также очень оценила быструю и эффективную
                                    доставку, которая была выполнена вовремя и без
                                    задержек. Магазин цветов обеспечил высокий
                                    профессионализм и отличный уровень сервиса, поэтому я
                                    без колебаний рекомендую его всем, кто ищет
                                    качественный букет цветов!</p>
                                <p class="reviews__author">Алёна Вольская, Архангельск</p>
                            </div>
                            <div class="reviews__right">
                                <img src="./images/покупателиОнас/архангельск.jpg" alt="picture about">
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide mySwipSlide">
                        <article class="reviews__card">
                            <div class="reviews__left">
                                <p class="reviews__text">Я заказала букет на свадьбу в магазине цветов
                                    "камелия" осталась очень довольна результатом! Букет
                                    был красивым, свежим и точно соответствовал моим
                                    запросам. Работа сотрудников магазина была быстрой и
                                    профессиональной. Они выслушали мои пожелания и смогли
                                    создать букет моей мечты. Благодаря им, мой свадебный
                                    день был еще ярче и красивее. Очень рекомендую этот
                                    магазин цветов для заказа букетов на свадьбу или любое
                                    другое мероприятие</p>
                                <p class="reviews__author">Анастасия Давыдова, Москва</p>
                            </div>
                            <div class="reviews__right">
                                <img src="./images/покупателиОнас/архангельск.jpg" alt="picture about">
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide mySwipSlide">
                        <article class="reviews__card">
                            <div class="reviews__left">
                                <p class="reviews__text">Я заказала букет на свадьбу в магазине цветов
                                    "камелия" осталась очень довольна результатом! Букет
                                    был красивым, свежим и точно соответствовал моим
                                    запросам. Работа сотрудников магазина была быстрой и
                                    профессиональной. Они выслушали мои пожелания и смогли
                                    создать букет моей мечты. Благодаря им, мой свадебный
                                    день был еще ярче и красивее. Очень рекомендую этот
                                    магазин цветов для заказа букетов на свадьбу или любое
                                    другое мероприятие</p>
                                <p class="reviews__author">Анастасия Давыдова, Москва</p>
                            </div>
                            <div class="reviews__right">
                                <img src="./images/покупателиОнас/архангельск.jpg" alt="picture about">
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide mySwipSlide">
                        <article class="reviews__card">
                            <div class="reviews__left">
                                <p class="reviews__text">Я заказала букет на свадьбу в магазине цветов
                                    "камелия" осталась очень довольна результатом! Букет
                                    был красивым, свежим и точно соответствовал моим
                                    запросам. Работа сотрудников магазина была быстрой и
                                    профессиональной. Они выслушали мои пожелания и смогли
                                    создать букет моей мечты. Благодаря им, мой свадебный
                                    день был еще ярче и красивее. Очень рекомендую этот
                                    магазин цветов для заказа букетов на свадьбу или любое
                                    другое мероприятие</p>
                                <p class="reviews__author">Анастасия Давыдова, Москва</p>
                            </div>
                            <div class="reviews__right">
                                <img src="./images/покупателиОнас/архангельск.jpg" alt="picture about">
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide mySwipSlide">
                        <article class="reviews__card">
                            <div class="reviews__left">
                                <p class="reviews__text">Я заказала букет на свадьбу в магазине цветов
                                    "камелия" осталась очень довольна результатом! Букет
                                    был красивым, свежим и точно соответствовал моим
                                    запросам. Работа сотрудников магазина была быстрой и
                                    профессиональной. Они выслушали мои пожелания и смогли
                                    создать букет моей мечты. Благодаря им, мой свадебный
                                    день был еще ярче и красивее. Очень рекомендую этот
                                    магазин цветов для заказа букетов на свадьбу или любое
                                    другое мероприятие</p>
                                <p class="reviews__author">Анастасия Давыдова, Москва</p>
                            </div>
                            <div class="reviews__right">
                                <img src="./images/покупателиОнас/архангельск.jpg" alt="picture about">
                            </div>
                        </article>
                    </div>
                    </div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>

    </main>

        <footer>
        <section class="footer">
            <div class="footer__container container">
                <h6 class="footer__title">Связаться с нами</h6>
                <div class="footer__body">
                <div class="footer__left">
                    <div class="footer__item">
                        <a href="#">8 (485) 860-44-96</a>
                        <a href="#">8 (485) 305-09-60</a>
                    </div>
                </div>
                <div class="footer__right">
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="" class="footer__link">
                                <img src="./images/icons/вк.png" alt="vk">
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">
                                <img src="./images/icons/инста.png" alt="insta">
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">
                                <img src="./images/icons/тг.png" alt="tg">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </section>
    </footer>



    <!-- ?  Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./script.js"></script>
</body>
</html>