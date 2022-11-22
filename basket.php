<?php
session_start();
if (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['mod']) && $_GET['mod']=="add") {
    $exist=false;
    if (!isset($_SESSION['items'])){
        $_SESSION['items']=array();
    }
    for ($i=0; $i<count($_SESSION['items']); $i++){
        if ($_SESSION['items'][$i]['id'] == $_GET['id']){
            $_SESSION['items'][$i]['count']++;
            $exist=true;
            break;
        }
    }
    if (!$exist){
        require_once ("admin/param.php");
        $query="Select id, model, image, price from items WHERE id=".$_GET['id'];
        $rez=mysqli_query($dbc, $query) or die ("error");
        $next=mysqli_fetch_array($rez);
        $image=$next['image'];
        if (empty($image)){
            $image="nophpto.jpg";
        }
        $_SESSION['items'][]=array("id"=>$_GET['id'], "model"=>$next['model'], "image"=>$image, "price"=>$next['price'], "count"=>1);
    }
}
//print_r($_SESSION['items']);
if (isset($_GET['mod']) && $_GET['mod']=="clear" && isset($_SESSION['items'])){
    unset($_SESSION['items']);
    $_SESSION['items']=array();
}
if (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['mod']) && $_GET['mod']=="del"){
    for ($i=0; $i<count($_SESSION['items']); $i++){
        if ($_SESSION['items'][$i]['id']){
            unset($_SESSION['items'][$i]);
                break;
        }
    }
    $items=array();
    foreach ($_SESSION['items'] as $tmp){
        if (!empty($tmp)){
            array_push($items, $tmp);
        }
    }
    unset($_SESSION['items']);
    $_SESSION['items']=array();
    $_SESSION['items']=$items;
    unset($items);
}
if (isset($_GET['page']) && !empty($_GET['page'])){
    $page=$_GET['page'];
    header("location:catalog.php?page=$page");
}else {
    header("location:catalog.php");
}