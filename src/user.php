<?php
    require_once('../crud/db/db.php');


    if(isset($_POST['reg'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];

        $sql = mysqli_query($con, "INSERT INTO `users`(`id`, `name`, `password`) VALUES (null,'$name','$password')");
        if($sql) {
            echo '
            Теперь вы зарегестрированы!
            <a href="index.php?name='.$name.'">Вернуться на главную страницу</a>
            ';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <style>
        body{
            height: 100vh;
            background-color: #b8c4b9;
        }
        form{
            height: 100%;
            align-items: center;
            justify-content: center;
            display: flex;
            row-gap: 25px;
            flex-direction: column;
        }
    </style>
    
    <form action="user.php" method="post">

    <input type="text" name="name" placeholder="Введите ваше имя">

    <input type="password" name="password" placeholder='Введите ваш пароль'>

    <input type="submit" value="Регистрация" name='reg'>


    </form>



</body>
</html>