<?php
require_once ("header.php");
if (isset($_GET['id']) && !empty($_GET['id'])){
    $query="Select id, model from categories WHERE id=".$_GET['id'];
    $rez=mysqli_query($dbc, $query) or die ("error");
    $next=mysqli_fetch_array($rez);
    $smarty_update_cat=new Smarty();
    $smarty_update_cat->assign("id", $next['id']);
    $smarty_update_cat->assign("model", $next['model']);
    $content=$smarty_update_cat->fetch("update_cat.tpl");
} else if (isset($_POST['send']) && !empty($_POST['id']) && !empty($_POST['model'])){
    $query2="Update categories Set model='".$_POST['model']."' WHERE id=".$_POST['id'];
    mysqli_query($dbc, $query2) or die ("error2");
    $content="Успешно изменено";
}else{
    $content="Редактирование невозможно";
}
mysqli_close($dbc);
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
