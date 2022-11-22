<div id="content">
    <table>
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'">
            <th colspan="3">Редактирование страниц</th></tr>
        <tr bgcolor="#7fffd4">
            <th>№</th>
            <th>Название</th>
            <th>Редактировать</th></tr>
            {section loop=$update name=i}
        <tr bgcolor="#90ee90" align="center">
            <td >{$number++}</td>
            <td>{$update[i].name}</td>
            <td><a href="update_page.php?id={$update[i].id}"> Редактировать</a></td></tr>
            {/section}
    </table></div>
