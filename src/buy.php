<?php
    require_once "../crud/db/db.php";

    if(isset($_POST['buy'])) {
        $number = $_POST['number'];
        $id = $_POST['id'];
        $buy = mysqli_query($con, "INSERT INTO `buy`(`id`, `number`, `item_id`) VALUES (NULL,'$number','$id')");
        if($buy) {
            echo "<h3>Товар заказан! Ожидайте звонок!</h3>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ? fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- ? styles -->
    <link rel="stylesheet" href="./assortment.css">
</head>
<body>
    
<style>
    h3{
        font-size: 42px;
        margin-top: 150px;
    }
    img{
        max-width: 225px;
    }
    footer{
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }
    .buy{
        margin: 0 auto;
    }
    form{
        display: flex;
        row-gap: 56px;
        flex-direction: column;
    }
    input{
        cursor: pointer;
        width: 225px;
        padding: 15px 25px;
        border: none;
        background: #b8c4b9;
        color: azure;
    }
    

</style>

    <div class="wrapper">
    <header>
        <section class="header">
            <div class="header__container container">
                <div class="header__item">
                    <a href="index.html">
                        <img src="./images/icons/лого.png" alt="logo">
                    </a>
                    <p class="header__logo">камелия</p>
                </div>
            </div>
        </section>
    </header>

    <main class="main">
        <section class="assortment">
            <div class="assortment__container container">

            <?php
            if(isset($_POST['submit'])) {
                $id = $_POST['id'];
                $sql = mysqli_query($con, "SELECT * FROM `products` WHERE `id` = '$id'");
                if($row = mysqli_fetch_assoc($sql)) {
                echo '
                <p>Ваш заказ:</p>
                <article class="card">
                <div class="card__name">
                '.$row['name'].'
                </div>
                <div class="card__image">
                <img src="../crud/'.$row['img'].'">
                </div>
                <div class="card__price">
                '.$row['price'].'
                </div>
                </article>
                <div class="buy">   
                <form action="buy.php" method="post">
                
                    <input type="number" name="id" value="'.$id.'" style="display:none"/>


                    <input type="number" name="number" placeholder="Введите ваш номер телефона"/>

                    <input type="submit" value="Заказать" name="buy">
                </form>
            </div>
                ';
                };
            }
        ?>
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


</div>

</body>
</html>