<div id="order">
    {if isset($order)}
    <form action="order.php" method="post"><table border="solid" style="background-color: #4f7a8b" width="700px">
            <tr>
                <th>№</th>
                <th>Model</th>
                <th>Image</th>
                <th>Price</th>
                <th>count</th>
                <th>Stoimost</th>
                <th>Del</th></tr>
            {section loop=$order name=i}
                <tr>
                    <td>{$num++}</td>
                    <td>{$order[i].model}</td>
                    <td width="100px"><img src="images/{$order[i].image}" style="width: 100%"></td>
                    <td>{$order[i].price}$</td>
                    <td><input type="number" min="{$order[i].min_count}" max="{$order[i].max_count}" name="count{$order[i].id}" value="{$order[i].count}"></td>
                    <td>{$order[i].stoimost}$</td>
                    <td><a href="basket.php?id={$order[i].id}&mod=del" style="color: darkred">X</a></td></tr>
            {/section}
            <tr>
                <td colspan="4">Итого:</td>
                <td colspan="2">{$totalsum}$</td></tr>
            <tr>
                <td colspan='3'><a href='basket.php?mode=clear'>Очистить</a></td>
                <td colspan='4'><a href='order2.php'>Заказать</a></td>
            <tr><td colspan='7'><input type='submit' name='send'></td></tr></table>
        {/if}
    </form></div>