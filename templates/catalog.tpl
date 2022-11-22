<div id="catalog" ><table  style="border: solid; font-size: larger; width: 930px">
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'">
            <th>№</th>
            <th>model</th>
            <th>Photo</th>
            <th>Price</th>
            <th>Count</th>
            <th>Подробнее</th></tr>

        {section loop=$catalog name=i}
        <tr bgcolor="#7fffd4" align="center">
            <td>{$scip++}</td>
            <td>{$catalog[i].model}</td>
            <td width="200px"><img src="images/{$catalog[i].img}" style="width: 100%"></td>
           {if isset($active_page)}
            <td><a href='catalog.php?page={$active_page}&sort={$sort}'>{$catalog[i].price} $</td>
            {/if}

            {if $catalog[i].count<1}
                <td>Нет на складе</td>
                {else}
            <td>{$catalog[i].count}
                <br><a href="basket.php?id={$catalog[i].id}&mod=add&page={$page}">Купить</a>
            {/if}
            <td><a href="out_item.php?idt={$catalog[i].id}">подробне</a></td></tr>
        {/section}
    </table>

    <table style="font-size: 20px; margin-top: 10px; width: 100%"><tr>
            {if ($active_page==1)}
                <td bgcolor='#7fffd4' style="text-decoration: none; color: black" > Первая </td>
                <td bgcolor='#7fffd4'><img src='../images/images.png' width=100px></td>
            {else}
                <td> <a href='catalog.php?page=1{if (isset($id_cat))}&id_cat={$id_cat}{/if}' style="text-decoration: none; color: black"> Первая </a></td>
                <td> <a href='catalog.php?page={$active_page-1}{if (isset($id_cat))}&id_cat={$id_cat}{/if}'><img src='../images/images.png' width=100px'></a></td>
            {/if}
            {for $i=1; $i<=$count_pages; $i++}
                {if ($i==$active_page)}
                    <td bgcolor='#7fffd4'>...</td>
                {else}
                    <td><a href='catalog.php?page={$i}{if isset($id_cat)}&id_cat={$id_cat}{/if}' style="text-decoration: none; color: black; display: block; width: 55px">{$i}</a></td>
                {/if}
            {/for}
            {if ($active_page==$count_pages)}
                <td bgcolor='#7fffd4'><img src='../images/download.jpg' width=100px></td>
                <td bgcolor='#7fffd4'> Последняя </td>
            {else}
                <td> <a href='catalog.php?page={$active_page+1}{if (isset($id_cat))}&id_cat={$id_cat}{/if}'><img src='../images/download.jpg' width=100px ></a></td>
                <td> <a href='catalog.php?page={$count_pages}{if (isset($id_cat))}&id_cat={$id_cat}{/if}' style="text-decoration: none; color: black"> Последняя </a></td>
            {/if}
        </tr></table></div>