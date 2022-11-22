<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2><a href="index.php"> << </a> /Admin часть</h2>
<div>
    {if isset($username) && isset($userawatar) && isset($userprava)}
        <div id="login">
            <h1>{$username}</h1>
            {if $prava=1} <h3>Admin</h3>
            {else} <h3>Operator</h3>{/if}
            <img src="/images/{$userawatar}">
            <a href="exit.php" style="font-size: 20px">Exit</a>
        </div>
    {/if}
    {if isset($username)}
        <div id="add">
            <h2>Добавление товара:</h2>
            <ul>
                <li><a href="add_items.php">Add item</a></li>
                <li><a href="add_cat.php">Add categories</a></li>
            </ul></div>
        <div id="update">
            <h2>Управление:</h2>
            <ul>
                <li><a href="index_items.php">Items</a></li>
                <li><a href="index_cat.php">Cat</a></li>
            </ul></div>
    {/if}
    {if isset($userprava) && $userprava==1}
        <div id="add_admin">
            <h2>Регистрация:</h2>
            <ul>
                <li><a href="add_admin.php">Add admin/operator</a></li>
            </ul>
        </div>
    {/if}
    <div id="korzina">
        <h2>Корзина:</h2>
        <ul>
            <li><a href="arhiv.php">Архив</a></li>
            <li><a href="zakaz.php">Заказы</a></li>
        </ul>
    </div>
</div>
<div id="content">
    {$content}
</div>

<div>
    {$form}
</div>
</body>
</html>