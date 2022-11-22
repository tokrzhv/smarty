<?php
require_once ("header.php");
if (isset($_GET['id']) && !empty($_GET['id'])){
    $query="Select id, meta_title, meta_keywords, meta_description, title, content from setting WHERE id=".$_GET['id'];
    $rez=mysqli_query($dbc, $query) or die ("error21");
    $next=mysqli_fetch_array($rez);
    $smarty_update=new Smarty();
    $smarty_update->assign("id", $next['id']);
    $smarty_update->assign("meta_title", $next['meta_title']);
    $smarty_update->assign("meta_keywords", $next['meta_keywords']);
    $smarty_update->assign("meta_description", $next['meta_description']);
    $smarty_update->assign("title", $next['title']);
    $smarty_update->assign("content", $next['content']);

    $content=$smarty_update->fetch("update_page.tpl");
}else if (isset($_POST['send']) && !empty($_POST['id']) && !empty($_POST['meta_title']) && !empty($_POST['meta_keywords']) && !empty($_POST['meta_description']) && !empty($_POST['title']) && !empty($_POST['content'])){
    $query2="Update  setting SET meta_title='".$_POST['meta_title']."', meta_keywords='".$_POST['meta_keywords']."', meta_description='".$_POST['meta_description']."', title='".$_POST['title']."', content='".$_POST['content']."' WHERE id=".$_POST['id'];
    //echo $query2;
    mysqli_query($dbc, $query2) or die ("error2");
    $content="Данные успешно измсенены";
    mysqli_close($dbc);
}
else{
    $content="Редактирование не возможно ";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
?>