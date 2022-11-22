<form name="item" method="post" action="update_item.php" enctype="multipart/form-data">
       <h1>Update This Model</h1>
       <input  type="text" name="model" value="{$model}">
       <h1>Update Data</h1>
       <input type="date" name="data" value="{$data}">
       <h1>Update count items</h1>
       <input type="number" name="count" value="{$count}">
       <h1>Update Image</h1>
       <table><tr><td><img src="../images/{$image}"><input type="hidden" name="oldphoto" value="{$image}"></td></tr></table>
       <input type="file" name="photo" >
    <h1>Update Categories</h1>
    <select name="id_cat">
        {section loop=$cat name=i}
            {if $categories==$cat[i].id}
                <option selected value="{$cat[i].id}"> {$cat[i].model}</option>
                {else }
                <option value="{$cat[i].id}">{$cat[i].model}</option>
            {/if}
        {/section}
    </select>
        <h1>Update price</h1>
        <input type="number" name="price" value="{$price}">
        <h1>Update Comment</h1>
        <input type="text" name="comment" value="{$comment}">
        <input type="hidden" name="id" value="{$id}"><br>
        <input type="submit" name="send" placeholder="send">
</form>