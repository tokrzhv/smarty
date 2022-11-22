<?php
/*
require_once ("header.php");
$page="catalog";
$catalog=new Smarty();
if (isset($_GET['id_cat'])){
    $query="Select id, model, image from items WHERE categories=".$_GET['id_cat'];
}else {
    $query="Select id, model, image from items";
}
$rez=mysqli_query($dbc, $query) or die ("error");
$catalog=array();
while ($next=mysqli_fetch_array($rez)){
    $img=$next['image'];
    if (empty($img)){
        $img="nophpto.jpg";
    }
    array_push($catalog, array("id"=>$next['id'], "model"=>$next['model'], "img"=>$img, "price"=>$next['price']));
}
$smarty_catalog=new Smarty();
$smarty_catalog->assign("catalog", $catalog);
$smarty_catalog->assign("number", 1);
$query2="Select id, model from categories";
$rez2=mysqli_query($dbc, $query2) or die ("error");
$cat=array();
while ($next2=mysqli_fetch_array($rez2)){
    array_push($cat, array("id"=>$next2['id'], "model"=>$next2['model']));
}
$smarty_catalog->assign("cat", $cat);
$content=$smarty_catalog->fetch("catalog.tpl");
require_once ("main.php");*/
require_once ("header.php");
$smarty_catalog=new Smarty();
if (isset($_GET['sort'])){
    $sort=$_GET['sort'];
}
switch ($sort) {
    case"asc":
        $sort="desc";
        break;
    case"desc":
        $sort="asc";
        break;
    default:
        $sort="asc";
        break;
}
$smarty_catalog->assign("sort", $sort);
$zapis=4;
if(isset($_GET['id_cat'])){
    $smarty_catalog->assign("id_cat", $_GET['id_cat']);
    $queryz="Select id from items WHERE categories=".$_GET['id_cat'];
}else {
    $queryz="Select id from items";
}
$rez=mysqli_query($dbc, $queryz) or die ("errorzz");
$count_rows=mysqli_num_rows($rez);
$count_pages= ceil($count_rows/$zapis);
if (isset($_GET['page'])) {
    $active_page=$_GET['page'];
}else {
    $active_page=1;
}
$scip=($active_page-1)*$zapis;
$smarty_catalog->assign("active_page", $active_page);
$smarty_catalog->assign("count_pages", $count_pages);
$smarty_catalog->assign("scip", $scip+1);
$smarty_catalog->assign("page", $_GET['page']);
$page="catalog";
$catalog=new Smarty();
if (isset($_GET['id_cat'])){
    $query="Select id, model, image, count, price from items  WHERE categories=".$_GET['id_cat']." ORDER BY price $sort limit $scip,$zapis";
}else {
    $query="Select id, model, image, count, price from items ORDER BY price $sort limit $scip,$zapis";
}
$rez=mysqli_query($dbc, $query) or die ("error");
$catalog=array();
while ($next=mysqli_fetch_array($rez)){
    $img=$next['image'];
    if (empty($img)){
        $img="nophpto.jpg";
    }
    array_push($catalog, array("id"=>$next['id'], "model"=>$next['model'], "img"=>$img, "count"=>$next['count'], "price"=>$next['price']));
}
$smarty_catalog->assign("catalog", $catalog);
$query2="Select id, model from categories";
$rez2=mysqli_query($dbc, $query2) or die ("error");
$cat=array();
while ($next2=mysqli_fetch_array($rez2)){
    array_push($cat, array("id"=>$next2['id'], "model"=>$next2['model']));
}
$smarty_catalog->assign("cat", $cat);
$content=$smarty_catalog->fetch("catalog.tpl");
require_once ("main.php");
?>