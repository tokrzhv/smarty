<div align="center">
    <table align="center" border='1px' style="border: solid; font-size: larger; width: 900px; border='1px'">
        {section loop=$zakaz name=i}

            {if $zakaz[i].id_k!=$smena}
        <tr align="center"  style='border: black; font-size: 30px; background-color: skyblue'>
            <th>№</th>
            <th>fio</th>
            <th>phone</th>
            <th>email</th>
            <th>adres</th>
            <th>prem</th>
            <th>data_zakaza</th>
            <th>Удалить</th>
            <th>Выполнить</th></tr>

        <tr align="center" style='border: black'>
            <td>{$num++}</td>
            <td>{$zakaz[i].name}</td>
            <td>{$zakaz[i].tel}</td>
            <td>{$zakaz[i].email}</td>
            <td>{$zakaz[i].adres}</td>
            <td>{$zakaz[i].prem}</td>
            <td>{$zakaz[i].data_z}</td>
            <td><a href="del_zakaz.php?id_k={$zakaz[i].id_k}">X</a></td>
            <td><a href="run_zakaz.php?id_k={$zakaz[i].id_k}">>>></a></td></tr>

        <tr align="center" style='border: black'>
            <th>PHOTO</th>
            <th>MODEL</th>
            <th>Price</th>
            <th>Kolvo</th>
            <th>Count items</th>
            <th>Stoimost</th>
            <th>Haract</th></tr>
            {/if}
            {$smena=$zakaz[i].id_k}

            <tr align="center" style='border: black'>
            <td><img width="100" src="/images/{$zakaz[i].img}"></td>
            <td>{$zakaz[i].model}</td>
            <td>{$zakaz[i].price} $</td>
                <td>{$zakaz[i].kolvo}</td>
            <td>{$zakaz[i].count}</td>
            <td>{$zakaz[i].stoimost} $</td>
            <td>{$zakaz[i].comment}</td></tr>

{if $zakaz[i].stroka==$zakaz[i].rows}
        <tr align="center" style='font-family: Candara; font-size: 35px; border: red; background-color: aquamarine'>
            <td colspan='7'>Общaя стоимость:</td>
            <td colspan='3'>{$zakaz[i].totalsum} $</td></tr>
{/if}
    {/section}
    </table>



    <table style="font-size: 20px; margin-top: 10px; width: 100%"><tr>

            {if ($active_page==1)}
                <td bgcolor='#7fffd4' style="text-decoration: none; color: black" > Первая </td>
            {else}
                <td> <a href='zakaz.php?page=1' style="text-decoration: none; color: black"> Первая </a></td>
                <td> <a href='zakaz.php?page={$active_page-1}' style="text-decoration: none; color: black"> <<< </a></td>
            {/if}

            {for $i=1; $i<=$count_page; $i++}
                {if ($i==$active_page)}
                    <td bgcolor='#7fffd4'>...</td>
                {else}
                    <td><a href='zakaz.php?page={$i}' style="text-decoration: none; color: black; display: block; width: 55px">{$i}</a></td>
                {/if}
            {/for}

            {if ($active_page==$count_page)}
                <td bgcolor='#7fffd4'> Последняя </td>
            {else}
                <td> <a href='zakaz.php?page={$active_page+1}' style="text-decoration: none; color: black"> >>> </a></td>
                <td> <a href='zakaz.php?page={$count_page}' style="text-decoration: none; color: black"> Последняя </a></td>
            {/if}

        </tr></table></div>