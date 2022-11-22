<?php
require_once ("header.php");
if (isset($_SESSION['userid']) && isset($_SESSION['username']) && isset($_SESSION['userawatar']) && isset($_SESSION['userprava'])){
    if (!isset($_POST['send'])){
        $smarty_add=new Smarty();
        $content=$smarty_add->fetch("add_cat.tpl");
    } else if (isset($_POST['send']) && !empty($_POST['model'])){
        $query="Insert into categories (model) value ('".$_POST['model']."') ";
        mysqli_query($dbc, $query) or die ("error");
        $content="Успешно добавлено<br><a href='add_cat.php'>Добавить еще</a>";
    } else {
        $content="Не достаточно данных для добавления";
    }
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}else {
    echo "page not found";
}
?>