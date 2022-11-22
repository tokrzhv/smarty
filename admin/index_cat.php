<?php
require_once ("header.php");
if (isset($_SESSION['userid']) && isset($_SESSION['username']) && isset($_SESSION['userawatar']) && isset($_SESSION['userprava'])){
    $query="Select id, model from categories";
    $rez=mysqli_query($dbc, $query) or die ("error");
    $update=array();
    while($next=mysqli_fetch_array($rez)){
        $update[]=array("model"=>$next['model'], "id"=>$next['id'] );
    }
    $smarty_index=new Smarty();
    $smarty_index->assign("update", $update);
    $smarty_index->assign("number", 1);
    $content=$smarty_index->fetch("index_cat.tpl");
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}else {
    echo "page not found";
}
?>