<?php
    require_once "./db/db.php";
    // ? удаляем товар
    if(isset($_POST['delete'])) {
        $id = $_POST['id'];
        $del = mysqli_query($con, "DELETE FROM `products` WHERE id = '$id'");
        if($del) {
            echo '<p>Товар удален из базы данных!</p>
            <a href="read.php">Отправиться обратно!</a>
            ';
            
        }
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        img{
            max-width: 150px;
        }
        form{
    border: 5px solid #b8c4b9;
    border-radius: 15px;
    padding: 15px 35px;
    max-width: 350px;
    margin: 75px auto 0;
    display: flex;
    row-gap: 55px;
    justify-content: space-between;
    flex-direction: column;
}
input, button{
    border: none;
    background: none;
}
input:focus{
    outline: none;
}
input{
    cursor: pointer;
    padding: 15px;
    width: 100%;
    border-bottom: 1px solid #b8c4b9;
}
    </style>
<?php
        // ? вытаскиваем карточку которую мы хотим заапдейтить
        if(isset($_POST['update'])) {
            $id = $_POST['id'];
            $update = mysqli_query($con, "SELECT * FROM `products` WHERE `id` = '$id'");
            while($row = mysqli_fetch_assoc($update)) {
                echo '
                <form enctype="multipart/form-data" method="post" action="update.php">
                <input type="number" name="id" value="'.$row['id'].'"/>
                <input type="text" name="name" value="'.$row['name'].'"/>
                <img src="'.$row['img'].'">
                <input type="file" name="img"/>
                <input type="number" name="price" value="'.$row['price'].'"/>
                <input type="submit" name="updating" value="update"/>
                </form>
                ';
            };
        }
    ?>
</body>
</html>

