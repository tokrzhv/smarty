<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="{$meta_keywords}">
    <meta name="description" content="{$meta_description}">
    <title>{$meta_title}</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>Проект SMARTY </h1>
</header>
<div id="main">
    <div id="menu">
        <ul>
            {section loop=$menu name=i}
                <li><a href="{$menu[i].page}.php">{$menu[i].name}</a></li>
            {/section}
        </ul></div>
</div>
    <div id="content">
      <h2 align="center">{$title}</h2>
        <div id="poisk">
            <form name="poisk" method="get" action="search.php">
                <input name="search" type="text" placeholder="search">
                <input name="send" type="submit">
            </form></div>
        {if isset($items)}
                <div id="korzina">
                    <table border="solid">
                        <tr><th colspan="6">Korzina</th></tr>
                        <tr>
                            <th>№</th>
                            <th>Model</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Stoimost</th>
                            <th>Del</th></tr>
                        {section loop=$items name=i}
                            <tr>
                                <td>{$num++}</td>
                                <td>{$items[i].model}</td>
                                <td width="100px"><img src="images/{$items[i].image}" style="width: 100%"></td>
                                <td>{$items[i].price}$</td>
                                <td>{$items[i].stoimost}$</td>
                                <td><a href="basket.php?id={$items[i].id}&mod=del" style="color: darkred">X</a></td></tr>
                        {/section}
                        <tr>
                            <td colspan="4">Итого:</td>
                            <td colspan="2">{$totalsum}$</td></tr>
                        <tr>
                            <td colspan="3"><a href="basket.php?mod=clear">Очистить</a></td>
                            <td colspan="3"><a href="order.php">Заказать</a></td></tr></table>
                </div>
            {/if}
        <div>
            <div id="cat">
                {section loop=$cat name="i"}
                    <a href="catalog.php?id_cat={$cat[i].id}"> {$cat[i].model} </a>
                {/section}
                <a href="catalog.php">Все</a>
            </div>
        </div>
            {$content}
</div>
<footer>
    &copy; Сергей Токаржевский 2018
</footer>
</body>
</html>