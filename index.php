<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect, "SELECT * FROM `goods`");
$goods = mysqli_fetch_all($goods);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Товары</title>
</head>
<body> 
<br><br>
<a href="index1.php"> Картинка </a>
    <h2>Главная страница</h2>   
    <br>
    <table>
        <tr>
            <th>id</th>
            <th>название</th>
            <th>описание</th>
            <th>цена</th>
            <th>&#9998</th>
        </tr>
        <?php
        foreach ($goods as $item){
            ?>
            <tr>
            <td><?= $item[0]?></td>
            <td><?= $item[1]?></td>
            <td><?= $item[2]?></td>
            <td><?= $item[3]?></td>
            <td><a href="update.php?id=<?=$item[0]?>">обновить</a></td>
        </tr>
            <?php
        }
        ?>        
    </table>
        <h2 >Добавить новый товар</h2>
        
        <form action="vendor/create.php" method="post">
        <p>Название</p>
        <input type="text" name="title">
        <p>Описание</p>
        <textarea name="description"></textarea>
        <p>Цена</p>
        <input type="number" name="price">
        <button type="submit">Добавить</button>
        </form>
        
</body>
</html>