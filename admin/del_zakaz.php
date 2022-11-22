<?php
require_once ("header.php");
if (isset($_GET['id_k']) && !empty($_GET['id_k'])){
    $query="Delete from smarty.relation WHERE id_k=".$_GET['id_k'];
    $rez=mysqli_query($dbc, $query) or die ("error");
    echo "Успешно удалено!";
    mysqli_close($dbc);
}
header("refresh:3; url=zakaz.php");
?>