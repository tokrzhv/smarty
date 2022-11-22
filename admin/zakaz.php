<?php
/**
 * Created by PhpStorm.
 * User: tokar
 * Date: 29.10.2018
 * Time: 14:41
 */
require_once ("header.php");
if (isset($_SESSION['userid']) && isset($_SESSION['username']) && isset($_SESSION['userawatar']) && isset($_SESSION['userprava'])) {
    $smarty_z = new Smarty();
/*
    $zapis=4;
    $queryz="Select id_k from relation";
    $rezultz=mysqli_query($dbc, $queryz) or die ("error_z");
    $count_rows=mysqli_num_rows($rezultz);
    $count_page=ceil($count_rows/$zapis);

    if (isset($_GET['page'])){
        $active_page=$_GET['page'];
    }else{
        $active_page=1;
    }
    $scip=($active_page-1)*$zapis;
    $smarty_z->assign("active_page", $active_page);
    $smarty_z->assign("count_page", $count_page);
    $smarty_z->assign("scip", $scip+1);
    $smarty_z->assign("page", $_GET['page']);

//limit $scip, $zapis
*/

    $query = "SELECT name, tel, email, adres, prem, model, price, id_k, count, kolvo, image, comment, data_z from klient INNER JOIN relation on klient.id = relation.id_k INNER JOIN items on relation.id_t = items.id WHERE relation.status=0 ORDER BY relation.id_k DESC, relation.data_z DESC ";
    $rez = mysqli_query($dbc, $query) or die ("error");

    $num = 1;
    $smena = 0;
    $totalsum = 0;
    $stroka = 1;
    $zakaz = array();
    while ($next = mysqli_fetch_array($rez)) {
        $stoimost = $next['price'] * $next['kolvo'];
        if ($next['id_k'] != $smena) {
            $totalsum = 0;
            $stroka = 1;
            $query1 = "Select id_t from relation WHERE id_k = " . $next['id_k'];
            $rez1 = mysqli_query($dbc, $query1) or die ("error_0");
            $rows = mysqli_num_rows($rez1);
        }
        $smena = $next['id_k'];

        $totalsum += $stoimost;
        $img = $next['image'];
        if (empty($img)) {
            $img = "nophpto.jpg";
        }
        array_push($zakaz, array("name" => $next['name'], "tel" => $next['tel'], "email" => $next['email'], "prem" => $next['prem'], "model" => $next['model'], "price" => $next['price'], "id_k" => $next['id_k'], "count" => $next['count'], "kolvo" => $next['kolvo'], "img" => $img, "comment" => $next['comment'], "data_z" => $next['data_z'], "totalsum" => $totalsum, "stoimost" => $stoimost, "rows" => $rows, "stroka" => $stroka));
        $stroka++;
    }
    $smarty_z->assign("num", 1);
    $smarty_z->assign("smena", $smena);
    $smarty_z->assign("zakaz", $zakaz);
    $content = $smarty_z->fetch("zakaz.tpl");
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");

    mysqli_close($dbc);
}else {
    echo ("page not found");
}
