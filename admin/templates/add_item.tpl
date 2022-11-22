<a href="index.php">Back</a>
<form name="items" method="post" action="add_items.php" enctype="multipart/form-data" >
    <input name="model" type="text" placeholder="add model"><br>
    <input name="data" type="date" placeholder="add dv"><br>
    <input name="count" type="number" placeholder="add count"><br>
    <input name="photo" type="file" placeholder="add photo"><br>
    <select name="id_cat">
        {section loop=$cat name=i}
            <option value="{$cat[i].id}">{$cat[i].model}</option>
        {/section}
    </select><br>
    <input type="number" name="price" placeholder="add price"><br>
    <input type="text" name="comment" placeholder="add comment"><br>
    <input type="submit" name="send" placeholder="add">
</form>