<div id="order2">
    {if isset($send)} <h2 align="center">{$content}</h2> {else}
        <form method="post" action="order2.php">
        <h2 align="center">Введите свои данные</h2>
        <input type="text" name="name" placeholder="ФИО"><br>
        <input type="tel" name="tel" placeholder="tel"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="text" name="adres" placeholder="add your adress"><br>
        <textarea name="prem" placeholder="add prem"></textarea><br>
        <input type="submit" name="send"><br>
    </form>

        <table  style="border: solid; font-size: larger" width="530px">
        <tr><th colspan="7"><h2>Ваш заказ</h2></th></tr>
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'">
            <th>№</th>
            <th>Photo</th>
            <th>Model</th>
            <th>Price</th>
            <th>Count</th>
            <th>Стоимость</th>
        </tr>
        {section loop=$order2 name=i}
            <tr bgcolor="#7fffd4" align="center">
            <td>{$num++}</td>
            <td><img width="50px" src='images/{$order2[i].image}'></td>
            <td>{$order2[i].model}</td>
            <td>{$order2[i].price}</td>
            <td>{$order2[i].count}</td>
            <td>{$order2[i].stoimost}</td>
            </tr>{/section}
        <tr bgcolor="#7fffd4" align="center">
            <td colspan="4">Итого:</td>
            <td colspan="2">{$totalsum}$</td>
        </tr>
        </table>{/if}

</div>