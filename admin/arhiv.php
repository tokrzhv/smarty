<?php
require_once ("header.php");
if (isset($_SESSION['userid']) && isset($_SESSION['username']) && isset($_SESSION['userawatar']) && isset($_SESSION['userprava'])){
    $smarty_arhiv= new Smarty();
    $query="Select name, tel, email, adres, prem, model, count, image, price, comment, id_k, kolvo, data_z from klient INNER JOIN smarty.relation on  klient.id = relation.id_k INNER JOIN items on relation.id_t = items.id WHERE status=1 ORDER BY relation.id_k DESC, relation.data_z DESC";
    $rez=mysqli_query($dbc, $query) or die ("error");

    $num=1;
    $smena=0;
    $totalsum=0;
    $stroka=1;
    $arhiv=array();
    while ($next=mysqli_fetch_array($rez)){
        $stoimost=$next['price']*$next['kolvo'];
        if ($next['id_k']!=$smena){
            $totalsum=0;
            $stroka=1;
            $query2="Select id_t from smarty.relation WHERE id_k=".$next['id_k'];
            $rez2=mysqli_query($dbc, $query2) or die ("error2");
            $rows=mysqli_num_rows($rez2);
        }
        $smena=$next['id_k'];
        $totalsum+=$stoimost;
        if (empty($next['image'])){
            $next['image']="nophpto.jpg";
        }
            array_push($arhiv, array("name"=>$next['name'], "tel"=>$next['tel'], "email"=>$next['email'], "adres"=>$next['adres'], "prem"=>$next['prem'], "model"=>$next['model'], "count"=>$next['count'], "image"=>$next['image'], "price"=>$next['price'], "comment"=>$next['comment'], "id_k"=>$next['id_k'], "kolvo"=>$next['kolvo'], "data_z"=>$next['data_z'], "totalsum"=>$totalsum, "stoimost"=>$stoimost, "stroka"=>$stroka, "rows"=>$rows));
        $stroka++;
    }
    $smarty_arhiv->assign("num", 1);
    $smarty_arhiv->assign("smena", $smena);
    $smarty_arhiv->assign("arhiv", $arhiv);
    $content=$smarty_arhiv->fetch("arhiv.tpl");
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
    mysqli_close($dbc);
}else {
    echo ("page not found");
}
?>