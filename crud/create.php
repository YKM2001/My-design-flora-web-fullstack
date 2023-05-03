<?php
    require_once "./db/db.php";

    if(isset($_POST['create'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        // ? получаем файл через глобальную переменную
        $file = $_FILES['img'];
        // ? отправляем в нашу папку с названием картинки и случайным временем
        $path = "images/" .time() .basename($_FILES['img']['name']);
        // ? если получилось загрузить в нашу папку пишем гуд!
        if(move_uploaded_file($_FILES['img']['tmp_name'],$path)){
            echo "<p>Загружена картинка в папку images!</p>";
        }
        $sql = mysqli_query($con, "INSERT INTO `products`(`id`, `name`, `img`, `price`) VALUES (NULL,'$name','$path','$price')");
        if($sql) {
            echo "<p>Запрос прошёл успешно и товар сгенерирован!</p>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create product!</title>
    <!-- ? fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>

<div class="wrapper">
<header>
        <section class="header">
            <div class="header__container container">
                <div class="header__item">
                    <a href="index.html">
                        <img src="../src/images/icons/лого.png" alt="logo">
                    </a>
                    <p class="header__logo">камелия</p>
                </div>
            </div>
        </section>
    </header>

    <main class="main">

        <!-- ? тип кодирования данных -->
        <form enctype="multipart/form-data" action="create.php" method="post">
            
            <input type="file" name="img" required>
            
            <input type="text" name="name" placeholder="name" required>
            
            <input type="number" name="price" placeholder="цена" required>
            
            <input type="submit" value="Создать продукт" name="create">
            
        </form>
        
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
                                <img src="../src/images/icons/вк.png" alt="vk">
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">
                                <img src="../src/images/icons/инста.png" alt="insta">
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">
                                <img src="../src/images/icons/тг.png" alt="tg">
                            </a>
                        </li>
                    </ul>
                </div>
                                    
            </div>
            </div>
        </section>
    </footer>

    </div>
</body>
</html>