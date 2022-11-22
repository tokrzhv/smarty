<?php
require_once ("header.php");
if (isset($_GET['id_k']) && !empty($_GET['id_k'])){
    $query="Update relation set smarty.relation.status = 0 WHERE id_k=".$_GET['id_k'];
    $rez=mysqli_query($dbc, $query) or die ("error");
    $query2="Select id_t, kolvo from smarty.relation WHERE id_k=".$_GET['id_k'];
    $rez2=mysqli_query($dbc, $query2) or die ("error2");
    while($next2=mysqli_fetch_array($rez2)){
        $query3="Update items set count = count + ".$next2['kolvo']."   WHERE id = ".$next2['id_t'];
        $rez3=mysqli_query($dbc, $query3) or die ("error3");
    }
    mysqli_close($dbc);
}
header("location: arhiv.php");
?>