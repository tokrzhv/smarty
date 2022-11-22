<h2>вы действительно хотите удалить {$model}</h2>
<form name="del" action="del_cat.php" method="post">
    <p>Да</p>
    <input type="radio" name="del" checked value="yes">
    <p>Нет</p>
    <input type="radio" name="del" value="no">
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Подтвердить">
</form>