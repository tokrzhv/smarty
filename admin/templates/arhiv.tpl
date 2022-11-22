<div><table border='1' style="border: solid; font-size: larger; width: 900px; border='1px'">

        {section loop=$arhiv name=i}

            {if $arhiv[i].id_k!=$smena}
                <tr align="center" style='border: lime; border-bottom-color: red; font-size: 30px; background-color: #4f7a8b'>
                    <th>№</th>
                    <th>fio</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>adres</th>
                    <th>prem</th>
                    <th>data_zakaza</th>
                    <th>Вернуть</th></tr>

                <tr align="center">
                    <td>{$num++}</td>
                    <td>{$arhiv[i].name}</td>
                    <td>{$arhiv[i].tel}</td>
                    <td>{$arhiv[i].email}</td>
                    <td>{$arhiv[i].adres}</td>
                    <td>{$arhiv[i].prem}</td>
                    <td>{$arhiv[i].data_z}</td>
                    <td><a href="run_arhiv.php?id_k={$arhiv[i].id_k}"><<>></a></td></tr>

                <tr align="center">
                    <th>PHOTO</th>
                    <th>MODEL</th>
                    <th>Price</th>
                    <th>Kolvo</th>
                    <th>Count items</th>
                    <th>Stoimost</th>
                    <th>Haract</th></tr>
                {/if}
                    {$smena=$arhiv[i].id_k}

            <tr align="center">
                <td><img width="100" src="/images/{$arhiv[i].image}"></td>
                <td>{$arhiv[i].model}</td>
                <td>{$arhiv[i].price} $</td>
                <td>{$arhiv[i].kolvo}</td>
                <td>{$arhiv[i].count}</td>
                <td>{$arhiv[i].stoimost} $</td>
                <td>{$arhiv[i].comment}</td></tr>

            {if $arhiv[i].stroka==$arhiv[i].rows}
                <tr align="center" style='color: red; font-family: Comic Sans MS; font-size: 25px; border: double 2px black'>
                    <td colspan='7'>Общaя стоимость:</td>
                    <td colspan='3'>{$arhiv[i].totalsum} $</td></tr>
            {/if}
            {/section}
    </table></div>