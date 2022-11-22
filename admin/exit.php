<?php
require_once ("header.php");
if (isset($_SESSION['userid']) && isset($_SESSION['username']) && isset($_SESSION['userawatar']) && isset($_SESSION['userprava'])){
    if (isset($_COOKIE[session_name()])){
        setcookie(session_name(), "", time()-7200);
    }
    $_SESSION=array();
    session_destroy();
    //header("location:../index.php");
    header("refresh:3; url=../index.php");
    $content="<h3>вы успешно вышли!</h3>";

    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}else{
    echo "page not found 404";
}
?>