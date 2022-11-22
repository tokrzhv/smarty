<?php
if(!empty($_GET['idt']))
{
    require_once ("header.php");
    $page="out";
    $smarty_out=new Smarty();
    $query="Select id, model, data, count, image, categories, price, comment from items WHERE id=".$_GET['idt'];
    $rez=mysqli_query($dbc, $query) or die ("error");
    $next=mysqli_fetch_array($rez);
    $smarty_out->assign('id', $next['id']);
    $smarty_out->assign('model', $next['model']);
    $smarty_out->assign('data', $next['data']);
    $smarty_out->assign('count', $next['count']);
    $smarty_out->assign('image', $next['image']);
    $smarty_out->assign('id_cat', $next['categories']);
    $smarty_out->assign('price', $next['price']);
    $smarty_out->assign('comment', $next['comment']);
    $smarty_out->assign('num', 1);
    $id_cat=$next['categories'];
    $query2="Select id, model from categories WHERE id='".$id_cat."'";
    $rez2=mysqli_query($dbc, $query2) or die ("error2");
    $next2=mysqli_fetch_array($rez2);
    $smarty_out->assign('categories', $next2['model']);
    $content=$smarty_out->fetch("out_item.tpl");
    require_once ("main.php");
}else {
        echo "123";
}
?>