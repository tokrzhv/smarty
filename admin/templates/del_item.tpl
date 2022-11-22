<h2>вы действительно хотите удалить {$model}</h2>
<form name="delf" action="del_item.php" method="post">
    <p>Да</p>
    <input type="radio" name="del" checked value="yes">
    <p>Нет</p>
    <input type="radio" name="del" value="no">
    <input type="hidden" name="id" value="{$id}"><br>
    <input type="submit" name="send" value="Подтвердить">
</form>