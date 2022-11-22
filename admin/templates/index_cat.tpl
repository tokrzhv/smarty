<a href="index.php">Back</a>
<div align="center">
    <table style="border: solid; font-size: larger; width: 800px">
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'" align="center">
            <th>№</th>
            <th>Название</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        {section loop=$update name=i}
        <tr bgcolor="#7fffd4" align="center">
            <td>{$number++}</td>
            <td>{$update[i].model}</td>
            <td> <a href="update_cat.php?id={$update[i].id}">Update</a></td>
            <td> <a href="del_cat.php?id={$update[i].id}&model={$update[i].model}">Delete</a></td></tr>
        {/section}
    </table>
</div>