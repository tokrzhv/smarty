<?php
require_once ("header.php");
if (isset($_SESSION['userid']) && $_SESSION['username'] && $_SESSION['userawatar'] && $_SESSION['userprava']){
$query="Select id, name from setting";
$rez=mysqli_query($dbc, $query) or die ("error");
$update=array();
while($next=mysqli_fetch_array($rez)){
    $update[]=array("name"=>$next['name'], "id"=>$next['id']);
}
$smarty_index=new Smarty();
$smarty_index->assign("update", $update);
$smarty_index->assign("number", 1);
$content=$smarty_index->fetch("index.tpl");//метод фетч комп 2 файла и результат компил сохраняет в переменную

$smarty_main->assign("content", $content);
$smarty_main->assign("userid", $_SESSION['userid']);
$smarty_main->assign("username", $_SESSION['username']);
$smarty_main->assign("userawatar", $_SESSION['userawatar']);
$smarty_main->assign("userprava", $_SESSION['userprava']);

$smarty_main->display("main.tpl");
}else {
 echo "page not found 404";
}
?>