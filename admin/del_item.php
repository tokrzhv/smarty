<?php
require_once ("header.php");
if(!empty($_GET['id']) && isset($_GET['model'])){
    $smarty_del= new Smarty();
    $smarty_del->assign("id", $_GET['id']);
    $smarty_del->assign("model", $_GET['model']);
    $content=$smarty_del->fetch("del_item.tpl");

} else if(isset($_POST['send']) && !empty($_POST['id']) && $_POST['del']=="yes"){
    $query2="Select image from items WHERE id=".$_POST['id'];
    $result2=mysqli_query($dbc, $query2) or die ("error запрос/2");
    $next2=mysqli_fetch_array($result2);
    $photo=$next2['image'];
    if (!empty($photo)) {
        @unlink("../images/$photo");
    }
    $query="Delete from items WHERE id=".$_POST['id'];
    mysqli_query($dbc, $query) or die ("errorz");
    $content="Данные успешно удалены";
    header("refresh:1; url=index_items.php");
}else {
    $content="удаление невозможно или отменено";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");