<?php
require_once ("header.php");
$page="order";
$smarty_order=new Smarty();
if (isset($_SESSION['items']) && count($_SESSION['items'])>0){
   if (isset($_POST['send'])){
        for ($i=0; $i<count($_SESSION['items']); $i++){
            $nameElement="count".$_SESSION['items'][$i]['id'];
            $_SESSION['items'][$i]['count']=$_POST[$nameElement];
                }
        }
    $totalsum=0;
    $order=array();
    foreach ($_SESSION['items'] as $tmp) {
        $stoimost = $tmp['price'] * $tmp['count'];
        $totalsum = $totalsum + $stoimost;
        if (empty($tmp['image'])) {
            $image = "nophpto.jpq";
        } else {
            $image = $tmp['image'];
        }
        $query="Select  count  from items WHERE id=".$tmp['id'];
        $rez=mysqli_query($dbc, $query) or die ("error");
        $next=mysqli_fetch_array($rez);

        array_push($order, array("max_count"=>$next['count'], "min_count"=>1, "id"=>$tmp['id'], "model"=>$tmp['model'], "image"=>$image, "price"=>$tmp['price'], "count"=>$tmp['count'], "stoimost"=>$stoimost));
    }
    $smarty_order->assign("order", $order);
    $smarty_order->assign("num", 1);
    $smarty_order->assign("totalsum", $totalsum);
    $content=$smarty_order->fetch("order.tpl");
}else{
    $content ="not item";
}
require_once ("main.php");
?>