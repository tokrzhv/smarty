<form method="post" action="update_page.php">
    <h3>Редактирование meta_title</h3>
    <textarea name="meta_title">{$meta_title}</textarea>

    <h3>Редактирование meta_keywords</h3>
    <textarea name="meta_keywords">{$meta_keywords}</textarea><br>

    <h3>Редактирование meta_description</h3>
    <textarea name="meta_description">{$meta_description}</textarea><br>

    <h3>Редактирование title</h3>
    <input type="text" name="title" value="{$title}"><br>
    <h3>Редактирование content</h3>

    <textarea name="content">{$content}</textarea><br>
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" >
</form>