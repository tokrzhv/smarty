<div>
    <hr><a href="index.php">Back</a><hr>
    {section loop=$cat name="i"}
        <a href="index_items.php?id_cat={$cat[i].id}"> {$cat[i].model}</a> |
    {/section}
    <a href="index_items.php">Все</a><hr>
</div>
<div align="center">
    <table style="border: solid; font-size: larger; width: 800px">
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'">
            <th>№</th>
            <th>Model</th>
            <th>Photo</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        {section loop=$items name=i}
            <tr bgcolor="#7fffd4" align="center">
                <td >{$number++}</td>
                <td>{$items[i].model}</td>
                <td width="200px"><img src="/images/{$items[i].image}" style="width: 100%"></td>
                <td><a href="update_item.php?id={$items[i].id}">Update</a></td>
                <td><a href="del_item.php?id={$items[i].id}&model={$items[i].model}">Delete</a></td>
            </tr>
        {/section}
    </table>
</div>
