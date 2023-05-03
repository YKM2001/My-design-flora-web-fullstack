<?php
    require_once "./db/db.php";

// ? заносим в карточку измененные даные
    if(isset($_POST['updating'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $descr = $_POST['description'];
        $categories = $_POST['categories'];
        // ? получаем файл через глобальную переменную
        $file = $_FILES['img'];
        // ? отправляем в нашу папку с названием картинки и случайным временем
        $path = "images/" . time() .basename($_FILES['img']['name']);
        // ? если получилось загрузить в нашу папку пишем гуд!
        if(move_uploaded_file($_FILES['img']['tmp_name'],$path)){
            echo "<p>Загружена картинка в папку images!</p>";
        }
        $updating = mysqli_query($con, "UPDATE `products` SET `name`='$name',`img`='$path',`descr`='$descr',`price`='$price',`categories`='$categories' WHERE id ='$id'");
        if($updating) {
            echo "Товар отредактирован!)";
        }
    }

?>