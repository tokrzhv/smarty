<?php
/*
define("SMARTY_LIB", "libs/");
require_once (SMARTY_LIB."Smarty.class.php");
require_once ("admin/param.php");
$smarty_main= new Smarty();
*/
//$page="index";
if(isset($page)){
    $query="Select meta_title, meta_keywords, meta_description, title, content, name, page, priority from setting WHERE page='$page'";
    $rez=mysqli_query($dbc, $query) or die ("error");
    $next=mysqli_fetch_array($rez);
    $smarty_main->assign("meta_title", $next['meta_title']);
    $smarty_main->assign("meta_keywords", $next['meta_keywords']);
    $smarty_main->assign("meta_description", $next['meta_description']);
    if (isset($content)){
        $smarty_main->assign("content", $content);
    }else {
        $smarty_main->assign("content", $next['content']);
    }
    $smarty_main->assign("title", $next['title']);
/////////////////menu///////////////////////////////////////////////////////////////////////////////////
    $querym="Select name, page from setting ORDER BY priority ASC ";
    $rezm=mysqli_query($dbc, $querym) or die ("errorm");
    $menu=array();
    while ($nextm=mysqli_fetch_array($rezm)){
        $menu[]=array("name"=>$nextm['name'], "page"=>$nextm['page']);//асоциат массив
    }
    $smarty_main->assign("menu", $menu);
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    $query2="Select id, model from categories";
    $rez2=mysqli_query($dbc, $query2) or die ("error");
    $cat=array();
    while ($next2=mysqli_fetch_array($rez2)){
        array_push($cat, array("id"=>$next2['id'], "model"=>$next2['model']));
    }
    $smarty_main->assign("cat", $cat);
////////////////////////////////////////////////////////////////////////////////////////
if (isset($_SESSION['items']) && count($_SESSION['items'])>0 && $page!="order" && $page!="order2"){
    $items=array();
    $totalsum=0;
    foreach ($_SESSION['items'] as $tmp){
        $stoimost=$tmp['price']*$tmp['count'];
        $totalsum+=$stoimost;
        $items[]=array("id"=>$tmp['id'], "model"=>$tmp['model'], "image"=>$tmp['image'], "price"=>$tmp['price'], "count"=>$tmp['count'], "stoimost"=>$stoimost );
    }
    $smarty_main->assign("items", $items);
    $smarty_main->assign("totalsum", $totalsum);
    $smarty_main->assign("num", 1);
}
////////////////////////////////////////////////////////////////////////////////////////
    $smarty_main->display("main.tpl");
}else {
    echo "view  page <a href='index.php'>Main</a>";
}
?>