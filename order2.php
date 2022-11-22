<?php
require_once ("header.php");
$page="order2";
$smarty_order= new Smarty();
if (isset($_POST['send']) && !empty($_POST['name']) && !empty($_POST['tel'])){
    $name=$_POST['name'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $adres=$_POST['adres'];
    $prem=$_POST['prem'];
    $query="Insert into klient  (name, tel, email, adres, prem) VALUE ('$name', '$tel', '$email', '$adres', '$prem')";
    $rez=mysqli_query($dbc, $query) or die ("error");
    $id_k=mysqli_insert_id($dbc);
    foreach ($_SESSION['items'] as $tmp){
        $query_r="Insert into relation (id_k, id_t, kolvo, data_z) VALUE ($id_k, ".$tmp['id'].", ".$tmp['count'].", now())";
        $rez_r=mysqli_query($dbc, $query_r) or die ("error_r");
    }
    $content="Ваш заказ принят, наш оператор свяжется с вами!";
    unset($_SESSION['items']);
    $_SESSION['items']=array();
}else {
    $content="Не достаточно данных для добавления";
}
 session_start();
    $num = 1;
    $totalsum = 0;
    $order2 = array();
    foreach ($_SESSION['items'] as $tmp) {
        $stoimost = $tmp['price'] * $tmp['count'];
        $totalsum = $totalsum + $stoimost;
        if (empty($image)) {
            $image = "nophpto.jpg";
        } else {
            $image = $tmp['image'];
        }
        $queryz = "Select count from items WHERE id=" . $tmp['id'];
        $rezz = mysqli_query($dbc, $queryz) or die ("errorrr");
        $nextzz = mysqli_fetch_array($rezz);
        $count = $nextzz['count'];
        array_push($order2, array("id" => $tmp['id'], "model" => $tmp['model'], "image" => $image, "price" => $tmp['price'], "count" => $tmp['count'], "stoimost" => $stoimost));
    }
    $smarty_order->assign("num", 1);
    $smarty_order->assign("order2", $order2);
    $smarty_order->assign("totalsum", $totalsum);
    $smarty_order->assign("send", $_POST['send']);
    $smarty_order->assign("content", $content);
    $content =$smarty_order->fetch("order2.tpl");

require_once ("main.php");
?>