<?php
require_once ("header.php");
$page="search";
$smarty_search=new Smarty();
if (isset($_GET['search']) && !empty($_GET['search'])){
    $search1=$_GET['search'];
    $search=str_replace(",", " ", $search1);
    $word=explode(" ", $search);
}
$final_word=array();
if (count($word)>0){
    foreach ($word as $tmp) {
        $final_word[] = $tmp;
    }
}
 $rezult_word=array();
    if (count($word) > 0) {
        foreach ($final_word as $tmp) {
            $rezult_word[] = " model like'%".$tmp."%'";
        }
    }
//print_r ($rezult_word);
    $rezult_where=implode(" or ", $rezult_word);
    if (!empty($rezult_where)){
        $query="Select id, model, image, price from items WHERE $rezult_where";
    }else {
        $query="Select id, model, image, price from items";
    }
    $rez=mysqli_query($dbc, $query) or die ("error");
    $search=array();
    while($next=mysqli_fetch_array($rez)){
        $img=$next['image'];
        if (empty($img)){
            $img="nophpto.jpg";
        }
        array_push($search, array("id"=>$next['id'], "model"=>$next['model'], "img"=>$img, "price"=>$next['price']));
    }
    $smarty_search->assign("search", $search);
    $smarty_search->assign("num", 1);
$content=$smarty_search->fetch("search.tpl");
require_once ("main.php");