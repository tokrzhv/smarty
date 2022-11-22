<?php
require_once ("header.php");
if (isset($_SESSION['userid']) && isset($_SESSION['username']) && isset($_SESSION['userawatar']) && isset($_SESSION['userprava'])){

    if (isset($_GET['id_cat'])){
        $query="Select id, model, image from items WHERE categories=".$_GET['id_cat'];

    }else {
        $query="Select id, model, image from items";
    }
    $rez=mysqli_query($dbc, $query) or die ("error");
    $items=array();
    while ($next=mysqli_fetch_array($rez)){
        $img=$next['image'];
        if (empty($img)){
            $img="nophpto.jpg";
        }
        array_push($items, array("id"=>$next['id'], "model"=>$next['model'], "image"=>$img));
    }
    $smarty_items= new Smarty();
    $smarty_items->assign("items", $items);
    $smarty_items->assign("number", 1);
////////////////////////////////////////////////////////////////////////////////////////////////
    $query2="Select id, model from categories";
    $rez2=mysqli_query($dbc, $query2) or die ("error");
    $cat=array();
    while ($next2=mysqli_fetch_array($rez2)){
        array_push($cat, array("id"=>$next2['id'], "model"=>$next2['model']));
    }
    $smarty_items->assign("cat", $cat);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $content=$smarty_items->fetch("index_item.tpl");
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}else {
    echo "page not found";
}
?>