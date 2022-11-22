<div id="catalog">
    <table  style="border: solid; font-size: larger; width: 930px">
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'">
            <th>№</th>
            <th>model</th>
            <th>Photo</th>
            <th>Price</th>
            <th>Подробнее</th>
        </tr>
        {section loop=$search name=i}
            <tr bgcolor="#7fffd4" align="center">
                <td>{$num++}</td>
                <td>{$search[i].model}</td>
                <td width="200px"><img src="images/{$search[i].img}" style="width: 100%"></td>
                    <td>{$search[i].price} $</td>
                <td><a href="out_item.php?idt={$search[i].id}">подробне</a></td>
            </tr>
        {/section}
    </table>
</div>